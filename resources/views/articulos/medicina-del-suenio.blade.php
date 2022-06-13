@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner suenio-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base lg:w-9/12">

    <div class="pt-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Medicina del Sueño</b></h1>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <ul class="flex flex-col justify-between gap-4">
                <li class="flex items-start">
                    <p>En Medicina del Sueño estudiamos y tratamos problemas neurológicos como el insomnio, las pesadillas, el sonambulismo, el síndrome de piernas inquietas (entre otros) y trastornos respiratorios como el síndrome de apneas obstructivas del sueño.</p>
                </li>
                <li>
                    <p>El ronquido, un motivo de consulta muy frecuente, puede acompañarse de apneas. Identificarlas es muy importante, porque representan un factor de riesgo vascular.</p>
                </li>
                <li>
                    <p>Las apneas no tratadas pueden convertirse en un factor de riesgo para infarto de miocardio, arritmia, accidente cerebrovascular e hipertensión arterial de difícil manejo.</p>
                </li>
                <li>
                    <p>La constante evolución de la tecnología en Medicina del Sueño nos permite hoy, contar con estudios de sueño que pueden realizarse de forma ambulatoria, como la poligrafía respiratoria: un estudio técnicamente sencillo, durante el cual el paciente puede dormir en la comodidad de su hogar sin necesidad de ir a un hospital o sanatorio, respetando sus costumbres y horarios habituales.</p>
                </li>
                <li>
                    <p>En Breyna contamos con equipos de última tecnología que nos permiten hacer estos estudios en domicilio como parte de nuestro abordaje de los problemas de sueño y en el contexto de nuestro plan integral de prevención vascular.</p>
                </li>
            </ul>
        </div>
    </div>

    <div>
        <p class="lg:text-2xl brenya-text-blue-light">¿Tenes problemas de sueño? ¿Roncas? ¡Pedí una consulta con nosotros!</p>
    </div>


</section>

@endsection 