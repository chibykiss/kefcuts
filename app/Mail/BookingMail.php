<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Booking $booking,
        public $text,
        public $pdf,
        public string $referer = 'none',
    ){}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->referer === 'kefcuts' ? $this->booking->name : 'New Session Booked on Kefcuts',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Log::channel('kef')->info('time:',collect($this->booking->hour)->toArray());
        // Log::channel('kef')->info('service:',collect($this->booking->services)->toArray());
        return new Content(
            view: 'mail.bookmail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(storage_path("app/public/$this->pdf"))
                        ->as($this->pdf)
                        ->withMime('application/pdf')
        ];
    }
}
