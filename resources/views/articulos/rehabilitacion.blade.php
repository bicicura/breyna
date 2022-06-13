@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner rehabilitacion-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Rehabilitación Neurológica</b></h1>
    </div>

    <div class="flex w-full rounded-lg mb-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Qué profesionales son necesarios para un equipo de Rehabilitación Neurológica?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Terapista física</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Terapista ocupacional</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Fonoaudióloga</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Terapista cognitiva</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Terapista recreacional</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Neuropsicóloga</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿En qué patologías se debe realizar?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedad cerebrovascular</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedad de parkinson y relacionadas</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedad de la columna</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedades neuromusculares</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Esclerosis múltiple</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedad del vestíbulo (vértigo)</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="lg:w-7/12">
            <p class="mb-6"><b>¿Por qué realizar una Rehabilitación Neurológica?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Múltiples estudios científicos han demostrado que todo paciente con una de las enfermedades descriptas se beneficia significativamente con rehabilitación neurológica.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>La Rehabilitación que ofrece el sistema de salud es adecuada para problemas de articulaciones y músculos pero no para problemas neurológicos, o incluso ser contraproducente al hacer ejercicios que pueden aumentar el tono muscular.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>La rehabilitación neurológica usa la técnica de Neurodesarrollo o Bobath. </p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Las sesiones de rehabilitación neurológica tienen una duración de por lo menos 50 minutos, son individuales y con supervisión continua y directa del terapista.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>La rehabilitación de problemas de columna requiere técnicas especiales.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Un estudio de Harvard mostró que personas mayores de 70 años, aun sin enfermedades neurológicas se benefician con las técnicas de rehabilitación neurológica por una disminución en el riesgo de caídas.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col gap-4 bg-white p-12 shadow-md">
        <p class="text-4xl lg:text-2xl"><b>Puntos Clave</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Muchos pacientes con limitación funcional severa debida a una enfermedad neurológica <b>recuperan una capacidad significativa</b> con el programa de rehabilitación adecuado.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>El <b>“equipo” multidisciplinario</b> de rehabilitación descripto arriba define el programa más adecuado para cada persona y su patología</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>En muchas enfermedades neurológicas que no tienen tratamiento con medicaciones, la rehabilitación ofrece la posibilidad de un <b>grado significativo de recuperación para el paciente.</b></p>
            </li>
        </ul>
    </div>

</section>

@endsection 