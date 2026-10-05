<?php
$name=$address=$username=$email=$password=$website=$phone=$gender=$course="";
$error="";

if(isset($_POST['submit'])){

$name=$_POST['name'];
$address=$_POST['address'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$website=$_POST['website'];
$phone=$_POST['phone'];
$gender=$_POST['gender'] ?? "";
$course=$_POST['course'] ?? "";

if(!preg_match("/^[A-Za-z ]+$/",$name))
    $error="Invalid Name";
elseif($address=="")
    $error="Address is required";
elseif(!preg_match("/^[A-Za-z0-9_]+$/",$username))
    $error="Invalid Username";
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    $error="Invalid Email";
elseif(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W]).{8,}$/",$password))
    $error="Invalid Password";
elseif(!filter_var($website,FILTER_VALIDATE_URL))
    $error="Invalid Website";
elseif(!preg_match("/^(96|97|98)[0-9]{8}$/",$phone))
    $error="Invalid Phone";
elseif($gender=="")
    $error="Select Gender";
elseif($course=="")
    $error="Select Course";
else
    $error="Form submitted successfully";
}
?>

<form method="post">

Name: <input type="text" name="name"><br><br>

Address: <input type="text" name="address"><br><br>

Username: <input type="text" name="username"><br><br>

Email: <input type="text" name="email"><br><br>

Password: <input type="password" name="password"><br><br>

Website: <input type="text" name="website"><br><br>

Phone: <input type="text" name="phone"><br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>

Course:
<select name="course">
    <option value="">Select Course</option>
    <option value="BCA">BCA</option>
    <option value="BIM">BIM</option>
    <option value="BBS">BBS</option>
</select>
<br><br>

<input type="submit" name="submit" value="Submit">

</form>

<h3><?php echo $error; ?></h3>