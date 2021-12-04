<?php

if(isset($_POST(['Email']) && !empty($_POST(['Email']))))

$nome = addslashes($_POST(['Name']));
$Email = addslashes($_POST(['Email']));
$Subject = addslashes($_POST(['Subject']));
$Message = addslashes($_POST(['Message']));

$to = "gui.technologic@gmail.com";
$subject = "Contato";
$body = "Nome: ".$nome."\n"
        "Email: ".$Email."\n"
        "Subject: ".$Subject."\n"
        "Message: ".$Message;
$header = "From:gui.technologic@gmail.com"."\r\n"
        ."Reply-to: ".$Email."\e\n"
        ."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){
    echo("email enviado com sucesso");
}else{
    echo("email nãoenviado com sucesso");
}



?>

