<?php
$conn = mysqli_connect("localhost","root","","example_db");

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];

    if($name=="" || $rank=="" || $status==""){
        echo "Fill all fields";
    }else{
        mysqli_query($conn,"INSERT INTO users(name,rank,status)
        VALUES('$name','$rank','$status')");
    }
}

if(isset($_GET['delete'])){
    mysqli_query($conn,"DELETE FROM users WHERE id=".$_GET['delete']);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];

    mysqli_query($conn,"UPDATE users SET
    name='$name',rank='$rank',status='$status'
    WHERE id=$id");
}

$data = mysqli_query($conn,"SELECT * FROM users");
?>

<form method="post">
    ID: <input type="text" name="id"><br>
    Name: <input type="text" name="name"><br>
    Rank: <input type="text" name="rank"><br>
    Status: <input type="text" name="status"><br>

    <input type="submit" name="save" value="Save">
    <input type="submit" name="update" value="Update">
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Rank</th>
    <th>Status</th>
    <th>Delete</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['rank']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="?delete=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>