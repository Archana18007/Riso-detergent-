<?php
error_reporting(E_ALL);
// function curlRequest($url)
// {
//     $ch = curl_init();
//     $getUrl = $url;
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//     curl_setopt($ch, CURLOPT_URL, $getUrl);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 80);
    
//     $response = curl_exec($ch);
//     return $response;
    
//     curl_close($ch);
    
// }


// $emailAddress = 'thayyilrasheedtirur@gmail.com'; //To address
// $emailAddress = 'brandsncodes@gmail.com'; //To address
$emailAddress = 'thayyilrasheedtirur@gmail.com'; //To address

require "phpmailer-ysh/class.phpmailer.php";

$company=$_POST['company'];
$owner=$_POST['owner'];
$phone=$_POST['phone'];
$area=$_POST['area'];
$products=$_POST['products'];
                  

$html_table= '';
$html_table.= "

<table>
<tr>
  <th>Company Name:</th>
  <td>$company</td>
</tr>
 
<tr>
  <th>Owner Name:</th>
  <td>$owner</td>
</tr>

<tr>
  <th>Phone Number:</th>
  <td>$phone</td>
</tr>
<tr>
  <th>Distribution Area:</th>
  <td>$area</td>
</tr>
<tr>
  <th>Current Products:</th>
  <td>$products</td>
</tr>

</table>
        
        
        
        ";
       

$html_table3=$html_table;

$mail = new PHPMailer();
$mail->IsMail();
$mail->CharSet = "UTF-8"; 
$mail->SMTPDebug = 4;
#$mail->SMTPDebug = 4;
$mail->IsSMTP();                // Sets up a SMTP connection
$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
$mail->SMTPSecure = "tls";      // Connect using a TLS connection  
$mail->Host = "smtp.gmail.com";  
$mail->Port = 587;  
$mail->Encoding = '7bit';    
         
//Authentication  
// $mail->Username   = "risoenquiry@gmail.com"; // Login  
// $mail->Password   = "ikpozowigrgcfben"; // Password  
$mail->Username   = "risodetergent@gmail.com"; // Login  
$mail->Password   = "ouubjmqrhzwzrhad"; // Password  
     
$mail->Subject="Distributor Enquiry - RISO Website - ".$company;
// $mail->AddReplyTo($customer_email, $customer_name);
//$mail->AddReplyTo($email, $name);
$mail->AddAddress($emailAddress);
$mail->SetFrom('risodetergent@gmail.com',"Riso Website");
$mail->MsgHTML($html_table3);
//$mail->MsgHTML($cust);
$mail->Send();
unset($mail);

    
        ?>
         <!-- <script type="text/javascript">
          alert("Thank you for contacting us! We will be in touch shortly ...");
        
          window.location="index.html";
        </script> -->
      

  