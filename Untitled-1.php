<?php



$name = addslashes($_POST['name']);
$telephone = addslashes($_POST['telephone']);
$email = addslashes($_POST['email']);
$placa = addslashes($_POST['placa']);


$to = "jonlourencofilho@hotmail.com";
$subject = "formniteroilp";
$body = "Nome: ".$name."\r\n".
        "Telefone: ".$telephone."\r\n".
        "Email: ".$email."\r\n".
        "Placa: ".$placa."\r\n".

$header = "From:diago.silva@alamobeneficios.org.br"."\r\n"."Reply-To".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("E-mail enviado com sucesso!");
} else{
    echo("O e-mail não pode ser enviado");
}


?>
