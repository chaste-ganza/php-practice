<?php
if (isset($_FILES["myfile"])) {

    echo "File name: " . $_FILES["myfile"]["name"] . "<br>";
    echo "File size: " . $_FILES["myfile"]["size"] . " bytes<br>";

    if ($_FILES["myfile"]["error"] === 0) {
        move_uploaded_file(
            $_FILES["myfile"]["tmp_name"],
            "uploads/" . $_FILES["myfile"]["name"]
        );
        echo "Upload successful!";
    } else {
        echo "Upload failed due to size or configuration limits.";
    }
}
?>