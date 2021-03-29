<?php

namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactNotification
{
    /**
     * Undocumented variable
     *
     * @var \Mailer
     */
    private $mailer;
    /**
     * Undocumented variable
     *
     * @var Environment
     */
    private $renderer;

    public function __construct(MailerInterface $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(Contact $contact)
    {
        $email = (new Email())
            ->from($contact->getEmail())
            ->to('alexis.boisseleau@gmail.com')
            ->replyTo($contact->getEmail())
            ->html('test');
        $this->mailer->send($email);
    }
}
