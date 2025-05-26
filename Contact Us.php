<?php
echo "<pre>";
$message_sent = false;        
    if (isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            print_r($_POST);
            $name = $_POST['name'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];
            $mailTo= "runfortheenvironment@gmail.com";
            $body ="";
            $body .= "From: ".$name. "\r\n";
            $body .= "Email: ".$mailFrom. "\r\n";
            $body .= "Message: ".$message. "\r\n";
            mail($mailTo,$message,$body );
            header("Location: Contact Us.html?mailsend");
            $message_sent = true;
        }
    }
echo '</pre>';
?>
<!DOCTYPE html>
<html>
    <head><!---->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Help The Enviroment">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Contact Us.css">        
    </head>
    <body>
        <?php
        if($message_sent):      
        ?>
        <h3>Thanks, we will be in touch</h3>
        <?php
        else:
        ?>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ad reprehenderit corporis in quia id cupiditate adipisci! Officiis ratione sit,
                numquam ea a quisquam nostrum provident et ullam, repellat perspiciatis in?</p> 
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>Cairo,<br>Egypt.</p>
                            </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>01026930949</p>
                            </div>
                        
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>runfortheenvironment@gmail.com</p>
                            </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form method="post" action="Contact Us.php" class="contact-form">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="Full Name" required="required" id="fullName">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="Email" required="required" id="email_id">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="message" required id="message"></textarea>
                            <span>Type your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name ="submit" value="Send">
                        </div>
                    </form> 
                </div>
            </div>
        </section>
        <?php
        endif;
        ?>
    </body>
</html>