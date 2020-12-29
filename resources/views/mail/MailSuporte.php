<?php

namespace App\Mail;

use App\Models\Formulario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSuporte extends Mailable
{
    use Queueable, SerializesModels;

    private $formulario = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Formulario $formulario)
    {
        $this->formulario = $formulario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('concurso.sasdh2020@riobranco.ac.gov.br')
            ->subject('Inscrição Concurso SASDH 2020')
            ->view('mails.resposta', [
                'formulario' => $this->formulario
            ]);
    }
}
