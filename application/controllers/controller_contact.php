<?php

class Controller_contact extends Controller
{
	public function action_index()
	{	
		$this->view->generate('contact_view.php', 'template_view.php');

	}

	public function action_mail()
	{	
		if(isset($_POST["send"])){
			$name = trim(htmlspecialchars($_POST["name"]));
			$surname = trim(htmlspecialchars($_POST["surname"]));
			$email = trim(htmlspecialchars($_POST["email"]));
			$message = trim(htmlspecialchars($_POST["message"]));
			
			$error_name = "";
			$error_surname = "";
            $error_email = "";
            $error_message = "";
            $error = false;
             
			if(strlen($name)==0){
                $error_name = "write your name";
                 $error = true;
                 echo "barev";
            }
			if(strlen($surname)==0){
                $error_surname = "write your name";
                 $error = true;
            }
            if($email == "" || !preg_match("/@/",$email)){
                $error_email = "write your emily";
                 $error = true;
            }
            
            if(strlen($message) == 0){
               $error_message = "write message";
                 $error  = true;
            }
            
            if(!$error){
                $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                $headers = "From:$from\r\nReply-to:$from\r\nContent-type:text/plain;charset=utf-8\r\n";
                 mail("henrik-gevorgyan@mail.ru",$email,$message,$headers);
             
            }
        }
	}
}
?>
