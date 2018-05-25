<?php
// src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace OC\PlatformBundle\Email;

use OC\PlatformBundle\Entity\Application;
use Swift_Mailer;
use Swift_Message;

class ApplicationMailer
{
    /**
     * @var Swift_Mailer
     */
    private $mailer;

    public function __construct(Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendNewNotification(Application $application)
    {
        $message = new Swift_Message('Nouvelle candidature', 'Vous avez reçu une nouvelle candidature.'); // Ici bien sûr il faudrait un attribut "email", j'utilise "author" à la place

        $message->addTo($application->getAdvert()->getAuthor())->addFrom('admin@votresite.com');
        $this->mailer->send($message);
    }
}
