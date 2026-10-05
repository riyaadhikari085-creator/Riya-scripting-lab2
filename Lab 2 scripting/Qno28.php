<!DOCTYPE html>
<html>
<body>

<h2>Upload Profile Image</h2>

<form method="post" enctype="multipart/form-data">

    Select Image:
    <input type="file" name="profile" required>

    <br><br>

    <input type="submit" name="upload" value="Upload">

</form>

<?php

if (isset($_POST['upload'])) {

    $fileName = $_FILES['profile']['name'];
    $fileSize = $_FILES['profile']['size'];
    $fileTmp = $_FILES['profile']['tmp_name'];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowed = ["jpg", "jpeg", "png"];

    if (!in_array($extension, $allowed)) {

        echo "Only JPG, JPEG and PNG files are allowed.";

    } elseif ($fileSize >= 500 * 1024) {

        echo "File size must be less than 500 KB.";

    } else {

        move_uploaded_file(
            $fileTmp,
            "uploads/" . $fileName
        );

        echo "Profile image uploaded successfully.";
    }
}

?>

</body>
</html>