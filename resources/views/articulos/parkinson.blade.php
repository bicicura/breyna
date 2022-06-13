@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner parkinson-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">

    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Enfermedad de Parkinson y movimientos involuntarios</b></h1>
    </div>

    <div class="flex w-full rounded-lg mb-12">
        <div class="w-full space-y-6 lg:space-y-0">
            <p class="lg:mb-4"><b>¿Qué es la Enfermedad de Parkinson?</b></p>
            <p>Es una enfermedad frecuente que pertenece al grupo de aquellas con <b>“movimientos anormales”.</b></p>
            <p>Hay otros tipos como: tortícolis, temblor familiar, distonia, disquinesia, atrofias multisistémicas, parálisis supranuclear progresiva</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Cómo se manifiesta la Enfermedad de Parkinson? </b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Trastornos para caminar</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Lentitud y Rigidez</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Cambios de la letra</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Temblor</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Menos expresividad facial</p>
                </li>
            </ul>
        </div>
    </div>

<div class="flex flex-col gap-4 bg-white p-12 shadow-md">
    <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
    <ul class="flex flex-col justify-between lg:gap-2 gap-6">
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>La enfermedad de parkinson <b>se puede controlar</b> óptimamente con <b>medicación</b> en la mayor parte de los pacientes afectados, el tratamiento es único “artesanal” para cada persona.</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>Ciertos tranquilizantes, digestivos y vasodilatadores cerebrales pueden causar un cuadro similar a la enfermedad de Parkinson: el parkinsonismo. EVITARLOS.</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>Un grupo muy pequeño de pacientes en los que luego de 10 a 15 años de tratamiento el efecto de la medicación disminuye significativamente o genera efectos colaterales limitantes pueden beneficiarse con cirugía cerebral.</p>
        </li>
    </ul>

    <div class="w-full mt-12 lg:mt-0">
        <p class="brenya-text-blue-light">Puntos claves:</p>
        <p class="my-4"><span class="underline">Diagnóstico</span>: Es <b>puramente clínico</b></p>
        <p><span class="underline">Variantes</span>: Es común ver enfermedades neurológicas que “parecen” Parkinson y no lo son. Estas NO responden bien al tratamiento. El temblor al sostener una taza de té o revista es debido en general a “temblor familiar” y NO a Parkinson.  Esto tiene tratamiento efectivo.</p>
    </div>

</div>

</section>

@endsection 