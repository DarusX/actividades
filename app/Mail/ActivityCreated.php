<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Activity;

class ActivityCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $activity;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.created_activity')->with([
            'activity' => $this->activity
        ]);
    }
}
