<?php 

if(isset($_POST['submit'])) {


$name = $_POST['userName'];
$visitor_email = $_POST['email'];
$email_subject = $_POST['subject'];
$project_body = $_POST['project-description'];




mail($visitor_email, $email_subject, $project_body);


}



?>