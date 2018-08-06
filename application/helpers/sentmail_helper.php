<?php 

if(!function_exists('sendEmail')){
    function sendEmail($subject,$to,$msg,$data='',$altMsg='',$template='',$form='',$mail_type='none'){
        require "application/libraries/phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer(true);
        $error='';
        $status='failed';
            try {
                
                // $mail->isSMTP();
                // $mail->Host = 'localhost';
                // $mail->SMTPDebug = 2;
                if($form!=''){
                      $mail->setFrom($form, $form);
                      $mail->addReplyTo($form, $form);
                }else{
                     $mail->setFrom('support@brainlabs.com.bd', 'Admin');
                     $mail->addReplyTo('support@brainlabs.com.bd', 'Admin');  
                     $form='support@brainlabs.com.bd';
                }
                $html_view = (($template !='')? $template : 'default_email');
                $template = 'template/'.$html_view;
                $CI =& get_instance();
                $body = $CI->load->view($template, array('msg'=>$msg,'data'=>$data), true);               
                $mail->addAddress($to);
                $mail->isHTML(true);                                
                $mail->Subject = $subject;
                $mail->Body    = $body;
                $mail->AltBody = (($altMsg !='')? $altMsg : $msg);
                $sent = $mail->send();
                $error .= '0';
                $status = $sent;
            } catch (Exception $e) {
                $error .= ' Message could not be sent.';
                $error .= ' Mailer Error: ' . $mail->ErrorInfo;
            }
            $data=array(
                'email_from'=>$form,
                'email_to'=>$to,
                'email_subject'=>$subject,
                'data'=>base64_encode(json_encode($data)),
                'massage'=>base64_encode($msg),
                'alt_massage'=>base64_encode($altMsg),
                'error'=>$error,
                'template'=>$template,
                'status'=>$status,
                'mail_type'=>$mail_type
                );
            $CI->db->insert('email_sent_report',$data);
        return $error; 
    }	
}