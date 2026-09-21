<?php

include "../db.php";

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$rating=$_POST['rating'];
$feedback=$_POST['feedback'];

$sql="INSERT INTO feedback

(full_name,email,subject,rating,feedback)

VALUES

('$fullname','$email','$subject','$rating','$feedback')";

if(mysqli_query($conn,$sql)){

echo "<script>

alert('Thank you for your feedback!');

window.location='../html/contact.php';

</script>";

}else{

echo mysqli_error($conn);

}

?>