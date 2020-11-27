<?php

if (isset($_POST['submit'])) {
     
     $name = $_POST['name'];
     $phone = $_POST['tel'];
     $mailFrom = $_POST['email']; 
     $message = $_POST['message'];
     $subject= $_POST['subject'];

     $mailTo="contato@projetoefraim.com.br";
     $headers="From: ".$mailFrom;
	 //$subject="Apoiadores Cloud Girls";
     $txt="Nome:" .$name. ".\nTel:" .$phone. ".\n\n".$message;

     mail($mailTo, $subject, $txt, $headers);
     header("Location: index.html?mailsend");

}
?>
