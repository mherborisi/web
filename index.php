<!DOCTYPE html>
    <html>
        <head>
            <title>DevOps</title>
                <meta charset="utf-8">
        </head>
        <body>
            <h1 style="text-align:center">DevOps Training Course</h1>
            <form action="input.php" method="post">
            Input_Text: <input type="text" name="input">
                  <input type="submit">
            </form>
                <br>
                <br>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload: <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
            </form>

            
        </body>
</html>

