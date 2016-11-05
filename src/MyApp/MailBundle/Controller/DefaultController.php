<?php

namespace MyApp\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppMailBundle:Default:index.html.twig', array('name' => $name));
    }
    
     public function redirectionAction()
    {
        return $this->render('MyAppMailBundle:Default:formMail.html.twig');
    }
    
    
    public function sendMailAction()
    {
            $Request = $this->getRequest(); 
        if ($Request->getMethod() == 'POST') { 
            $Subject=  $Request->get("Subject") ; 
            $email=  $Request->get("email") ; 
            $message=  $Request->get("message") ; 
            
             $mailer=  $this->container->get ('mailer') ; 
             
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl')
        ->setUsername('ranyahammouda92@gmail.com')
        ->setPassword('Zertyuiop123');
        
             $mailer=  \Swift_Mailer::newInstance($transport);
             
            $message= \Swift_Message::newInstance('Test')
          ->setSubject($Subject)
           ->setFrom('token.virtualuniversity3a8@gmail.com')
            ->setTo($email)
            ->setBody($message);
       
     $this->get('mailer')->send($message);
}
 return $this->render('MyAppMailBundle:Default:formMail.html.twig');
    }
    
    
}
