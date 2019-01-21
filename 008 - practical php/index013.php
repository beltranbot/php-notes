<?php

// image uploader upload

echo <<<_END
    <html>
    <head>
        <title>
            PHP For upload
        </title>
    </head>

    <form method="post" action="index013.php" enctype="multipart/form-data">
        Select file: <input type='file' name='filename' size='10'>
        <input type='submit' value='upload'>
    </form>
_END;

if ($_FILES) {
    // note: folder where the image is going to be stored needs write permissions
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);

    echo "Uploaded image '$name' <br><img src='$name'>";
}

