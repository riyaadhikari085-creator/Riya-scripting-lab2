<!DOCTYPE html>
<html>
<body>

<h2>Upload CSV File</h2>

<form method="post" enctype="multipart/form-data">

    Select File:
    <input type="file" name="file" required>

    <br><br>

    <input type="submit" name="upload" value="Upload">

</form>

<?php

if (isset($_POST['upload'])) {

    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmp = $_FILES['file']['tmp_name'];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ($extension != "csv") {
        echo "Only CSV files are allowed.";
    }
    elseif ($fileSize >= 1024 * 1024) {
        echo "File size must be less than 1 MB.";
    }
    else {

        move_uploaded_file(
            $fileTmp,
            "uploads/" . $fileName
        );

        echo "File uploaded successfully.";
    }
}

?>

</body>
</html>