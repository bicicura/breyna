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

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner w-full py-40"></div>

<section class="lg:px-40 px-10 pb-40 breyna-text-black lg:w-8/12 w-full text-3xl lg:text-base">

    <div class="py-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 text-2xl"><b>Accidente Cerebro Vascular (ACV)</b></h1>
    </div>

    <div class="flex white w-full">
        <div class="w-full">
            <p class="mb-6">El ACV (Ataque Cerebro Vascular) es una <b>enfermedad que afecta la circulación cerebral</b>. Distintos procesos pueden “tapar” una arteria o vena cerebral causando un “infarto” cerebral (también llamado “trombosis” o “isquemia”) o la arteria se puede “romper” por efecto de hipertensión o aneurismas causando una “hemorragia” cerebral (también llamado “derrame”).</p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Toda la población, niños, jóvenes, adultos, hombres y mujeres, pueden sufrir un ACV.</p>
                </li>
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
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg lg:my-12 my-16 ">
        <div class="w-full">
            <p class="mb-6"><b>Signos de advertencia</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Repentina debilidad o parálisis de la cara, el brazo o la pierna.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Dificultad en el habla o en la comprensión cotidiana del lenguaje.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Repentina y temporaria pérdida de la visión, especialmente de un ojo, o un episodio de doble visión.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Mareos, inestabilidad, o una caída repentina.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Dolor de cabeza (generalmente severo y de inicio abrupto) o cambio inexplicado en la pauta de los dolores de cabeza.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Dificultad para tragar.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg lg:my-12 my-16">
        <div class="w-full">
            <p class="mb-6"><b>Factores de riesgo más comunes</b></p>
            <ul class="flex flex-col justify-between lg:gap-2 gap-6">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Previos casos de ACV o signos de él.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Presión arterial alta.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Hábito de fumar</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Sedentarismo.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Obesidad.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Colesterol elevado.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Historia familiar de ACV o enfermedades cardíacas.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Consumo excesivo de alcohol.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Diabetes.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Enfermedades cardíacas.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Anticonceptivos orales (especialmente después de los 30 años de edad).</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex flex-col gap-4">
        
        <p><b>Tipos de ACV</b></p>

        <div>
            <p>Uno de los casos más comunes de ACV es la <span class="brenya-text-blue-light">trombosis cerebral</span> (85% del total).</p>
            <p>Esta ocurre cuando el flujo de sangre en una arteria cerebral se bloquea debido a la formación de un coágulo. La aterosclerosis, que es la acumulación de depósitos grasos en las paredes de las arterias, causa un estrechamiento de los vasos sanguíneos y con frecuencia es responsable de estos coágulos.</p>
        </div>

        <div>
            <p>Otro tipo de ACV es la <span class="brenya-text-blue-light">embolia cerebral.</span></p>
            <p>El coágulo se origina en alguna parte alejada del cerebro, por ejemplo en el corazón o en una de las carótidas. Una parte del coágulo se desprende y es arrastrado por la corriente sanguínea al cerebro, donde las arterias se dividen para formar vasos sanguíneos más pequeños. El coágulo llega a un punto más allá del cual no puede seguir y tapa el vaso sanguíneo, cortando el abastecimiento de sangre.</p>
        </div>

        <div>
            <p>Otros ACV son <span class="brenya-text-blue-light">hemorrágicos</span> (15% del total).</p>
            <p>No todos los ACV son causados por coágulos, existen casos en los cuales la hemorragia ocurre cuando se rompe un vaso sanguíneo dentro o alrededor del cerebro, volcando sangre en el cerebro o en las áreas que lo rodean. Esto último se conoce como hemorragia subaracnoidea y generalmente se produce por la rotura de una aneurisma, que es un punto débil en la pared arterial.</p>
            <p>El otro tipo de ACV hemorrágico es la <span class="brenya-text-blue-light">hemorragia intracerebral</span> que puede ser causada por hipertensión arterial.</p>    
        </div>
    </div>
    
    

</section>

@endsection