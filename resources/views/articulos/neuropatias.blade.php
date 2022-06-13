@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner neuropatias-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">

    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Neuropatías y Enfermedades musculares </b></h1>
    </div>

    <div class="flex flex-col gap-4 bg-white p-12 shadow-md mb-12 rounded-lg">
        <p class="lg:text-2xl"><b>¿Qué es una Neuropatía?</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6 lg:w-10/12">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Es una afectación de los nervios periféricos, que son los nervios que salen de la médula espinal. puede ser axonal o desmielinizante.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>¿Cómo se manifiesta? Puede provocar trastornos en la sensibilidad en brazos y piernas, como hormigueos, dolor tipo pinchazos o tipo descarga elétrica, sensación de frío o calor doloroso sobretodo en manos y pies y falta de fuerza.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>¿Cuáles son las causas? Pueden ser traumáticas, hereditarias, autoinmunes, por falta de vitaminas, exposición a toxinas o drogas o por trastornos metabólicos como la diabetes.</p>
            </li>
        </ul>
    
        <div class="flex flex-col gap-4 mt-4">
            <p><b>Para tener en cuenta</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Muchas neuropatías son idiopáticas, es decir que no se conoce la causa.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Se diagnostican con un buen interrogatorio y examen neurológico.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Es necesario solicitar un laboratorio completo y un electromiograma.</p>
                </li>
            </ul>
        </div>
    
    </div>

    <div class="flex flex-col gap-4 bg-white p-12 shadow-md mb-12 rounded-lg">
        <p class="lg:text-2xl"><b>¿Qué es Miastenia Gravis?</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Es la más común de las enfermedades de la unión neuromuscular. es una patología autoinmune que provoca debilidad muscular que fluctúa durante el día, aumenta con el ejercicio físico y mejora con el reposo o la administración de drogas anticolinesterásicas.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Se puede manifestar con visión doble, caída de uno o de los dos párpados, dificultad para hablar o tragar y falta de fuerza en brazos y piernas.</p>
            </li>
        </ul>
    </div>

    <div class="flex flex-col gap-4 bg-white p-12 shadow-md rounded-lg">
        <p class="lg:text-2xl"><b>¿Qué es una Miopatía?</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6 lg:w-10/12">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Las miopatías son un conjunto de enfermedades del músculo que se manifiesten con debilidad muscular, atrofia o adelgazamiento de los músculos, dolor y calambres entre otros síntomas.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Pueden ser hereditarias o adquiridas.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Estas últimas pueden ser secundariasa procesos inflamatorios, enfermedades endocrinológicas, asociadas a otras enfermedades o secundarias a drogas como el alcohol, corticoides o drogas para bajar el colesterol.</p>
            </li>
        </ul>
    
        <div class="w-full mt-6 lg:mt-0lg: w-10/12">
            <p><b>Para tener en cuenta</b></p>
            <p class="my-4">Para diagnosticarlas es necesario realizar un buen interrogatorio y examen neurológico, solicitar laboratorio y electromiograma y en algunos casos realizar estudios genéticos.</p>
        </div>
    
    </div>

</section>

@endsection 