<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactFormMap extends Component
{
    public $nombreMap;
    public $emailMap;
    public $telMap;
    public $textareaMap;
    public $flagMap = false;
    public $email;

    public function enviarFormMap() {

        $this->validate([
            'nombreMap' => 'required|min:2',
            'emailMap' => 'required|email',
            'telMap' => 'required|min:6',
            'textareaMap' => 'required',
        ]);

        $mensaje = '
        Nombre y apellido: '.$this->nombreMap.'
        Email: '.$this->emailMap.'
        Telefono: '.$this->telMap.'
        Mensaje: '.$this->textareaMap.'
        ';
        Mail::raw($mensaje, function($message) {
            $message->to($this->emailMap)
            ->subject('Consulta web');
        });

        $this->flagMap = true;

        // reseteo los inputs del form
        $this->reset(['nombreMap', 'emailMap', 'telMap', 'textareaMap']);
    }

    public function render()
    {
        return view('livewire.contact-form-map', [
                'flagMap' => $this->flagMap,
            ]);    
    }
}