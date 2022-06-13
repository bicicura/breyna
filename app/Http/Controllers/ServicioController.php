<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    
    public function NeuIndex()
    {
        $neurologia = [
            ['titulo' => 'Accidente Cerebro Vascular (ACV)', 'img' => 'acv.jpg', 'ruta' => 'acv'],
            ['titulo' => 'Prevención del Deterioro Cognitivo y Enfermedad de Alzheimer','img' => 'alzheimer.jpg', 'ruta' => 'alzheimer'],
            ['titulo' => 'Dolor de Cabeza, Migrañas y Neuralgias','img' => 'neuralgias.jpg', 'ruta' => 'neuralgia'],
            ['titulo' => 'Enfermedad de Parkinson y movimientos involuntarios', 'img' => 'parkinson.jpg', 'ruta' => 'parkinson'],
            ['titulo' => 'Dolor y Alteraciones de Columna Cervical y Lumbar','img' => 'cervical.jpg', 'ruta' => 'cervical'],
            ['titulo' => 'Sincope, vértigo y mareos','img' => 'sincope.jpg', 'ruta' => 'sincope'],
            ['titulo' => 'Epilepsia','img' => 'epilepsia.jpg', 'ruta' => 'epilepsia'],
            ['titulo' => 'Esclerosis Múltiple','img' => 'esclerosis.jpg', 'ruta' => 'esclerosis'],
            ['titulo' => 'Rehabilitación Neurológica','img' => 'rehab.jpg', 'ruta' => 'rehabilitacion'],
            ['titulo' => 'RPG "Re-Educacion Postural Global"','img' => 'rpg-alt.jpg', 'ruta' => 'rpg'],
            ['titulo' => 'Tumores Cerebrales','img' => 'tumores.jpg', 'ruta' => 'tumores'],
            ['titulo' => 'Neuropatías y Enfermedades musculares','img' => 'neuropatias.jpg', 'ruta' => 'neuropatias'],
            ['titulo' => 'Medicina del Sueño','img' => 'suenio.jpg', 'ruta' => 'medicina-del-suenio'],
            ['titulo' => 'ELA','img' => 'ela.jpg', 'ruta' => 'ela'],
        ];

        return view('neurologia', ['neurologias' => $neurologia, 'ensayos' => false]);
    }

    public function cardiologiaIndex()
    {
        $cardiologia = 
        [
            ['titulo' => 'Presión Arterial (Hipertensión e Hipotensión Arterial)', 'ruta' => 'hipertension', 'img' => 'cardio7.jpg'],
            ['titulo' => 'Dislipidemias', 'ruta' => 'dislipidemias', 'img' => 'cardio10.jpg'],
            ['titulo' => 'Insuficiencia Cardíaca', 'ruta' => 'insuficiencia', 'img' => 'cardio3.jpg'],
            ['titulo' => 'Infarto de Miocardio', 'ruta' => 'miocardio', 'img' => 'cardio4.jpg'],
            ['titulo' => 'Enfermedad Coronaria, angina de pecho y ateroesclerosis', 'ruta' => 'ateroesclerosis', 'img' => 'cardio11.jpg'],
            ['titulo' => 'Enfermedades valvulares', 'ruta' => 'valvulares', 'img' => 'cora.jpg'],
            ['titulo' => 'Arritmias cardíacas y electrofisiología', 'ruta' => 'arritmias', 'img' => 'cardio1.jpg'],
            ['titulo' => 'Enfermedades de la aorta y arterias miembros inferiores', 'ruta' => 'aorta', 'img' => 'cardio9.jpg'],
        ];
        return view('cardiologia', ['cardiologia' => $cardiologia, 'ensayos' => false]);
    }

    public function articulosPorId($nombre) 
    {
        $ruta = '/articulos/'.$nombre;
        return view($ruta, ['ensayos' => false]);
    }

    public function sponsors() {
        $sponsors = [
            ['img' => 'lilly.jpg'],
            ['img' => 'boehringer.jpg'],
            ['img' => 'janssen.jpg'],
            ['img' => 'abscience.jpg'],
            ['img' => 'bayer.jpg'],
            ['img' => 'bial.jpg'],
            ['img' => 'roche.jpg'],
            ['img' => 'pfizer.jpg'],
            ['img' => 'intarcia.jpg'],
            ['img' => 'sanofi.jpg'],
            ['img' => 'amgen.jpg'],
            ['img' => 'biogen.jpg'],
            ['img' => 'novartis.jpg'],
            ['img' => 'mallinckrodt.jpg'],
            ['img' => 'daiichi.jpg'],
            ['img' => 'abbvie.jpg'],
            ['img' => 'vifor.jpg'],
            ['img' => 'nuvelution.jpg'],
            ['img' => 'milestone.jpg'],
            ['img' => 'nih.jpg'],
            ['img' => 'vielabio.jpg'],
            ['img' => 'columbia.jpg'],
            ['img' => 'cla.jpg'],
            ['img' => 'hamilton.jpg'],
            ['img' => 'novo.jpg'],
            ['img' => 'biopharma.jpg'],
            ['img' => 'ionis.jpg'],
            ['img' => 'bristol.jpg'],
        ];

        $cros = [
            ['img' => 'icon.jpg'],
            ['img' => 'syneos.jpg'],
            ['img' => 'lat.jpg'],
            ['img' => 'iqvia.jpg'],
            ['img' => 'resolution.jpg'],
            ['img' => 'genexion.jpg'],
            ['img' => 'prahealth.jpg'],
            ['img' => 'activa.jpg'],
            ['img' => 'ppd.jpg'],
            ['img' => 'medpace.jpg'],
            ['img' => 'parexel.jpg'],
        ];
    
        $ensayos = true;

        return view('sponsors', ['sponsors' => $sponsors, 'cros' => $cros, 'ensayos' => $ensayos]);
    }

}
