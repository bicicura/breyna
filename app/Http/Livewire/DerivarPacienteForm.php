<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class DerivarPacienteForm extends Component
{
    public $nombreDerivar;
    public $emailDerivar;
    public $telDerivar;
    public $patologiaDerivar;
    public $subject;
    public $mensajeDerivar;
    public $flagDerivar = false;

    public function enviarFormDerivar() {

        $this->validate([
            'nombreDerivar' => 'required|min:2',
            'emailDerivar' => 'required|email',
            'telDerivar' => 'required|min:6',
            'patologiaDerivar' => 'required',
            'mensajeDerivar' => 'required',
        ]);

        $mensaje = '
        Nombre y apellido del derivador: '.$this->nombreDerivar.'
        Email: '.$this->emailDerivar.'
        Teléfono: '.$this->telDerivar.'
        Patología: '.$this->patologiaDerivar.'
        Mensaje: '.$this->mensajeDerivar.'
        ';

        Mail::raw($mensaje, function($message) {
            $message->to($this->emailDerivar)
            ->subject('Consulta web | Derivación de un paciente');
        });

        $this->flagDerivar = true;
    }

    public function render()
    {
        return view('livewire.derivar-paciente-form', [
                'flagDerivar' => $this->flagDerivar,
            ]);    
    }
}