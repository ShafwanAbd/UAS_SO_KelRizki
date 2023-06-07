<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UploadLaporanBulanan extends Mailable
{
    use Queueable, SerializesModels;

    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function build()
    { 
        return $this->view('emails.upload-laporan-bulanan')
                    ->attach($this->file->getRealPath(), [
                        'as' => $this->file->getClientOriginalName(),
                        'mime' => $this->file->getClientMimeType(),
                    ]);
    }
}
