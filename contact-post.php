<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    require 'inc/config.php';
    if($_POST)
    {
    header("location:contact.php?durum=ok");
        
       $adi_soyadi =$_POST['adi_soyadi'];
       $konu =$_POST['konu'];
       $email =$_POST['email'];
       $telefon =$_POST['telefon'];
       $mesaj =$_POST['mesaj'];
    //   DB::insert("INSERT INTO contact(adi_soyadi,konu,email,telefon,mesaj) VALUES(?,?,?,?,?)",array (
    //    $adi_soyadi,
    //    $konu,
    //    $email,
    //    $telefon,
    //    $mesaj
    //   ));
    
    $mail_icerik = "Merhaba, sitenizden yeni bir iletişim formu gönderildi. Bilgileri aşağıdadır. <br>";
	$mail_icerik .= "Adı Soyadı: $adi_soyadi<br>";
	$mail_icerik .= "Konu: $konu<br>";
	$mail_icerik .= "Email: $email<br>";
    $mail_icerik .= "Telefon: $telefon<br>";
	$mail_icerik .= "Mesaj: $mesaj<br>";

        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/SMTP.php';
        $mail = new PHPMailer(true);

try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = '##########';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '##########';                     //SMTP username
        $mail->Password   = '##########';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('iletisim-formu@kinderbaby.com.tr', 'İletişim Formu');
        $mail->addAddress('info@kinderbaby.com.tr', 'Kinder Baby');     //Add a recipient
    
        

        //Content
        $mail->isHTML(true);  
		$mail->CharSet = 'UTF-8';                 
		$mail->Subject = 'Sitenizden iletisim formu gönderildi.';
		$mail->Body    = $mail_icerik;
		$mail->AltBody = $mail_icerik;

		
		
        $mail->send();
        echo 'Message has been sent';
        } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    else{
        header("location:contact.php?durum=no");
    }
        
    
    
?>