<?php

namespace App\Mail;

use App\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $contactForm;

    public function __construct(ContactForm $contactForm)
    {
        $this->contactForm = $contactForm;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We Received Your Inquiry - SMART INDIA DETECTIVE',
            from: 'noreply@smartindiadetective.com',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-confirmation',
            with: [
                'form' => $this->contactForm,
            ],
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
