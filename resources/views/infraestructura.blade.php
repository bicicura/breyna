@extends('layouts.plantilla')

@section('contenido')

<style>
    nav ul li {
        color: black
    }

    .ensayo-li {
        border-bottom: .35rem solid #014494;
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%);
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.10);
    }
</style>

<div class="px-10 lg:px-20 pt-40 pb-12">
    <a class="text-gray-500 tracking-widest uppercase text-xl lg:text-base" href="/ensayos-clinicos"> <span class="icon-custom flechita-atras-svg mr-2"></span> Ensayos clínicos por STAT-Research</a>
    <h1 class="breyna-text-blue mt-6 text-3xl lg:text-2xl"><b>Infraestructura</b></h1>
</div>

<section class="pb-40 px-10 lg:px-20 lg:w-7/12 text-3xl lg:text-base">
    <div class="flex w-full rounded-lg my-4">
        <div class="w-full">
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Superficie de 200m2</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>6 consultorios de evaluación médica.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Consultorio de extracción y procesamiento de muestras sanguíneas.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Area de infusión.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Área administrativa.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Recepción de pacientes.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Habitación de almacenamiento controlado de drogas de estudios.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Espacio de guardado con acceso restringido para historias clínicas y files del estudio </p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Archivo de documentación postestudio. </p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Salidas de emergencia.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Aula de conferencias.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Acceso controlado.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Equipo electrógeno (7.5Kva) de emergencia.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Server con back up semanal.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Wifi</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Impresora con scanner </p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Fax las 24 hs con línea directa</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Heladeras y freezers (-20 ºC) con control digital de temperatura y termómetros calibrados</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Centrífuga ambiente</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Incubadora ambiente</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Electrocardiógrafos</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Desfibrilador</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Carro de paro</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Chequeo y calibración rutinario y documentado de equipamiento  (balanzas, centrífugas, esfigmomanómetros, electrocardiógrafos).</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Convenio con servicio de emergencia</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Convenio con sanatorio Güemes para referencia de pacientes en situación de emergencia</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Personal de IT disponible 7x24 hs</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Más de 25 POEs con actualización periódica</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>6 heladeras</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Personal entrenado de acuerdo a GCP y IATA</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full">
            <p class="mb-6 lg:text-xl"><b>Capacidad del laboratorio</b></p>
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Almacenamiento de muestras de estudios (hasta -20cº).</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Personal altamente entrenado (técnico de laboratorio, bioquímico).</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Procedimientos de laboratorio certificados y POEs internos.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Envío de muestras biológicas (Certificación IATA).</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Registros de temperatura ambiente y refrigerada.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="lg:w-9/12">
            <p class="mb-6 lg:text-xl"><b>Servicios</b></p>
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Capacidad para completar ensayos clínicos fase II-IV.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Unidades de investigación completamente equipadas con personal entrenado de acuerdo a GCP.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Gran red de médicos e investigadores derivadores asociados que cubren una extensa población con distintas patologías y ofrecen una completa gama de prestaciones.</p>
                </li>
            </ul>
        </div>
    </div>

</section>

@endsection