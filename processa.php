<?php

if(isset($_POST['E-mail']) && !empty ($_POST['E-mail']);

$nome = addslashes($_POST['Nome']);
$sexo = addslashes($_POST['Sexo']);
$telefone = addslashes($_POST['Telefone']);
$email = addslashes($_POST['E-mail']);
$endereço = addslashes($_POST['Endereço']);
$complemento = addslashes($_POST['Complemento']);
$bairro = addslashes($_POST['Bairro']);
$cidade = addslashes($_POST['Cidade']);
$uf = addslashes($_POST['UF']);
$assunto = addslashes($_POST['Assunto']);
$comentários = addslashes($_POST['Comentário']);

$to = "crocheteriadabru@gmail.com";
$subject = "Crocheteria da Bru";
$body =  "Nome: ".$nome. "/r/n".
        "Sexo: ".$sexo. "/r/n".
        "Telefone: ".$telefone. "/r/n".
        "E-mail: ".$email. "/r/n".
        "Endereço: ".$endereço. "/r/n".
        "Complemento: ".$complemento. "/r/n".
        "Bairro: ".$bairro. "/r/n".
        "Cidade: ".$cidade. "/r/n".
        "Estado: ".$uf. "/r/n".
        "Assunto: ".$assunto. "/r/n".
        "Comentários: ".$comentários. "/r/n".
        
        $header = "From:crocheteriadabru@gmail.com". "/r/n".
        "Reply-to: ".$email."/e/n".
        "X=Mailer:PHP/".phpversion();
if (mail($to,$subject,$body,$header)){
    echo ("Este e-mail foi enviado com sucesso.");
}
    else{
    echo ("Este e-mail não pode ser enviado.");
}
?>