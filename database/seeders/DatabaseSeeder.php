<?php

namespace Database\Seeders;

use App\Models\Talent;
use App\Models\Hobbie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('busqueda')->insert([
            ['titulo' => 'Accidente Cerebro Vascular (ACV)', 'categoria' => 'Neurologia', 'ruta' => 'acv'],
            ['titulo' => 'Prevención del Deterioro Cognitivo y Enfermedad de Alzheimer', 'categoria' => 'Neurologia', 'ruta' => 'alzheimer'],
            ['titulo' => 'Dolor de Cabeza, Migrañas y Neuralgias', 'categoria' => 'Neurologia', 'ruta' => 'neuralgia'],
            ['titulo' => 'Enfermedad de Parkinson y movimientos involuntarios', 'categoria' => 'Neurologia', 'ruta' => 'parkinson'],
            ['titulo' => 'Dolor y Alteraciones de Columna Cervical y Lumbar', 'categoria' => 'Neurologia', 'ruta' => 'cervical'],
            ['titulo' => 'Sincope, vértigo y mareos', 'categoria' => 'Neurologia', 'ruta' => 'sincope'],
            ['titulo' => 'Epilepsia', 'categoria' => 'Neurologia', 'ruta' => 'epilepsia'],
            ['titulo' => 'Esclerosis Múltiple', 'categoria' => 'Neurologia', 'ruta' => 'esclerosis'],
            ['titulo' => 'Rehabilitación Neurológica', 'categoria' => 'Neurologia', 'ruta' => 'rehabilitacion'],
            ['titulo' => 'RPG "Re-Educacion Postural Global', 'categoria' => 'Neurologia', 'ruta' => 'rpg'],
            ['titulo' => 'Tumores Cerebrales', 'categoria' => 'Neurologia', 'ruta' => 'tumores'],
            ['titulo' => 'Neuropatías y Enfermedades musculares', 'categoria' => 'Neurologia', 'ruta' => 'neuropatias'],
            ['titulo' => 'Medicina del Sueño', 'categoria' => 'Neurologia', 'ruta' => 'sueño'],

            ['titulo' => 'Presión Arterial (Hipertensión e Hipotensión Arterial)', 'categoria' => 'Cardiología', 'ruta' => 'hipertension'],
            ['titulo' => 'Dislipidemias', 'categoria' => 'Cardiología', 'ruta' => 'dislipidemias'],
            ['titulo' => 'Insuficiencia Cardíaca', 'categoria' => 'Cardiología', 'ruta' => 'insuficiencia'],
            ['titulo' => 'Infarto de Miocardio', 'categoria' => 'Cardiología', 'ruta' => 'miocardio'],
            ['titulo' => 'Enfermedad Coronaria, angina de pecho y ateroesclerosis', 'categoria' => 'Cardiología', 'ruta' => 'ateroesclerosis'],
            ['titulo' => 'Enfermedades valvulares', 'categoria' => 'Cardiología', 'ruta' => 'valvulares'],
            ['titulo' => 'Arritmias cardíacas y electrofisiología', 'categoria' => 'Cardiología', 'ruta' => 'arritmias'],
            ['titulo' => 'Enfermedades de la aorta y arterias miembros inferiores', 'categoria' => 'Cardiología', 'ruta' => 'aorta'],
        ]);
    }
}