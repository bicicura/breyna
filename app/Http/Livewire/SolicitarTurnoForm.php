<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\WithPagination;

class SolicitarTurnoForm extends Component
{
    use WithPagination;

    protected $listeners = ['changedInput' => 'changedInput'];

    public $email;
    public $nombre;
    public $telefono;
    public $especialidad;
    public $medico;
    public $subject;
    public $mailenviado = false;

    public function formatearEspecialidad() {
        if ($this->especialidad === 'neurologia') {
            $this->especialidad = 'Neurología';
            return;
        }  elseif ($this->especialidad === 'cardiologia') {
            $this->especialidad = 'Cardiología';
            return;
        }
           elseif ($this->especialidad === 'clinica') {
            $this->especialidad = 'Clínica';
            return;
        }  elseif ($this->especialidad === 'nutricion') {
            $this->especialidad = 'Nutrición';
            return;
        }  elseif ($this->especialidad === 'endocrinologia') {
            $this->especialidad = 'Endocrinología';
            return;
        }  elseif ($this->especialidad === 'deportologia') {
            $this->especialidad = 'Deportología';
            return;
        }  elseif ($this->especialidad === 'terapista') {
            $this->especialidad = 'Terapia Ocupacional';
            return;
        } elseif ($this->especialidad === 'psicologia') {
            $this->especialidad = 'Psicología';
            return;
        } elseif ($this->especialidad === 'fonoaudiologia') {
            $this->especialidad = 'Fonoaudiología';
            return;
        } elseif ($this->especialidad === 'kinesiologia') {
            $this->especialidad = 'Kinesiología';
            return;
        }
    }

    public function changedInput() {
        $this->medico = '';
    }

    public function revalidar() {
        $this->medico = '';
        $this->dispatchBrowserEvent('name-updated', ['newName' => 'hola']);
        $this->validate([
            'nombre' => 'required|min:3',
            'telefono' => 'required|min:6',
            'email' => 'required|email',
            'especialidad' => 'required',
            'medico' => 'required',
        ]);
        $this->reset('medico');
    }

    public function store() {
         // aca valido
         try {
            $this->validate([
                'nombre' => 'required|min:3',
                'telefono' => 'required|min:6',
                'email' => 'required|email',
                'especialidad' => 'required',
                'medico' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->revalidar();
        }

        $this->formatearEspecialidad();

        $mensaje = '
        El siguiente usuario ha solicitado un turno.
        Nombre y apellido: '.$this->nombre.'
        Email: '.$this->email.'
        Telefono: '.$this->telefono.'
        Especialidad: '.$this->especialidad.'
        Médico: '.$this->medico.'
        ';

        Mail::raw($mensaje, function($message) {
            $message->to($this->email)
            ->subject('Consulta web | Usuario solicita turno');
        });

        $this->mailenviado = true;
    }

    public function render()
    { 
        return view('livewire.solicitar-turno-form', [
                'flagMail' => $this->mailenviado,
            ]);    
    }
}
