<?php

    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code



    require_once ('model/FacilitatorSqlQuery.php');

    use PHPMailer\PHPMailer\PHPMailer;

    class SendEmail extends FacilitatorSqlQuery{
        function sendmail($facilitatorID,$email){
            $evsUserID =$this->generated_evs_user_id();
            $name = "EVS";  // Name of your website or yours
            $to = $email;  // mail of reciever
            $subject = "FACILITATOR ACCOUNT'S USER ID";  // Subject of the email
            $body = "
            <!DOCTYPE html>
            <html lang=\"en\">
            <head>
                <meta charset=\"UTF-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <title>Email</title>

            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: \"Poppins\", sans-serif;
                    scroll-behavior: smooth;
                    color:rgb(44, 44, 44);
                    max-width: 100%;
                }
                .header {
                    font-weight: bold;
                    padding: 20px;
                    font-size: 20px;
                }

                .body {
                    padding: 20px;
                    width: 600px;
                }
                span{
                    font-weight: bold;
                    color:rgb(62, 107, 255);
                }
                .content{
                    font-size:14px;
              
                }
                .note{
                    margin-top: 20px;
                    font-style: italic;
                    font-weight: bold;
                    font-size: 15px;
                }
            </style>
            </head>
                <body>
                    <!-- // send email format with style-->
                    <div class=\"header\">
                        <h1>Good day,</h1>
                    </div>

                    <div class=\"body\">
                        <p class=\"content\">
                        Hi! This is your USER ID: <span>".$evsUserID."</span>. Kindly login this credential to your account to access the E-voting System.
                        </p>
                        <p class=\"note\" \"content\">Note: This user ID is exclusive only for the FACILITATOR and cannot be used to other accounts.</p>
                    </div>
                    
                </body>
            </html>
            ";  // Body of the email
            $from = "evsserviceacc011@gmail.com";  // you mail
            $password = "gxliatxtqrmgyyyd";  // your mail password
    
            // Ignore from here
    
            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";
            $mail = new PHPMailer();
    
            // To Here
    
            //SMTP Settings
            $mail->isSMTP();
            // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
            $mail->Host = "smtp.gmail.com"; // smtp address of your email
            $mail->SMTPAuth = true;
            $mail->Username = $from;
            $mail->Password = $password;
            $mail->Port = 587;  // port
            $mail->SMTPSecure = "tls";  // tls or ssl
            $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                ]
            ]);
    
            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($from, $name);
            $mail->addAddress($to); // enter email address whom you want to send
            $mail->Subject = ("$subject");
            $mail->Body = $body;
            if ($mail->send()) {
                if($this->updateUserID($evsUserID,$facilitatorID)){
                   echo json_encode(array("status"=>"success","message"=>"Email has been sent to your email address"));
                }
            } else {
                echo json_encode(array("status"=>"error","message"=>"Email has not been sent"));
            }
        }

        public function generated_evs_user_id(){
            //Generate a random string.
            $token = openssl_random_pseudo_bytes(3);
            
            //Convert the binary data into hexadecimal representation.
            $token = "EVS-".bin2hex($token);

            return $token;
        }



    }
    

    $sendEmail = new SendEmail();

    $facilitatorID = $_POST['FacilitatorID'];
    $email = $_POST['Email'];

    $sendEmail->sendmail($facilitatorID,$email);
        
?>