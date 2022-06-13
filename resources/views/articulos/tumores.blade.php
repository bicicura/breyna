@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner tumores-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pt-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Tumores Cerebrales</b></h1>
    </div>

    <div class="flex lg:w-10/12 rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Qué son los Tumores Cerebrales?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Un tumor es el crecimiento de células anormales, en este caso en el cerebro. Los tumores pueden ser malignos (con células cancerígenas) o benignos (con células no cancerígenas) Otro tipo de diferencia es que los tumores malignos tiene un alto grado de crecimiento.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Se los denomina primarios a los que son propios del cerebro y metastásicos o secundarios a los que tienen su origen en otro lado y dichas células migran al cerebro.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Adormecimiento en los brazos y piernas</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Algunos ejemplos de tumores primarios no tan comunes son:<br>- Ependimoma<br>- Tumores de hipófisis y glándula pineal<br>- Linfoma primario.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Cuáles son los síntomas a tener en cuenta?</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Cefalea (dolor de cabeza) diferente a los habituales</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Nauseas y vómitos</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Dificultad  en el habla, escuchar o para ver</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Cambios en el estado de ánimo</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Convulsiones</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex lg:w-7/12 rounded-lg mb-12">
        <div class="w-full">
            <p><b>¿Cómo lo detectamos?</b></p>
            <p class="my-4">Principalmente el neurólogo lo diagnostica por los síntomas, un buen interrogatorio y el examen físico.</p>
            <p>También se utiliza estudios complementarios como la Resonancia magnética, Tomografía o biopsia.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg mb-12">
        <div class="w-full">
            <p><b>Tratamiento</b></p>
            <p class="my-4">Es habitual el tratamiento quirúrgico, radioterapia o quimioterapia.</p>
        </div>
    </div>

<div class="flex flex-col gap-4 bg-white p-12 shadow-md">
    <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
    <ul class="flex flex-col justify-between lg:gap-2 gap-6">
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>Existen factores de riesgo para padecer cáncer/tumor cerebral algunos son modificables como el fumar y otro no modificables como el sexo, edad, antecedentes familiares.</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>El tener un factor de riesgo o muchos, no significa que la persona tendrá un tumor cerebral. La mayoría de los tumores cerebrales no están asociados a un factor de riesgo específico.</p>
        </li>
    </ul>
</div>

</section>

@endsection 