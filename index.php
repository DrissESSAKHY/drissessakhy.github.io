<?php

if(isset($_POST['name'])&& isset($_POST['email'])){

$name = $_POST['name'];
$email = $_POST['email'];
$to='mr.essakhy.driss@gmail.com';
$subject='hey Driss , you have a new subsriber';
$body='
<html>
    <body>
    <h2> Feedback - exemple</h2>
    <hr>
    <p> name : '.$name.'<p>
    <p> name : '.$email.'<p>

</body>
</html>
';

$headers ="Form : ".$name."<".$email.">\r\n";
$headers .="Reply-To : ".$email.">\r\n";
$headers .="MIME-Version: 1.0\r\n";
$headers .="Content-type: text/html;charset-utf-8";
//send 
$send=mail($to,$subject,$body,$headers);

if($send){
    echo '<br>';
    echo 'Thanks you for contact  me ,';

}else{

    echo 'error';
}
}
?>

<!doctype html>

<html>
<head>
    <title>Simple Contect page with php<title>
     <meta charset='utf-8'/>   
</head>
<body>
    <form action="" methd="post">
        <input type='text' name='name' palaceholder="name"/>
        <input type="email" name="email" placeholder="email" />
        <input type="submit" value="take action" />
</form>
</body>
</html>















    