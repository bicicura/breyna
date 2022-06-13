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
        <h1 class="uppercase breyna-text-blue mt-6 text-3xl lg:text-xl"><b>ACV</b></h1>
    </div>

    <div class="flex white w-full">
        <div class="w-full">
            <p class="mb-6">El <b>Dr Estol es Director en el Sanatorio Guemes de la primera Unidad de ACV en la Argentina</b> que fue construida con este propósito (8 camas) y que es dirigida por un neurólogo con formación en la especialidad cerebro vascular. El Dr. Estol es probablemente uno de los pocos médicos en América Latina que completó la formación en enfermedad cerebrovascular (en los EE.UU. en la década del 80 con el Dr. Louis Caplan).</p>
            <p>El ACV (Ataque Cerebro Vascular) es una <b>enfermedad que afecta la circulación cerebral</b>. Distintos procesos pueden “tapar” una arteria o vena cerebral causando un “infarto” cerebral (también llamado “trombosis” o “isquemia”) o la arteria se puede “romper” por efecto de hipertensión o aneurismas causando una “hemorragia” cerebral (también llamado “derrame”). <b>Toda la población, niños, jóvenes, adultos, hombres y mujeres, pueden sufrir un ACV.</b></p>
 
            <ul class="flex flex-col justify-between lg:gap-2 gap-6 mt-4">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Los ACV son, con el infarto cardíaco, las causas de muerte más frecuentes y prevenibles.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Los ACV son la causa de discapacidad (parálisis, pérdida del habla, ceguera, etc) más frecuente.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Los ACV son la causa de pérdida de memoria más frecuente.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Los ACV pueden ser tratados efectivamente dentro de las primeras 4 horas de iniciados los  síntomas.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Los pacientes con estenosis (achicamiento) de la arteria carótida (aún del 80% o 90%) que NO han tenido síntomas (ceguera, parálisis del brazo o pierna o alteraciones en el habla) NO deben ser operados NI se les debe colocar un stent. Tienen menor riesgo si el taponamiento arterial se trata con medicación.</p>
                </li>
            </ul>
        </div>

    </div>

    <p class="mt-6 breyna-text-blue text-xl"><b>Ante cualquier síntoma sospechoso de ACV se debe concurrir a un centro médico de forma inmediata. La PREVENCIÓN de enfermedad vascular es altamente efectiva para evitar un ACV.</b></p>
</section>

@endsection