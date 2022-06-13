@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner epilepsia-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Epilepsia</b></h1>
    </div>

    <div class="flex w-full rounded-lg mb-6">
        <div class="w-full">
            <p><b>¿Qué es la Epilepsia?</b></p>
            <p class="my-4">Enfermedad frecuente caracterizada por <b>actividad eléctrica cerebral anormal</b> que afecta al 0.5 al 1 % de la población.</b></p>
        </div>
    </div>

    <div class="flex w-full rounded-lg mb-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Cómo se manifiesta la Epilepsia?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Movimientos convulsivos de una extremidad o parte aislada del cuerpo (ejemplo, cara o brazo)</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Alteraciones o disrritmias en el electroencefalograma;
                    </p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Desmayos con movimientos bruscos o endurecimiento de las extremidades seguidos por estado letárgico;</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Desconexiones -ausencias- en forma recurrente pueden también ser epilepsia</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col gap-4 bg-white p-12 shadow-md">
        <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Las convulsiones no producen daño cerebral a menos que persistan sin detenerse (situación infrecuente).</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Las disrritmias en el electroencefalograma NO deben ser tratadas si el paciente no ha tenido convulsiones.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Cuando ocurre una convulsión solo se debe evitar que el paciente se golpee. No se deben meter objetos en la boca y no siempre se debe administrar medicación (la mayoría se detienen espontáneamente).</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Luego de dos años sin episodios se puede considerar suspender la medicación en adultos ( luego de 3 o 4 años en niños )</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Confusiones o trastornos de la memoria en forma recurrente y breve pueden ser debidos a epilepsia parcial compleja (tratable)</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Entre los pacientes que no son controlados con la medicación algunos muy seleccionados pueden beneficiarse con cirugía cerebral.</p>
            </li>
        </ul>
    
        <div class="w-full space-y-4 max-w-6xl">
            <p class="brenya-text-blue-light">Puntos claves:</p>
            <p><span class="underline">Tratamiento</span>: La mayor parte de los pacientes que NO están controlados con la medicación es porque reciben el medicamento equivocado o el correcto en una dosis insuficiente. Con una <b>medicación adecuada, se puede lograr el control de los episodios en la mayor parte de los pacientes afectados.</b></p>
            <p><span class="underline">Manejo</span>: Luego de un episodio se aconseja <b>no manejar durante algunos meses</b> debido a una mayor posibilidad de que los episodios se repitan en ese período.</p>
            <p><span class="underline">Medición de niveles en plasma</span>: se limita a situaciones muy especiales.</p>
            <p><span class="underline">Internación</span>: Es inusual que se deba internar a una persona con epilepsia conocida solo porque haya tenido una convulsión.</p>
            <p><span class="underline">Causa</span>: En la mayoría de los pacientes jóvenes no se detecta una causa específica. En <b>pacientes mayores sí se debe buscar la causa de una convulsión</b>. La evaluación consiste en un electroencefalograma y una Resonancia Magnética de cerebro. </p>
        </div>
    
    </div>

</section>

@endsection 