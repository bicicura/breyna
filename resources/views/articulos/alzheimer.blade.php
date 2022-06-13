@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner alz-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black">

    <div class="py-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 text-xl"><b>Prevención del Deterioro Cognitivo y Enfermedad de Alzheimer</b></h1>
    </div>

    <div class="flex w-full rounded-lg">
        <div class="w-full lg:w-7/12 text-3xl lg:text-base">
            <p><b>¿Qué es la demencia?</b></p>
            <p class="my-6">Demencia, arteriosclerosis o senilidad como se la conoce popularmente, es la <b>pérdida de 2 o más funciones cognitivas</b>. Por ejemplo:</p>
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Memoria</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Lenguaje</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Función Ejecutiva</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Cálculo</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Orientación visuo-espacial</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full text-3xl lg:text-base">
            <p class="mb-6"><b>¿Cuáles son las causas de la demencia?</b></p>
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedad de Alzheimer</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Infartos y Hemorragias cerebrales</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Secuelas de Infecciones</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Tumores, Traumatismos cerebrales</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full text-3xl lg:text-base">
            <p class="mb-6"><b>¿Cómo se manifiesta la demencia?</b></p>
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Confusión</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Olvidos</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Desorientación</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Cambios de la personalidad o conducta alterada</p>
                </li>
            </ul>
        </div>
    </div>

<div class="flex flex-col gap-4 bg-white p-12 shadow-md text-3xl lg:text-base">
    <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
    <p>Actualmente se reconoce que los adultos pueden tener “alteraciones cognitivas” (las diferentes funciones que usa el cerebro para llevar a cabo las actividades diarias en forma normal), sin cumplir criterios diagnósticos para “demencia”. Es importante definir estas alteraciones ya que el <b>diagnóstico temprano</b>, dependiendo de la causa, <b>puede frenar o limitar la enfermedad</b>. Las alteraciones descriptas NO se pueden considerar normales para ninguna edad.</p>
    <p>Las alteraciones cognitivas se pueden tratar con rehabilitación cognitiva o medicación. La rehabilitación o estimulación cognitiva mejora la concentración, atención y memoria. Su efectividad es notoria aún en adultos SIN enfermedad cognitiva. La medicación disponible actualmente tiene una eficacia modesta pero probada (donepecilo y memantina). La efectividad del tratamiento dependerá de la causa de la demencia y su estadio de evolución (con menor efecto mientras más avanzado esté el proceso). Los energizantes neuronales, vasodilatadores y otras drogas no solo NO tienen probada eficacia sino que podrían ser contraproducentes.</p>
</div>

</section>

@endsection