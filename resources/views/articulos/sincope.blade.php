@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner sincope-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">

    <div class="py-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Sincope, vértigo y mareos</b></h1>
    </div>

    <div class="flex w-full rounded-lg mb-12">
        <div class="lg:w-7/12">
            <p>Si bien los pacientes (y muchos médicos) usan estos términos en forma indistinta, <b>mareo</b> es una sensación inespecífica que puede referirse a inestabilidad, inseguridad al caminar, sensación de cabeza liviana, etc. </p>
            <p><b>Vértigo</b> es la sensación específica de que la persona o su ambiente se mueven usualmente con una sensación “giratoria”. Frecuentemente esta sensación de movimiento se asocia con náuseas y vómitos.</p>
        </div>
    </div>
    
    <div class="flex flex-col gap-4 bg-white p-12 shadow-md">
        <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>En la mayor parte de los casos estos problemas se pueden diagnosticar durante la entrevista neurológica. La videonistagmografía y otros estudios neuro-otológicos específicos son necesarios en algunos casos puntuales e inusuales.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Los mareos y vértigos <b>NUNCA tienen relación con la patología de las vértebras cervicales</b>.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p> El <b>vértigo aislado nunca es causado por enfermedad vascular cerebral</b>. Por lo tanto NO se deben usar medicaciones con efecto vasodilatador o circulatorio.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>El <b>Vértigo Posicional Paroxístico Benigno es la causa más común de vértigo intenso aislado</b>. Mejora con ejercicios y NO son necesarios estudios específicos. Se manifiesta con episodios de vértigo breve  secundarios a movimientos de la cabeza y calma con el reposo.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Otras causas de vértigo: <b>laberintitis, neuronitis, enfermedad de Meniere.</b></p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Paradójicamente el uso de medicaciones como dramamine, valium y el reposo <b>retrasan la recuperación del paciente</b>.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>La rehabilitación vestibular (ejercicios específicos guiados por una kinesióloga) son efectivos en <b>acelera la recuperación</b>.</p>
            </li>
        </ul>
    </div>

</section>

@endsection  