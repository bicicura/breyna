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
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Esclerosis Múltiple</b></h1>
    </div>

    <div class="flex w-full rounded-lg">
        <div class="lg:w-7/12">
            <p><b>¿Qué es la Esclerosis Múltiple?</b></p>
            <p class="my-4">La Esclerosis Múltiple es una enfermedad que <b>suele afectar a personas jóvenes</b>.</p>
            <p>Tiene un <b>componente inmunológico</b> importante. La mayoría de los pacientes tienen un curso clínico benigno que no limita significativamente las actividades de la vida diaria.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Cómo se manifiesta?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Hormigueos</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Inestabilidad</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Debilidad</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Ceguera</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Visión doble</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Vertigo</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col gap-4 bg-white p-12 shadow-md">
        <p class="lg:text-2xl text-4xl"><b>Para tener en cuenta</b></p>
        <ul class="flex flex-col justify-between lg:gap-2 gap-6">
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Más del 75 % de los pacientes con esclerosis múltiple tiene una vida independiente 25 años después del diagnóstico.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>El Interferón está indicado en algunos casos seleccionados, este tratamiento no cura la enfermedad y que un estudio de seguimiento en varios miles de pacientes durante más de 10 años en Canadá no mostró un beneficio significativo de esta medicación comparada con el placebo (equivalente a no tratamiento).</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>En la década del 2000 se iniciaron múltiples estudios con anticuerpos monoclonales que han mostrado una mayor eficacia que el interferón. Se deben seleccionar cuidadosamente los pacientes para tratamiento debido a potenciales efectos colaterales serios de la medicación.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Se están investigando nuevas drogas para la forma progresiva crónica.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Los corticoides siguen siendo el tratamiento de elección para los ataques.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>El cansancio típico en esta enfermedad tiene tratamiento.</p>
            </li>
            <li class="flex items-start gap-4">
                <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                <p>Variantes: la mielitis transversa (afecta la médula espinal pudiendo producir parálisis total) y la neuritis óptica (produce ceguera dolorosa con recuperación posterior) debe ser tratadas rápidamente con corticoides por vía intravenosa. Estas presentaciones pueden constituir la denominada Neuromielitis Optica (enfermedad de Devic).</p>
            </li>
        </ul>
    
        <div class="w-full mt-6 lg:mt-0">
            <p class="brenya-text-blue-light">Puntos claves:</p>
            <p class="my-4"><span class="underline">Diagnóstico</span>: Una adecuada historia clínica, examen neurológico y  adecuados estudios (Resonancia, punción lumbar, potenciales evocados) deberían confirmar el diagnóstico en la mayoría de los pacientes.</b></p>
            <p class="my-4"><span class="underline">Tratamiento</span>: Se puede evitar en pacientes que han tenido episodios neurológicos aislados y sin secuela o con lesiones limitadas en la Resonancia Magnética.</p>
        </div>
    
    </div>

</section>

@endsection 