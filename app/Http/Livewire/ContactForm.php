<?php

namespace App\Http\Livewire;

use App\Models\Search;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\WithPagination;

class ContactForm extends Component
{
    use WithPagination;

    public $email;
    public $nombre;
    public $apellido;
    public $telefono;
    public $especialidad;
    public $medico;
    public $subject;
    public $mailenviado = false;
    public $search = '';

    public $ensayos;

    public function store() {

        $this->validate([
            'nombre' => 'required|min:2',
            'apellido' => 'required|min:2',
            'telefono' => 'required|min:6',
            'email' => 'required|email',
            'especialidad' => 'required',
            'medico' => 'required',
        ]);

        $mensaje = '
        Nombre y apellido : '.$this->nombre.' '.$this->apellido.'
        Email: '.$this->email.'
        Telefono: '.$this->telefono.'
        Especialidad: '.$this->especialidad.'
        Médico: '.$this->medico.'
        ';

        Mail::raw($mensaje, function($message) {
            $message->to($this->email)
            ->subject('Consulta web | Paciente solicita turno');
        });

        $this->mailenviado = true;
    }

    public function render()
    { 
        $resultados = Search::where('titulo', 'like', '%'.$this->search.'%')->paginate(5);

        return view('livewire.contact-form', [
                'resultados' => $resultados,
                'flagMail' => $this->mailenviado,
            ]);    
    }
}
