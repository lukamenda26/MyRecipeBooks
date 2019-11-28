<?php

namespace App\Listeners;

// use App\Events\Illminate\Auth\Events\Registered;
// use Illuminate\Queue\InteractsWithQueue;
// use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Mail\Mailer;

class RegisteredListener
{
    private $mailer;
    private $eloquent;

    public function __construct(Mailer $mailer, User $eloquent)
    {
        $this->mailer = $mailer;
        $this->eloquent = $eloquent;
    }

    public function handle(Registered $event)
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        $this->mailer->raw('会員登録完了しました', function ($message) use ($user){
            $message->subject('会員登録メール')->to($user->email);
        });
    }
}
