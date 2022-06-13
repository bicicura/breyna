<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\WithPagination;

class FooterForm extends Component
{
    use WithPagination;

    public $nombreFooter;
    public $apellidoFooter;
    public $emailFooter;
    public $telefonoFooter;
    public $especialidadFooter;
    public $medicoFooter;
    public $subjectFooter;
    public $mailenviadoFooter = false;

    public $ensayos = null;

    public function storeFooter() {

        $this->validate([
            'nombreFooter' => 'required|min:2',
            'apellidoFooter' => 'required|min:2',
            'emailFooter' => 'required|email',
            'telefonoFooter' => 'required|min:6',
            'especialidadFooter' => 'required',
            'medicoFooter' => 'required',
        ]);

        $mensaje = '
        Nombre y apellido : '.$this->nombreFooter.' '.$this->apellidoFooter.'
        Email: '.$this->emailFooter.'
        Telefono: '.$this->telefonoFooter.'
        Especialidad: '.$this->especialidadFooter.'
        Médico: '.$this->medicoFooter.'
        ';

        Mail::raw($mensaje, function($message) {
            $message->to($this->emailFooter)
            ->subject('Nuevo turno vía Web');
        });

        $this->mailenviadoFooter = true;
    }

    public function render()
    {  
        return view('livewire.footer-form', [
                'flagMailFooter' => $this->mailenviadoFooter,
            ]);    
    }
}
