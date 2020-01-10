    <?php 
    require 'PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer();

    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '******************';                   // SMTP email, but i replaced it with * to hide it
                                                                // from github, so that other people couldn't see my addres
    $mail->Password   = '*******************';                  // SMTP password, i replaced it with * for same reason as the email
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->SMTPSecure = 'ssl';

    //Recipients
    $mail->setFrom('fanhigh2@gmail.com', 'Mailer');
    $mail->addAddress('tare98muharem@gmail.com', 'Me');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reservation from website Claws and Paws';
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $email = $_POST['E-mail'];
    $question = $_POST['Question'];

    $mail->Body = $name." ".$surname.", asked following: ".$question. "<br><br>Contact: ".$email;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: ../index.html");
?>