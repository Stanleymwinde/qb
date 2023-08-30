<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Quotesub extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $quote;
    public function __construct($quote)
    {
        $this->quote = $quote;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->subject($this->quote['service'])
            ->from($this->quote['email'], $this->quote['name'])
            ->markdown('user.quotesub')
            ->with('quote', $this->quote);
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Quote submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
