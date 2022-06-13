@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner neuralgia-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">

    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Dolor de Cabeza, Migrañas y Neuralgias </b></h1>
    </div>

    <div class="flex lg:w-7/12 rounded-lg mb-12">
        <div class="w-full space-y-6">
            <p><b>¿Qué es la Cefalea?</b></p>
            <p>También conocida como Jaqueca o dolor de cabeza.</p>
            <p>Existen diferentes subtipos: migraña con o sin aura, de rebote, en racimos, cefalea tensional, hemicránea paroxística, neuralgia del trigémino,etc. </p>
            <p>Todos <b>tienen excelente respuesta al tratamiento</b> con el tratamiento y dosis adecuados.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Cómo se manifiesta la Migraña?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Cefalea difusa o localizada, generalmente pulsatil</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Fenómenos visuales</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Náuseas-Vómitos</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Sensibilidad aumentada a la luz, los olores y ruidos</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Ataques precipitados por ciertas comidas, climas y menstruación</p>
                </li>
            </ul>
        </div>
    </div>

<div class="flex flex-col gap-4 bg-white p-12 shadow-md">
    <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
    <ul class="flex flex-col justify-between gap-2">
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>Afecta a casi <b>1 de cada 4 mujeres</b>! Y al 10% de los hombres; los niños pueden sufrir de esta enfermedad desde los 5 años;</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>Episodios de migrañas frecuentes, especialmente en mujeres mayores a 35 años, fumadoras y que toman hormonas aumentan el riesgo de un infarto cerebral.</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p><b>Neuralgia del trigémino</b>: es un dolor facial muy severo que se debe controlar con medicación y excepcionalmente con cirugía.</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p><b>Cefalea en racimo</b>: es más frecuente en hombres y se caracteriza por dolores muy severos y de corta duración que ocurren varias veces al día, en determinadas épocas del año (“racimo”), y responde a medicamentos diferentes a los usados en la migraña.</p>
        </li>
    </ul>
</div>

</section>

@endsection 