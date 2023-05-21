<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class MyTestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    // public function __construct(public $subject ,public $from ,private $FullName ,public $body)

    public $fromAddress , $to , $body , $subject , $fullname , $username;


    public function __construct($subject , $fromAddress ,$fullname,$username , $body)    
    {
        //
        $this->subject = $subject;
        $this->fromAddress = $fromAddress;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->body = $body;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        return new Envelope(
            from : $this->fromAddress , 
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
            with: ['fullname' => $this->fullname, 'username' => $this->username, 'body' =>$this->body ],
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
