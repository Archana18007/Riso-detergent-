<?php
error_reporting(E_ALL);
function curlRequest($url)
{
    $ch = curl_init();
    $getUrl = $url;
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $getUrl);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
    
    $response = curl_exec($ch);
    return $response;
    
    curl_close($ch);
    
}


$emailAddress = 'thayyilrasheedtirur@gmail.com'; //To address
//$emailAddress = 'brandsncodes@gmail.com'; //To address

require "phpmailer-ysh/class.phpmailer.php";

$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];



$message=$_POST['message'];


// $machine_name =$_POST['mac_name'];
// $machine_model=$_POST['mac_model'];
// $machine_quantity=$_POST['mac_qty'];
// $fromdate=$_POST['mac_fdate'];
// $todate=$_POST['mac_tdate'];
// $remark=$_POST['mac_remark'];

// $description=$_POST['mac_description']; 
//echo $description;
$result = array();

// $html_table1 = '

//             ';
               
//     $html_table1.= "
//     $name<br>
//     $lastname<br>
//     $email<br>
//     $region<br>
//     $city<br>
//     $phone<br>
//      $country<br>
//     $subject<br>
//      $message<br><br><br>
   

//     ";                         

    $html_table= '';
$html_table.= "

<table>
<tr>
  <th>Name:</th>
  <td>$name</td>
</tr>
 
<tr>
  <th>Email:</th>
  <td>$email</td>
</tr>

<tr>
  <th>Subject:</th>
  <td>$phone</td>
</tr>
<tr>
  <th>Message:</th>
  <td>$message</td>
</tr>

</table>
        
        
        
        ";
       
//                 foreach ($description as $id => $key) 
                
// {

   
//     $html_table .= "<tr>
//     <td>$description[$id]</td>
   
//     <td>$machine_quantity[$id]</td>
//     <td>$fromdate[$id]</td>
//     <td>$todate[$id]</td>
//     <td>$remark[$id]</td>
    
//     </tr>";   
//     //echo    $remark[$id];                    
// }
// echo $html_table;
$html_table3=$html_table;
$mail = new PHPMailer();
$mail->IsMail();
$mail->CharSet = "UTF-8"; 
#$mail->SMTPDebug = 4;
#$mail->SMTPDebug = 4;
$mail->IsSMTP();                // Sets up a SMTP connection
$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
$mail->SMTPSecure = "tls";      // Connect using a TLS connection  
$mail->Host = "smtp.gmail.com";  
$mail->Port = 587;  
$mail->Encoding = '7bit';    
         
//Authentication  
$mail->Username   = "risodetergent@gmail.com"; // Login  
$mail->Password   = "ouubjmqrhzwzrhad"; // Password  
     
$mail->Subject="Message From Riso Website Contact Form";
// $mail->AddReplyTo($customer_email, $customer_name);
$mail->AddReplyTo($email, $name);
$mail->AddAddress($emailAddress);
$mail->SetFrom('risodetergent@gmail.com',"Riso Website");
$mail->MsgHTML($html_table3);
//$mail->MsgHTML($cust);
$mail->Send();
unset($mail);

    
        ?>
         <script type="text/javascript">
          alert("Thank you for contacting us! We will be in touch shortly ...");
        
          window.location="contact-us.html";
        </script>
      

  