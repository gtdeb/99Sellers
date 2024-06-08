<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MultipleMediaUpload;
use App\MediaFileNamesModel;
use DB;

class MediaUploadController extends Controller
{
    // Recursive scan directory, and builds an array

    protected function ScanDirectory($dir,$files, $relativedir){
        // Is there actually such a folder/file?
        if(file_exists($dir)){
            foreach(scandir($dir) as $f) {
                if(!$f || $f[0] == '.') {
                    continue; // Ignore hidden files
                }
                if(is_dir($dir . '\\' . $f)) {
                    // The path is a folder
                    $files = self::ScanDirectory($dir . '\\' . $f, $files, $relativedir . '\\' . $f); // Recursively get the contents of the folder
                }
                else {
                    // It is a file
                    array_push($files, $relativedir . '\\' . $f);
                }
            }
        }
        return $files;
    }

    protected function getMediaId($location, $filename, $ext)
    {
        try {
            $result = DB::table('media')
                ->where('location', $location)
                ->where('upload_file_name', $filename)
                ->where('extension', $ext)
                ->get('media_id');
            #printf($result);
            if ($result)
                return $result;
            else
                return null;
        } catch (\Exception $e){
            return null;
        }
    }

    protected function performDBUpload($filepath, $filename, $ext, $status){
        $media_id = null;
        $retVal = null;
        //Check if the record already exists in the media database
        $retVal = $this->getMediaId($filepath, $filename, $ext);
        if($retVal == null or count($retVal) == 0){
            //Now upload record in media database
            $uploadModel = new MultipleMediaUpload();
            $uploadModel->location = $filepath;
            $uploadModel->upload_file_name = $filename;
            $uploadModel->extension = $ext;
            $uploadModel->created_time = now();
            $uploadModel->updated_time = now();
            $status &= $uploadModel->save();

            //Trt to fetch the media_id of the newly inserted media file from media database
            $retVal = $this->getMediaId($filepath, $filename, $ext);
            if($retVal != null) {
                $media_id = $retVal[0]->{'media_id'};
                //Now upload record in filenames database
                $uploadFilenames = new MediaFileNamesModel();
                $uploadFilenames->filename = $filename;
                $uploadFilenames->media_id = $media_id;
                $status &= $uploadFilenames->save();
            } else {
                $status &= false;
            }
        }
        else {
            $status &= false;
        }

        return $status;
    }

    public function index(Request $request)
    {
        $records = $this->media_get_no_tag_category($request);
        //dd($data);
        return view('pages.admin_panel.media_config',compact('records'));
    }

    public function media_get_no_tag_category(Request $request)
    {
        try {
            $result = DB::table('media')
                ->select(['media.media_id as media_id', 'media.location as media_loc', 'media.upload_file_name as media_name'])
                //->join('filenames', 'media.media_id', '=', 'filenames.media_id' )
                ->where('media.IsTag', 'no')
                ->where('media.IsCategories', 'no')
                ->get();
            if ($result)
                return $result;
            else
                return null;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function media_upload(Request $request)
    {
        $sourcePath = null;
        $storePath = "E:\MediaUpload"; //Default
        $status = true;
        $files = array();
        $uploadcount = 0;
        $returnString = null;

        if(is_dir($request->get('source_path'))){
            $sourcePath = $request->get('source_path');
            if(Str::endsWith($sourcePath,"\\")) {
                $sourcePath = Str::of($sourcePath)->rtrim('\\');
            }
            if(is_dir($request->get('target_path'))){
                $storePath = $request->get('target_path'); //Override default store path
                if(Str::endsWith($storePath, "\\"))
                    $storePath = Str::of($storePath)->rtrim('\\');
            }
            $relativedir = "";
            $fileList = self::ScanDirectory($sourcePath, $files, $relativedir);
            //create if not exist dirupload directory in $storePath location
            $storePath_dir = $storePath . '\dirupload' . '\\' . basename($sourcePath);
            if(!file_exists($storePath_dir)){
                mkdir($storePath_dir, 0777, true);
            }

            for($i = 0; $i < count($fileList); $i++){
                $status = true; //Initialize
                $ext = pathinfo($fileList[$i])['extension'];
                if($ext == "txt" or $ext == "csv" or $ext == "avi" or $ext == "mp4" or $ext == "gif" or $ext == "jpeg" or $ext == "jpg" or $ext == "png" or $ext == "pdf" or $ext == "doc" or $ext == "docx" or $ext == "xls" or $ext == "xlsx" or $ext == "ppt" or $ext == "pptx") {
                    $filename = pathinfo($fileList[$i])['filename'] . '.' . $ext;
                    $relativepath = dirname($fileList[$i]);
                    if(!file_exists($storePath_dir . '\\' . $relativepath)){
                        mkdir($storePath_dir . '\\' . $relativepath, 0777, true);
                    }
                    $filepath =  $storePath_dir . ($relativepath == '\\' ? "" : $relativepath);
                    $sourcepathabs = $sourcePath  . $relativepath;
                    copy($sourcepathabs . '\\' . $filename, $filepath . '\\' . $filename);

                    $status = $this->performDBUpload($filepath, $filename, $ext, $status);
                    $uploadcount += ($status ? 1 : 0);
                }
            }
        }

        //Now handle file/s upload
        if($request->hasfile('filename')){
            $request->validate([
                'filename' => 'required',
                'filename.*' => 'mimes:jpeg,jpg,png,doc,docx,ppt,pptx,xls,xlsx,pdf,mp4,avi,gif,txt,csv'
            ]);

            //create if not exist fileupload directory in $storePath location
            $storePath_file = $storePath . '\fileupload';
            if(!file_exists($storePath_file)){
                mkdir($storePath_file, 0777, true);
            }

            foreach($request->file('filename') as $single_file){
                $status = true; //Initialize

                $filename = $single_file->getClientOriginalName();
                $ext = pathinfo($filename)['extension'];

                $fileabspath = $single_file->move($storePath_file, $filename);
                $filepath = dirname($fileabspath);

                $status = $this->performDBUpload($filepath, $filename, $ext, $status);
                $uploadcount += ($status ? 1 : 0);
            }
        }

        if($uploadcount > 0) {
            $returnString = $uploadcount . ' media files uploaded successfully';
        }
        else{
            $returnString = "No file uploaded... duplicate entry? please check...";
        }

        return redirect('media_upload')->with('success', $returnString);
        //return back()->with('success', $returnString);
    }
}
