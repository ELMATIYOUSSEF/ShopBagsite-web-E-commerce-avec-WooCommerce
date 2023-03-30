<?php
/**
 *  Plugin Name: contact us Plugin
**/

function contact_Us_plugin(){
$content = '';
$content .= '<h2> Contact us  </h2>';
$content .= '<form method="post" action="http://ecomwordpress.test/wordpress/thank-you/">';
$content .='<label for="name">Name :</label> </br>';
$content .= '<input type="text" name="name" id="name" class="form-control w-100" placeholder="Enter Your Name"/> </br>' ;
$content .='<label for="email">Email :</label> </br>';
$content .= '<input type="text" name="email" id="email" class="form-control w-100" placeholder="Enter Your Email"/> </br>' ;
$content .='<label for="Comments">Questions or Comments :</label> </br>';
$content .='<textarea type="text" name="Comments" id="Comments" class="form-control w-100" placeholder="Enter Your Comments"/> </textarea> </br>' ;
$content .= '<input type="submit" name="Submit_ContactUs" class="btn btn-md btn-primary" value="SEND YOUR INFORMATION" />';
$content .= '</form>';
return $content;
}

add_shortcode('contactus', 'contact_Us_plugin');

function getData(){
    if(isset($_POST['Submit_ContactUs'])){
        // echo "<pre>"; print_r($_POST);echo "</pre>";
        $name = sanitize_text_field($_POST['name']);
        $Email = sanitize_text_field($_POST['email']);
        $comments = sanitize_text_field($_POST['Comments']);
        $to ='ysf.elmati@gmail.com';
        $subject ='test form submission';
        $message ='name :'.$name.' 
        email : '.$Email.' 
        message : '.$comments;
        wp_mail($to,$subject,$message);
    }
}
add_action('wp_head','getData');

function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '0e304d798e19fa';
    $phpmailer->Password = '7996814a6f43d8';
  }
  
  add_action('phpmailer_init', 'mailtrap');

?>