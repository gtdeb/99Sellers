<?php
    function ScanFileOrDir(){
        $dir =;
        if(isset($_POST['dirup'])){
            var_dump($_FILES);
        }
        elseif(isset($_POST['fileup']){
            var_dump($_FILES);
        }
        #$dir = "F:\Debabrata\DigitalExposure\Projects\99Sellers\Admin Panel old\media_configuration\media";
        // Run the recursive function
        #$response = Scan($dir);
    }

    // This function scans the files folder recursively, and builds a large array
    function Scan($dir){
        $files = array();
        // Is there actually such a folder/file?
        if(file_exists($dir)){
            foreach(scandir($dir) as $f) {
                if(!$f || $f[0] == '.') {
                    continue; // Ignore hidden files
                }
                if(is_dir($dir . '/' . $f)) {
                    // The path is a folder
                    $files[] = array(
                        "name" => $f,
                        "type" => "folder",
                        "path" => $dir . '/' . $f,
                        "items" => scan($dir . '/' . $f) // Recursively get the contents of the folder
                    );
                }
                else {
                    // It is a file
                    $files[] = array(
                        "name" => $f,
                        "type" => "file",
                        #"path" => $dir . '/' . $f,
                        "size" => filesize($dir . '/' . $f) // Gets the size of this file
                    );
                }
            }
        }
        return $files;
    }
?>