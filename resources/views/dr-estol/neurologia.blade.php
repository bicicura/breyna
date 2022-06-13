@extends('layouts.plantilla')

<style>
    nav ul li {
        color: black;
    }

    body {
        background-color: #F8F8FA;
    }

    nav {
        background-color: white;
    }
</style>

@section('contenido')

<section class="px-10 lg:px-40 py-40 breyna-text-black lg:w-8/12 text-2xl lg:text-base">

    <div class="py-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/dr-estol"> <span class="icon-custom flechita-atras-svg mr-2"></span> Dr. Conrado Estol</a>
        <h1 class="uppercase breyna-text-blue mt-6 text-3xl lg:text-xl"><b>Neurología</b></h1>
    </div>

    <div class="flex white w-full">
        <div class="w-full flex flex-col gap-6">
            <p>El Dr. Estol tiene <b>más de 30 años de trayectoria como neurólogo</b> luego de completar una sólida formación en esta especialidad en los Estados Unidos. </p>
            <p>Allí recibió su formación con destacados profesionales reconocidos en las <b>áreas de la migraña (Dr. Reinmuth), neuralgia del trigémino (Drs. Jannetta y Fromm), vértigo (Drs. Furman y Daroff), esclerosis múltiple (Dr. Eidelman), ACV (Drs. Caplan, Pessin, Wechsler), esclerosis lateral amiotrófica (Dr. Munsat), neuro-oftalmología (Dr. Hedges), epilepsia (Dr. Brenner), neuro-pediatría (Dr. Painter), neuro-patología (Drs. Moossy, Martinez).</b></p>
            <p>Esto le permitió tener una sólida base en la neurología general para hacer después de la <b>Residencia en Neurología, la sub-especialización en Enfermedades Cerebrovasculares (ACV).</b></p>
            <p>El Dr. Conrado Estol <b>trabajó 3 años con el médico que desarrolló el primer tratamiento para la migraña.</b> A su vez,  <b>se formó con el neurocirujano que inventó la cirugía para la neuralgia del trigémino.</b></p>
        </div>

    </div>
</section>

@endsection