<?php

namespace App\Notifications;

use App\Models\Invite;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class TeamInviteNotification extends Notification
{
    use Queueable;

    public $from;

    public $user;

    public $invite;

    /**
     * Create a new notification instance.
     * @var string $from
     * @var User $user
     * @var Invite $invite
     *
     * @return void
     */
    public function __construct(string $from, User $user, Invite $invite)
    {
        //
	    $this->from = $from;
		$this->user = $user;
		$this->invite = $invite;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
	                ->line('You received an invite for team: "'. $this->invite->name() .'"')
	                ->line('From: '. $this->from)
	                ->line('Message: '. $this->invite->message)
                    ->action('Look at invite', url('inlab.valencio.nl/'))
                    ->line('Thank you for using our application!');
    }

	/**
	 * Insert a notification in the database and notify the user
	 *
	 * @param mixed $notifiable
	 * @return array
	 */
    public function toDatabase($notifiable)
    {
    	$teamName = 'You received an invite for team: "'. $this->invite->name() .'"';
    	return [
    		"title" => $teamName,
		    "from" => $this->from,
		    "message" => $this->invite->message
	    ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
