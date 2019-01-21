<?php

// image uploader upload

echo <<<_END
    <html>
    <head>
        <title>
            PHP For upload
        </title>
    </head>

    <body>

        <form method="post" action="index014.php" enctype="multipart/form-data">
            Select file: <input type='file' name='filename' size='10'>
            <input type='submit' value='upload'>
        </form>
_END;

if ($_FILES) {
    // note: folder where the image is going to be stored needs write permissions
    $name = $_FILES['filename']['name'];

    switch($_FILES['filename']['type']) {
        case 'image/jpeg': $ext = 'jpg'; break;
        case 'image/gif': $ext = 'gif'; break;
        case 'image/png': $ext = 'png'; break;
        case 'image/tiff': $ext = 'tif'; break;
        default: $ext = ''; break;
    }

    if ($ext) {
        $n = "image.$ext";
        move_uploaded_file($_FILES['filename']['tmp_name'], $n);
        echo "Uploaded image '$name' as '$n': <br>";
        echo "<img src='$n'>";
    } else {
        echo "'$name' is not an accepted image file";
    } 

    echo "</body></html>";
} else {
    echo "No image has been uploaded";
}

