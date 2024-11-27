<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendVoucherMail extends Mailable
{
    use Queueable, SerializesModels;
    public $voucher;
    public $user;
    /**
     * Create a new message instance.
     */
    public function __construct($voucher, $user)
    {
        $this->voucher = $voucher;
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Gửi voucher',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     // return new Content(
    //     //     view: 'mail.send_voucher',
    //     // );
    // }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    public function build()
    {
        return $this->subject('Bạn đã nhận được mã giảm giá!')
            ->view('mail.send_voucher')
            ->with([
                'user' => $this->user,
                'voucher' => $this->voucher,
            ]);
    }
}
