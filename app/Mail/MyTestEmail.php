<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyTestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $formAddress,$to,$body,$subject,$fullname,$username;

    public function __construct(
        $formAddress,$body,$subject,$fullname,$username
    )
    {
       
            $this->subject=$subject;
            $this->formAddress=$formAddress;
            $this->body=$body;
            $this->fullname=$fullname;
            $this->username=$username;
            

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            form:$this->formAddress,
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail',
            with:[
                'fullname'=>$this->fullname,
                'username'=>$this->username,
                'body'=>$this->body,
                 ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
