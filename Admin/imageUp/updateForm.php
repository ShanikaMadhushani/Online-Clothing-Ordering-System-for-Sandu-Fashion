<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Sandu Fashion</title>
    <meta name="description" content="Ajax Multiple Image Uploader">
    <meta name="author" content="tharindulucky">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/styles.css">
    <link rel="stylesheet" href="dist/css/updateForm.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- These are the necessary files for the image uploader -->
    <script src="dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="dist/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="dist/assets/jquery-file-upload/js/jquery.fileupload.js"></script>
</head>

<body>
<div class="container" style="background: #f9f5fc; width: 700px;">
        <img src="pics/logo.png" alt="" width="100" height="95">
      <font style="color: #851b85; font-weight: bold; font-size: 35px;margin-left: 100px;">Update Product</font>
        <!-- <h3>Update Product Details</h3> -->
        <hr style="color: #851b85;">
        <br>

                    <form method="post" action="server/form_process.php">

                        <!-- This area will show the uploaded files -->
                        <div class="row">
                            <div id="uploaded_images">

                            </div>
                        </div>

                        <br>
                        <br>

                        <div id="select_file">
                            <div class="form-group">
                                <label>Upload Image</label>
                            </div>
                            <div class="form-group">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Select file...</span>
                                    <!-- The file input field used as target for the file upload widget -->
                                <input id="fileupload" type="file" name="files" accept="image/x-png, image/gif, image/jpeg" >
                            </span>
                                <br>
                                <br>
                                <!-- The global progress bar -->
                                <div id="progress" class="progress">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                                <!-- The container for the uploaded files -->
                                <div id="files" class="files"></div>
                                <input type="text" name="uploaded_file_name" id="uploaded_file_name" hidden>
                                <br>
                            </div>
                        </div>

                        <label for="name">Product Name :</label><br>
            <input type="text" id="name">
            <br><br>

            <label for="code">Item Code :</label><br>
            <input type="text" id="code">
            <br><br>

            <label for="size">Sizes :</label><br>
           <font style="font-size: 16px;color: #851b85;">UK-6</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-8</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-10</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-14</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-16</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font style="font-size: 16px;color: #851b85;">UK-18</font> <input type="checkbox" id="size" style="width: 15px;height: 15px;">
            <br><br>

            <label for="price">Price :</label><br>
            <input type="text" id="price">
            <br><br>

            <label for="color">Colors :</label><br>
            <input type="text" id="color">
            <br><br>

            <label for="qty">Quantity :</label><br>
            <input type="text" id="qty">
            <br><br>

            <label for="cat">Category :</label><br>
            <select name="cat" id="cat" style="background: #f7e5f7; color: #851b85; width: 100%;border-color:#f7e5f7 ;height: 30px;">
                <option>Frock</option>
                <option>Linen Pants</option>
            </select>
            <br><br>

            <label for="description">Description :</label><br>
            <input type="text" id="description" style="height: 100px;">
            <br><br>

            <button type="submit" name="submit">UPDATE</button>
            
            <button  style="margin-top: 10px;">BACK</button>
            <button  style="margin-top: 10px;">CANCEL</button>

                        

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /*jslint unparam: true */
    /*global window, $ */

    var max_uploads = 5

    $(function () {
        'use strict';

        // Change this to the location of your server-side upload handler:
        var url = 'server/upload.php';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'html',
            done: function (e, data) {

                if(data['result'] == 'FAILED'){
                    alert('Invalid File');
                }else{
                    $('#uploaded_file_name').val(data['result']);
                    $('#uploaded_images').append('<div class="uploaded_image"> <input type="text" value="'+data['result']+'" name="uploaded_image_name[]" id="uploaded_image_name" hidden> <img src="server/uploads/'+data['result']+'" /> <a href="#" class="img_rmv btn btn-danger"><i class="fa fa-times-circle" style="font-size:48px;color:red"></i></a> </div>');

                    if($('.uploaded_image').length >= max_uploads){
                        $('#select_file').hide();
                    }else{
                        $('#select_file').show();
                    }
                }

                $('#progress .progress-bar').css(
                    'width',
                    0 + '%'
                );

                $.each(data.result.files, function (index, file) {
                    $('<p/>').text(file.name).appendTo('#files');
                });

            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });

    $( "#uploaded_images" ).on( "click", ".img_rmv", function() {
        $(this).parent().remove();
        if($('.uploaded_image').length >= max_uploads){
            $('#select_file').hide();
        }else{
            $('#select_file').show();
        }
    });
</script>

</body>
</html>