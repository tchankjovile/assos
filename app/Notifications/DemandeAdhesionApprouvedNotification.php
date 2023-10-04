<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DemandeAdhesionApprouvedNotification extends Notification
{
    public function __construct(public string $login,public string $password)
    {}

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("Demande d'adhesion Aprouvé")
            ->line("Votre demande d'adhesion à été aprouvé")
            ->line("Vous etes maintenant considerant comme nouveau membre")
            ->line("Voici plus bas vos identifiants!")
            ->line("Login: ".$this->login)
            ->line("password:".$this->password)
            ->action('Acceder à la plateforme', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'message'=>"Votre demande d'adhesion a été approuvé "
        ];
    }
}
