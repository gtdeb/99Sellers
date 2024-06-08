@extends('layouts.app', ['activePage' => 'media_config', 'titlePage' => __('Admin Panel: Media Configuration')])

@section('content_header')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Sorry !</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="input-group control-group" >
                <table>
                    <thead>
                    <tr>
                        <th>
                            <h4><b>Media File Category Setting Section</b></h4>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <h4><b>Add New Parent Category</b></h4>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="collapsible-body">
                                    <tr>
                                        <td>
                                            <label for="parent_cat_name">Name</label><br>
                                            <input type="text" id="parent_cat_name" name="parent_cat_name"><br>
                                            <label for="parent_cat_name"><i>The name is how it appears on your site.</i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="parent_cat_slug">Slug</label><br>
                                            <input type="text" id="parent_cat_slug" name="parent_cat_slug"><br>
                                            <label for="parent_cat_slug"><i>The "slug" is the URL-friendly version of the name. It is usually<i><br>
                                                    </i>all lowercase and contains only letters, numbers, hyphens.</i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="parent_cat_description">Description</label><br>
                                            <textarea id="parent_cat_description" name="parent_cat_description"></textarea><br>
                                            <label for="parent_cat_description"><i>The description is not prominent by default; however, some<i><br>
                                                    </i>themes may show it. </i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" id="parent_cat_btn" name="parent_cat_btn" class="btn btn-success"><i class="glyphicon glyphicon-check"></i>Add</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="margin-top:40px">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <h4><b>Add New Child Category</b></h4>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label for="child_cat_name">Name</label><br>
                                            <input type="text" id="child_cat_name" name="child_cat_name"><br>
                                            <label for="child_cat_name"><i>The name is how it appears on your site.</i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="child_cat_slug">Slug</label><br>
                                            <input type="text" id="child_cat_slug" name="child_cat_slug"><br>
                                            <label for="child_cat_slug"><i>The "slug" is the URL-friendly version of the name. It is usually<i><br>
                                                    </i>all lowercase and contains only letters, numbers, hyphens.</i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="child_cat_description">Description</label><br>
                                            <textarea id="child_cat_description" name="child_cat_description"></textarea><br>
                                            <label for="child_cat_description"><i>The description is not prominent by default; however, some<i><br>
                                                    </i>themes may show it.</i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="parent_cat_select">Parent Category</label><br>
                                            <select id="parent_cat_select">
                                                <option value="None">None</option>
                                            </select><br>
                                            <label for="parent_cat_select"><i>Categories, unlike tags, can have a hierarchy. You might have<i><br>
                                                    </i>a jazz category, and under that have children categories for Bebop or Big Band.<i><br>
                                                    </i>Totally optional</i></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" id="child_cat_btn" name="child_cat_btn" class="btn btn-success"><i class="glyphicon glyphicon-check"></i>Add</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="input-group control-group" style="margin-top:80px">
                <table>
                    <thead>
                    <tr>
                        <th>
                            <h4><b>Media File Extension Setting Section</b></h4>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <table>
                                <thead>
                                <h4><b>Add New Extension</b></h4>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label for="media_file_ext">Name</label><br>
                                        <textarea id="media_file_ext" name="media_file_ext"></textarea><br>
                                        <label for="media_file_ext"><i>Type semicolon separated extension name/s like pdf;png;jpg;doc;mp4.</i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" id="media_file_ext_btn" name="media_file_ext_btn" class="btn btn-success"><i class="glyphicon glyphicon-check"></i>Add</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="input-group control-group" style="margin-top:80px">
                <table>
                    <thead>
                    <tr>
                        <th>
                            <h4><b>Media File Flag Setting Section</b></h4>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <table>
                                <thead>
                                <h4><b>Add New Flag</b></h4>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label for="media_flag">Name</label><br>
                                        <input type="text" id="media_flag" name="media_flag"><br>
                                        <label for="media_flag"><i>The name is how it appears on your site.</i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="media_flag_slug">Slug</label><br>
                                        <input type="text" id="media_flag_slug" name="media_flag_slug"><br>
                                        <label for="media_flag_slug"><i>The "slug" is the URL-friendly version of the name. It is usually<i><br>
                                                </i>all lowercase and contains only letters, numbers, hyphens.</i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" id="media_flag_btn" name="media_flag_btn" class="btn btn-success"><i class="glyphicon glyphicon-check"></i>Add</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="collapsible" style="margin-top:80px">
                <form method="post" action="{{url('media_upload')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!--<div class="input-group control-group" >-->
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i><h4><b>Media File Upload Section</b></h4></div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <div class="collapsible-body">
                                <tr>
                                    <td>
                                        <label>Supported media file extension/s <i>.jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.xls,.xlsx,.mp4,.avi,.csv,.txt</i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="filename">Browse file/s </label>
                                        <input type="file" id="filename" name="filename[]" class="form-control" multiple onchange="checkUploadFileExt()"><br>
                                        <label for="filename"><i>Can select maximum 20 files</i></label>
                                    </td>
                                    <td>
                                        <label for="source_path" style="margin-left:20px">And/Or Enter source directory path </label>
                                        <input type="text" id="source_path" name="source_path"><br>
                                        <label for="source_path" style="margin-left:20px"><i>Base directory(as given in path) and its whole content will be uploaded</i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="upload_from_excel_csv">Media upload from excel/csv file, Browse </label>
                                        <input type="file" id="upload_from_excel_csv" name="upload_from_excel_csv[]" class="form-control" multiple onchange="checkFileUploadExt()"><br>
                                        <label for="source_path"><i>Content of the file must contains a header to identify the media file and its<i><br>
                                                </i>details to upload</i></label>
                                    </td>
                                    <td>
                                        <label for="target_path" style="margin-left:20px">Enter store directory path </label>
                                        <input type="text" id="target_path" name="target_path"><br>
                                        <label for="source_path" style="margin-left:20px"><i>Media files are uploaded in this path. Default is "E:\MediaUpload. Under base<i><br>
                                                </i>directory Files are uploaded in \'fileupload\' directory and directory contents are in<i><br>
                                                </i>\'dirupload\' directory</i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-check"></i>Upload</button>
                                    </td>
                                </tr>
                            </div>
                        </tbody>
                    </table>
                </form>
                <section style="margin-top:40px">
                    <h4><i class="glyphicon glyphicon-picture"></i>Display Data Image</h4>
                    <div style="overflow:scroll; width:700px; height:1200px">
                        <table id='media_table' class="table table-striped table-bordered table-sm" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Media Id</th>
                                    <th>Media Location</th>
                                    <th>Media File</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(session('success'))
                                <?php $i = 1; ?>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$record->media_id}}</td>
                                        <td>{{$record->media_loc}}</td>
                                        <td>{{$record->media_name}}</td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </section>
                <script type="text/javascript">
                    function checkUploadFileExt() {
                        var SupportedExt = ['jpg','jpeg','png','doc','docx','ppt','pptx','xls','xlsx','mp4','pdf'];
                        var fileElement = document.getElementById("filename");
                        var fileExtension = "";
                        var failcount = 0, successcount = 0;
                        var selectedcount = 0;
                        const dt = new DataTransfer();

                        selectedcount = fileElement.files.length;
                        for (var i = 0, j = 0; i < selectedcount; ++i) {
                            fileExtension = "";
                            if(fileElement.files.item(i).name.lastIndexOf(".") > 0){
                                fileExtension = fileElement.files.item(i).name.substring(fileElement.files.item(i).name.lastIndexOf(".") + 1, fileElement.files.item(i).name.length);
                            }
                            if (!($.inArray(fileExtension.toLowerCase(), SupportedExt) == -1)) {
                                dt.items.add(fileElement.files.item(i));
                                successcount++;
                            }
                            else
                                failcount++;
                            if(successcount == 20) //max limit reached!
                                break;
                        }

                        if(failcount > 0) {
                            if (successcount == 20)
                                selectedcount = successcount;
                            else
                                selectedcount -= failcount;
                            document.getElementById("filename").files = dt.files;
                            alert("Allowed: "+SupportedExt.join(', ')+"\n"+selectedcount+" files selected");
                        }
                        else if(successcount == 20)
                            document.getElementById("filename").files = dt.files;
                    }

                    function checkFileUploadExt() {
                        var SupportedExt = ['chv', 'xls', 'xlsx'];
                        var fileElement = document.getElementById("upload_from_excel_csv");
                        var fileExtension = "";
                        var failcount = 0, successcount = 0;
                        var selectedcount = 0;
                        const dt = new DataTransfer();

                        selectedcount = fileElement.files.length;
                        for (var i = 0, j = 0; i < selectedcount; ++i) {
                            fileExtension = "";
                            if(fileElement.files.item(i).name.lastIndexOf(".") > 0){
                                fileExtension = fileElement.files.item(i).name.substring(fileElement.files.item(i).name.lastIndexOf(".") + 1, fileElement.files.item(i).name.length);
                            }
                            if (!($.inArray(fileExtension.toLowerCase(), SupportedExt) == -1)) {
                                dt.items.add(fileElement.files.item(i));
                                successcount++;
                            }
                            else
                                failcount++;
                            if(successcount == 20) //max limit reached!
                                break;
                        }

						if(failcount > 0) {
                            if (successcount == 20)
                                selectedcount = successcount;
                            else
                                selectedcount -= failcount;
                            document.getElementById("upload_from_excel_csv").files = dt.files;
                            alert("Allowed: "+SupportedExt.join(', ')+"\n"+selectedcount+" files selected");
                        }
                        else if(successcount == 20)
                            document.getElementById("upload_from_excel_csv").files = dt.files;
                    }

                    $(document).ready(function () {
                        $('#media_table').DataTable({
                            "scrollX": true,
                            "scrollY": 200,
                        });
                        $('.dataTables_length').addClass('bs-select');
                        $('.collapsible').collapsible();
                    });
                </script>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script type="text/javascript">

    </script>
@endsection
