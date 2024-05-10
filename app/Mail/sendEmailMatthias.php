<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendEmailMatthias extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $mailMessage;
    public $email;
    public $phone;
    public $name;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $mailMessage, $email, $phone, $name)
    {
        $this->subject = $subject;
        $this->mailMessage = $mailMessage;
        $this->email = $email;
        $this->phone = $phone;
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject . ' für ' . $this->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail-template.matthias',
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
