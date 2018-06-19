<?php
namespace Ecommerce\EcommerceBundle\Mail;

use Ecommerce\EcommerceBundle\Event\MessagePostEvent;


class MessageListener
{
  /**
   * @var MessageNotificator
   */
  protected $notificator;

  /**
   * @var array
   */
  protected $entityManager = array();

  public function __construct(MessageNotificator $notificator, EntityManager $entityManager)
  {
    $this->notificator = $notificator;
    $this->entityManager   = $entityManager;
  }


  public function                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   processMessage(MessagePostEvent $event)
  {

      // On active la surveillance si l'auteur du message est dans la liste
      if (in_array($event->getUser()->getUsername(), $this->listUsers)) {
          // On envoie un e-mail à l'administrateur


          $this->notificator->notifyByEmail($event->getMessage(), $event->getUser());
      }
  }


    public function listenerMail()
          {
               $rep =  $this->entityManager->getRepository('UtilisateursBundle\Entity\Utilisateur')->byMail();
foreach ($rep as $index  => $val)
               {
                    $mail[] = $rep[$index]['emailCanonical'];
              }

              /*
              echo  $rep->getEmailCanonical(); // print_r($rep['emailCanonical']);

               die();
               */

                  $this->notificator->sendMail($mail);

           }
 }