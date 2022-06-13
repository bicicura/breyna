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

<section class="px-40 pt-24 pb-40 breyna-text-black w-8/12">
    <div class="pt-12 pb-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/prevencion-enfermedad-vascular"> <span class="icon-custom flechita-atras-svg mr-2"></span> Prevención de Enfermedad Vascular</a>
        <h1 class="uppercase breyna-text-blue mt-6 text-xl"><b>Cesación Tabáquica </b></h1>
    </div>

    <div class="flex white w-full">
        <div class="w-full">
            <p class="my-6">Nuestro grupo pregona la cesación del habito tabáquico en los fumadores y el mantenimiento de periodos sin recaída en los ex fumadores. Para ello contamos con especialistas en el tema y con un plan de tratamiento que incluye en primer lugar la identificación de la etapa en la que se encuentra cada fumador, buscando motivaciones personales para dejar de fumar en los que se encuentran en etapas tempranas. Reforzando y acompañando las mismas con una terapia conductual y utilización del tratamiento farmacológico adecuado, en caso de ser necesario, para mejorar la tasa de éxito y controlar los síntomas de abstinencia en aquellos fumadores que se encuentran en etapas más avanzadas del proceso de abandono.</p>
            <p><b>Durante todo el programa proporcionamos un apoyo continuo, permanente y proactivo para aumentar las tasas de éxito y acompañar a las personas en este camino.</b></p>
        </div>
    </div>
</section>

@endsection