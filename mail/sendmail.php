<?php
session_start();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Mailer
{
    public function order_mail($info)
    {


        $content = "
        <p>
        Xin chào $info[name]
        </p>
        <p>
            Cảm ơn Anh/chị đã đặt hàng tại Sea Furniture!
        </p>
        <p>
            Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.
        </p>
        <p>
            Mã đơn hàng: $info[code]
        </p>
        <p>
            Địa chỉ: $info[address]
        </p>
        <p>
            Kiểu thanh toán: $info[type]
        </p>
        <p>
            Qúy khách sẽ nhân được: 
        </p>
        ";
        $sum = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total_price =  $item['price'] * $item['number'];
            $sum += $total_price;
            $content .= "<p>
                + $item[number] $item[name] 
            </p>";
        }
        $tmp = number_format($sum + 40, 0, ', ', '.') . '.000 VNĐ';
        $content .= "<p>
            Tổng : $tmp
        </p>";
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        try {
            //Server settings
            $mail->SMTPDebug = 3;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'vietbdf000@gmail.com';                     //SMTP username
            $mail->Password   = 'zyxgqatmbzvswsbp';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('vietbdf000@gmail.com', 'Sea Furniture');
            $mail->addAddress($_SESSION['login'], $_SESSION['tenkhachhang']);     //Add a recipient
            // $mail->addAddress('thinh.chungmaou1702@hcmut.edu.vn', 'Thinh');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Sea Furniture xác nhận đơn hàng';
            $mail->Body    = $content;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
