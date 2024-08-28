<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VakaEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $judul;
    public $des;

    /**
     * Create a new message instance.
     */
    public function __construct($judul, $des)
    {
        //
        $this->judul = $judul;
        $this->des= $des;
    }

    /**
     * Get the message envelope.
     */

    public function build()
    {
        return $this->from('pengirim@gmail.com')
                    ->view('regulasipt.emailku')
                    ->with([
                        'nama' => 'Isfan Fajrul F',
                        'website' => 'vaka corp',
                        'judul' => $this->judul,
                        'deskripsi' => $this->des
                    ]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Vaka Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'regulasipt.emailku',
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
