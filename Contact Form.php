<?php
if ( isset ( $_POST [ 'submit' ] ) ) 
{ 
    
    $name = $_POST ['name'] ;  
    $mailFrom = $_POST['Email'] ;  
    $message = $_POST['message'];  
    $mailTo = "runfortheenvironment@gmail.com" ;  
    $headers = "From : " .$mailFrom ;
    $image = $_POST ['Image'] ;
    $txt = "You have received an e-mail from " . $name ."<br>".$message ."<br>" .$image;
    $txt=wordwrap($txt,70);
    mail($mailTo,"no",$txt,"") ;  
    echo $txt; 
    exit; 
    header( "Location: Contact Us.php?mailsend");
}
?>