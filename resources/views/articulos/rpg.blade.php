@extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner rpg-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>RPG  “Re-educación Postural Global”</b></h1>
    </div>

    <div class="flex w-full rounded-lg mb-12">
        <div class="w-full">
            <p>Esta técnica se basa en lograr una elongación (con estiramiento) isométrica de toda la cadena tónica anti-gravitacional de los músculos anteriores y posteriores del tronco, desde el cuello hasta las piernas. La terapista identifica los grupos musculares más afectados para trabajar sobre ellos en la posición de acostado, sentado y parado. También se trabaja en fortalecer los grupos musculares debilitados.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6 lg:text-2xl"><b>¡ATENCIÓN!</b></p>
            <ul class="flex flex-col justify-between lg:gap-4 gap-6">
                <li class="flex items-start">
                    <p>Como con todo tratamiento, usted debe asegurarse que quien lo trate tenga la formación y conocimiento óptimos. La popularidad del método ha hecho que no todos los kinesiólogos que lo ofrecen tengan la preparación necesaria para obtener resultados positivos y es por esto que en nuestra clínica de columna vemos muchos pacientes que han hecho RPG sin resultados favorables.<br>El RPG fue creado por el terapista francés P. Souchard.</p>
                </li>
                <li>
                    <p>En nuestro país, la técnica tuvo una popularidad limitada hasta el año 2005 cuando publicamos en la revista “Neurology” (la más reconocida internacionalmente) el segundo trabajo en el que mostramos una efectividad cercana al 90% en la recuperación de los pacientes afectados.</p>
                </li>
                <li>
                    <p>Estol CJ. Improvement of Severely Symptomatic Chronic Cervical and Lumbo Sacral Stenotic and Disc Disease with a Specific Spinal Rehabilitation Method. Neurology 2005;64:405-406.</p>
                </li>
                <li>
                    <p>Un porcentaje importante de pacientes tenían turno para una cirugía que pudieron evitar gracias al tratamiento.</p>
                </li>
                <li>
                    <p>La publicación tuvo un impacto tan importante que el congreso Americano de Neurología nos pidió dar una conferencia de prensa (esto se pide a un pequeño porcentaje de los trabajos presentados en un congreso médico) que fue replicada en una importante cantidad de noticieros y prensa gráfica de los EE.UU y el mundo (ver La Nación, mayo  de 2005).</p>
                </li>
                <li>
                    <p>El propio Souchard ha citado nuestro trabajo en su libro sobre RPG por ser el primero que analizó con el método científico la potencial efectividad de su tratamiento.</p>
                </li>
            </ul>
        </div>
    </div>


</section>

@endsection 