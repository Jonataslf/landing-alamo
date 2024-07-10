
<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$name = addslashes($_POST['name']);
$telephone = addslashes($_POST['telephone']);
$email = addslashes($_POST['email']);
$placa = addslashes($_POST['placa']);

$mail = new PHPMailer(true);

try {
    // Configuração do servidor SMTP da HostGator
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Verifique com a HostGator o endereço correto
    $mail->SMTPAuth = true;
    $mail->Username = 'diago.silva@alamobeneficios.org.br'; // Seu e-mail da HostGator
    $mail->Password = '3915796521Sa@'; // Sua senha de e-mail
    $mail->SMTPSecure = 'tls'; // Use 'tls' ou 'ssl'
    $mail->Port = 587; // Porta de saída, pode variar

    // Configuração do e-mail
    $mail->setFrom('diago.silva@alamobeneficios.org.br', 'Lead');
    $mail->addAddress('alamocuritiba@gmail.com'); // E-mail de destino
    $mail->isHTML(false);
    $mail->Subject = 'NOVO LEAD';
    $mail->Body = "Nome: ".$name."\r\n".
                  "Email: ".$email."\r\n".
                  "Telefone: ".$telephone."\r\n".
                  "Placa: ".$placa."\r\n";
    $mail->send();
    header("Location: https://alamobeneficios.org.br/obrigado");
    exit(); // Certifique-se de sair após o redirecionamento
} catch (Exception $e) {
    echo 'O e-mail não pôde ser enviado. Erro: ', $mail->ErrorInfo;
}
?>