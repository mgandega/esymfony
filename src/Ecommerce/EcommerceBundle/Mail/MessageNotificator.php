<?php

namespace Ecommerce\EcommerceBundle\Mail;

use Symfony\Component\Security\Core\User\UserInterface;

class MessageNotificator
{
  /**
   * @var \Swift_Mailer
   */
  protected $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }


    public function sendMail(array $mail)
    {

        $message = \Swift_Message::newInstance()
            ->setSubject("Nouveau message d'un utilisateur surveillé")
            ->setFrom('mgandega@gmail.com')
            ->setTo($mail )
            ->setBody("teste de cronjob");

        $this->mailer->send($message);
        return 'diadieuf';
    }


  // Méthode pour notifier par e-mail un administrateur
  public function notifyByEmail($message, UserInterface $user)
  {
  

//ok
//    $message = \Swift_Message::newInstance()
//      ->setSubject("Nouveau message d'un utilisateur surveillé")
//      ->setFrom('mgandega@gmail.com')
//      ->setTo('mgandega@gmail.com')
//      ->setBody("L'utilisateur surveillé '".$user->getUsername()."' a posté le message suivant : '".$message."'")
//    ;


//    $this->mailer->send($message);
    
//ok

	
/********************************************************************************************************************************************************************/

   // envoie d'un mail au format HTML
	
	// Destinataires. 
	   $destinataires = "mgandega@gmail.com"; 
	
	
	
	// Objet. 
	$objet = "Bonjour !"; 
	
	// En-têtes supplémentaires. 
	 $entêtes = "From: \"Matthieu\" <mgandega@gmail.com>\n"; 
	 $entêtes .= "MIME-Version: 1.0\n"; 
	 $entêtes .= "Content-Type: text/html; charset=iso-8859-1\n"; 
	 $entêtes .= "Content-Transfer-Encoding: 8bit\n"; 
	

	
	
	// Message (HTML). 
	 $message = "<html>\n"; 
	 $message .= "<head><title>Bonjour !</title></head>\n"; 
	 $message .= "<body>\n"; 
	 $message .= "<font color=\"green\">Bonjour !</font>\n"; 
	 $message .= "</body>\n"; 
	 $message .= "</html>\n"; 
	
	

      	
   $mes	= '<!DOCTYPE html>
<html lang="en">
<head style="width:60%; margin:auto;">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title> {% block motscles %} Omega Vision {% endblock %} </title>
  <!--  <link rel="stylesheet" href="../../../../web/css/bootstrap.css" />
    <link rel="stylesheet" href="../../../../web/css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="../../../../web/css/style.css" />
    <link rel="stylesheet" href="../../../../web/css/font-awesome.css" />
    <link rel="stylesheet" href="../../../../web/ckeditor/contents.css" />
   -->
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="width:60%; margin:auto;">


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <h3 class="brand" >Omega Vision</h3>
            <div class="nav-collapse collapse">
            <table class="table table-striped table-hover" style="width:60%; margin:auto;">
                        <thead>
                           <tr style="background-color: red">
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr style="background-color: green">
                                <td>123</td>
                                <td>8</td>
                                <td>134</td>
                                <td>450</td>
                        </tr>
                        </tbody>
                        <tfooter>
                        </tfooter>
             </table>

            </div>
        </div>
    </div>
</div>
<br><br><br>
<h3 style="background-color: blue">dcdcvdcvdvfvfvfvfvfvf</h3>
cdcdcdcvfvfvfvfvfv fvbfvbf vbgfbgb bgbgbgb gbgbgbgg  bgbgbg gbgbgbg gbgbgbg gbgbgbg gbgbgb g gbgbgb gbgbgb gbg gbgbgbgb gbg.
vfvbfvbfvbf bgfbgbg gbgbgb bgbgbg gbgbg gbgbgbg gbgbgbg bgbgbg gbgbg gbgbgbg gbgbgbg bgbgbg gbgbg gbgbgb gbgbgb gbgbgbgbgb.


</body>
<footer></footer>
</html>';


// echo '<pre>'; var_dump($mes); echo '</pre>';
// die();

/*******************************************************************************************************************************************************************/	

	 $message = \Swift_Message::newInstance()
       ->setSubject($objet)
       ->setFrom('mgandega@gmail.com')
       ->setTo($user->getEmailCanonical())
       ->setBody($mes)
       ->setCharset('utf-8')
       ->setContentType('text/html')
     ;


    $this->mailer->send($message); 
    
    

  
  }
}