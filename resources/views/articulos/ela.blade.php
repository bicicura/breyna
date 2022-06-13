@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner ela-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base lg:w-9/12">

    <div class="pt-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>ELA</b></h1>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <ul class="flex flex-col justify-between gap-4">
                <li class="flex items-start">
                    <p>La esclerosis lateral amiotrofica (Ela) o enfermedad de Lou Gehrig en honor al beisbolista profesional norteamericano que la presentó, es una enfermedad neurológica progresiva donde se afectan las neuronas motoras del cerebro y la médula espinal. El síntoma principal es la debilidad de los músculos de los brazos y piernas, respiratorios y del habla. La mayoría de las veces existen otros síntomas que preceden a la falta de fuerza como los calambres y las fasciculaciones (contracciones involuntarias de las fibras de los músculos). También puede haber atrofia o adelgazamiento de los músculos y aumento del tono muscular y de los reflejos.</p>
                </li>
                <li>
                    <p>Se desconoce la causa de esta enfermedad y un porcentaje muy bajo del 5 al 10% es hereditario. No existe cura para esta patología pero existen tratamientos para enlentecer la progresión de la misma. Actualmente se encuentran en fase de investigación algunos tratamientos promisorios.</p>
                </li>
            </ul>
        </div>
    </div>

</section>

@endsection 