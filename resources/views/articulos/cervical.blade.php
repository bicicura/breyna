 @extends('layouts.plantilla')

<style>
    nav ul li { color: black;}
    body {background-color: #F8F8FA;}
    nav {background-color: white;}
</style>

<link rel="stylesheet" href="/css/articulos.css?v=6">

@section('contenido')

<div class="article-banner cervical-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="py-12 mt-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/neurologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Neurología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Dolor y Alteraciones de Columna Cervical y Lumbar</b></h1>
    </div>

    <div class="flex lg:w-7/12 rounded-lg mb-12">
        <div class="w-full">
            <p><b>¿Qué es la Hernia de Disco?</b></p>
            <p class="my-4">Popularmente conocida como <b>dolor de columna, lumbago, ciática, artrosis o espondilosis.</b></p>
            <p>Es el desplazamiento de la estructura (disco) que separa las diferentes vértebras de la columna. Cuando el disco se desplaza puede “pellizcar” uno de los nervios que salen de la columna a su nivel causando el cuadro clínico característico para ese nervio.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6"><b>¿Cómo se manifiesta la Hernia de Disco?</b></p>
            <ul class="flex flex-col justify-between gap-6 lg:gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Dolor</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Debilidad</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Adormecimiento en los brazos y piernas</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg mb-12 lg:w-7/12">
        <div class="w-full">
            <p><b>¿Qué es la estenosis o estrechez del canal?</b></p>
            <p class="my-4">Un proceso en el cual se disminuye el espacio donde se ubica la médula espinal y los nervios que salen de la médula. Los síntomas pueden ser similares a los causados por una hernia de disco.</p>
        </div>
    </div>

<div class="flex flex-col gap-4 bg-white p-12 shadow-md">
    <p class="text-4xl lg:text-2xl"><b>Para tener en cuenta</b></p>
    <ul class="flex flex-col justify-between lg:gap-2 gap-6">
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>El <b>interrogatorio, examen neurológico</b> y en ocasiones una <b>Resonancia Magnética</b> son suficientes para hacer el diagnóstico correcto (inusualmente se necesita un electromiograma).</p>
        </li>
        <li class="flex items-start gap-4">
            <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
            <p>La <b>MAYORIA</b> de las hernias de disco y estrechez del canal en la zona cervical y lumbar <b>mejoran espontáneamente</b>. Cuando la compresión de la médula espinal produce un cuadro neurológico severo tiene tratamiento quirúrgico, pero esto es excepcional. El <b>90% de los pacientes responden a un tratamiento combinado</b> de <b>medicación</b> anti-inflamatoria y un programa personalizado de <b>rehabilitación</b>.</p>
        </li>
    </ul>
</div>

</section>

@endsection 