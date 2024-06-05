<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name, $email, $phone, $subject, $mess, $url;
    public function __construct($name, $email, $phone, $subject, $mess, $url)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->mess = $mess;
        $this->url = $url;
    }
    /**
    * Get the message envelope.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
        from: new Address($this->email, $this->name),
        subject: $this->subject,
    );
    }
    /**
    * Get the message content definition.
    */
    public function content(): Content
    {
    return new Content(
        // view: 'sand',
        markdown: 'mail.email_to_admin',
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
