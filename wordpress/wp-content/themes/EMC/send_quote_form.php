<?php
 
if(isset($_POST['email'])) {
 
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "littledudz@yahoo.com";
 
    $email_subject = "Get A Quote Request";

    function died($error) {
 
        // error code
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||

        !isset($_POST['zip']) ||

        !isset($_POST['typeofwork']) ||

        !isset($_POST['urgency']) ||

        !isset($_POST['howoften']) ||

        !isset($_POST['reference']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // required

    $zip = $_POST['zip']; // required

    $typeofwork = $_POST['typeofwork']; // required

    $urgency = $_POST['urgency']; // required

    $howoften = $_POST['howoften']; // required

    $reference = $_POST['reference']; // required
 
    $comments = $_POST['comments']; // required
 

    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
//   if(!preg_match($email_exp,$email_from)) {
 
//     $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
//   }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
//   if(!preg_match($string_exp,$last_name)) {
 
//     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
//   }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Company Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email Address: ".clean_string($email_from)."\n";
 
    $email_message .= "Phone Number: ".clean_string($telephone)."\n";

    $email_message .= "Zip Code: ".clean_string($zip)."\n";

    $email_message .= "Type of Work: ".clean_string($typeofwork)."\n";

    $email_message .= "Urgency: ".clean_string($urgency)."\n";

    $email_message .= "How Often: ".clean_string($howoften)."\n";
    
    $email_message .= "Reference: ".clean_string($reference)."\n";
 
    $email_message .= "Other Details: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$first_name."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 

<script>
window.onload = function(){
    // redirect to previous page
    window.history.back();
};
</script>
 
 
 
 
<?php } ?>