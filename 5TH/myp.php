<?php
//get data from form  
$name = $_POST['name'];
$number= $_POST['ad:no'];
$name= $_POST['president'];
$name= $_POST['secretary'];
$name= $_POST['treasurer'];    
$to = "adabunion12@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  ad:no= " . $number . "\r\n president=" . $name . "\r\n secretary =" . $name . "\r\n treasurer=" . $name;
$headers = "From: noreply@adabelection.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>