<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You!!!</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em><?php echo $_POST['name']?></li>
        <li><em>Email:</em><?php echo $_POST['email']?></li>
        <li><em>Mobile:</em><?php echo $_POST['phone']?></li>
        <li><em>Message:</em><?php echo $_POST["message"]?></li>
    </ol>
    
<?php   if(isset($_POST['submit'])){

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $Mobile = $_POST['phone'];
        $Message = $_POST['message'];

        $to = 'yrathod426@gmail.com';
        $subject = 'Feed Back Form';
        $message = "Name:".$name."\n"."Phone:".$Mobile."\n"."Message:"."\n".$Message."\n";
        $headers = "From:".$email;
        if(mail($to, $subject, $message,$headers)){

           echo "<script type="text/javascript"> alert( "<h1>Sent Successfully!!\n Thank You!!"." ".$name );</script>"

        }
        else{
             echo "<script type="text/javascript"> alert("Something Went Wrong");</script>"
        }
    }?>
</body>
</html>