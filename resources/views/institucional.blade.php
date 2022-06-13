@extends('layouts.plantilla')

<style>
    @media (min-width:800px) {
    nav ul li {
        color: black
    }

    .inst-li {
        border-bottom: .35rem solid #014494;
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%);
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.03);
    }
    }
</style>

@section('contenido')

<section class="flex flex-col-reverse lg:flex-row lg:min-h-screen pt-24 lg:pt-40 pb-20 lg:px-20 px-10 relative">
    <div class="absolute overflow-hidden min-h-screen top-28 right-0 p-40">
        <div class="trama trama2"></div>
    </div>
    <div class="lg:w-6/12">
        <h1 class="text-4xl mt-12 mb-10 lg:mt-0 lg:text-2xl breyna-text-blue lg:mb-6 lg:pl-12 breyna-text-bold">BREYNA fue fundado en 1996 por el Dr. Conrado Estol, neurólogo especializado en ACV</h1>
        <p class="text-gray-500 text-3xl lg:text-lg lg:pl-12">Somos un grupo de profesionales que abarcamos todas las áreas de la neurología, cardiología y prevención de la enfermedad vascular.<br>Usamos la misma historia clínica electrónica para centralizar la información sobre el paciente.<br>Trabajando en equipo logramos la evaluación más efectiva con los mejores resultados en cada paciente.</p>
        <div class="mt-20 lg:mt-12 lg:text-base text-3xl">
            <p class="mb-6 breyna-text-bold">Es por esta sistemática de trabajo que:</p>
            <div class="flex flex-col lg:grid lg:grid-cols-2 lg:grid-rows-3 gap-6">
                <div class="flex gap-4 w-full">
                    <div class="breyna-bg-blue-100 w-20 h-12 flex justify-center items-center">
                        <img class="w-6" src="imgs/icons/diagnostico.svg" alt="">
                    </div>
                    <p class="breyna-text-black">Cambiamos el DIAGNÓSTICO en casi 30% de las consultas</p>
                </div>
                <div class="flex gap-4 w-full">
                    <div class="breyna-bg-blue-100 w-20 h-12 flex justify-center items-center">
                        <img class="w-8" src="imgs/icons/corazon-inst.svg" alt="">
                    </div>
                    <p class="breyna-text-black">Cambiamos el tratamiento en casi 80% de los pacientes evaluados</p>
                </div>
                <div class="flex gap-4 w-full">
                    <div class="breyna-bg-blue-100 w-28 h-12 flex justify-center items-center">
                        <img class="w-6 mx-4" src="imgs/icons/tick.svg" alt="">
                    </div>
                    <p class="breyna-text-black">Logramos el diagnóstico acertado con una BAJA utilización de métodos diagnósticos</p>
                </div>
                <div class="flex gap-4 w-full">
                    <div class="breyna-bg-blue-100 w-12 h-12 flex justify-center items-center">
                        <img class="w-7" src="imgs/icons/bisturi.svg" alt="">
                    </div>
                    <p class="breyna-text-black">Tenemos una BAJA indicación de cirugías</p>
                </div>
                <div class="flex gap-4 w-full">
                    <div class="breyna-bg-blue-100 w-14 h-12 flex justify-center items-center">
                        <img class="w-7" src="imgs/icons/terapeutico.svg" alt="">
                    </div>
                    <p class="breyna-text-black">Tenemos un ALTO índice de éxito terapéutico</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-6/12 flex justify-end mr-8">
        <div class="drop-shadow-xl">
            <img src="imgs/institucional/conrado.png" alt="">
        </div>
    </div>
</section>

<section class="lg:p-20 p-10 breyna-bg-linear-gradient text-white rounded-lg">
    <div class="flex flex-col lg:flex-row lg:gap-32 w-full">
        <div class="lg:w-5/12 w-full">
            <div class="">
                <img src="imgs/institucional/consultorio.png" alt="">
            </div>
        </div>
        <div class="w-full lg:w-5/12 text-2xl lg:text-base mt-20 lg:mt-0">
            <h2 class="text-3xl lg:text-xl mb-6 breyna-text-bold">¿Por qué elegirnos?</h2>
            <ul class="flex flex-col justify-between gap-8">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="imgs/icons/list-tick.svg" alt="">
                    <p>Tenemos tres décadas de experiencia médica con formación, participación, trabajo conjunto, investigación, publicaciones e interacción científica permanente con los centros Neurológicos y Cardiovasculares más reconocidos del mundo.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="imgs/icons/list-tick.svg" alt="">
                    <p>Hemos creado un programa específico y único, basado en evidencia científica, para ayudar a detectar y prevenir las condiciones que causan las Enfermedades vasculares del Cerebro y del Corazón.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="imgs/icons/list-tick.svg" alt="">
                    <p>Somos un grupo multidisciplinario de especialistas en Neurología, Neurología Vascular, Medicina del Sueño, Cardiología, Clínica Médica, Diabetes, Endocrinología, Nutrición, Deportología, Ultrasonido, Rehabilitación Cognitiva neurológica, Patologías de la Columna Cervical y Lumbar y Fonoaudiología, que trabaja en forma conjunta.</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="imgs/icons/list-tick.svg" alt="">
                    <p>La relación médico paciente es el eje en nuestra atención, priorizando la necesidad de cada paciente.</p>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="mt-20">
        <h2 class="text-2xl"><b>Contacto</b></h2>
        
        <div class="flex w-full flex-col lg:flex-row justify-between items-stretch gap-12 mt-8">
            <article class="flex cursor-pointer w-full items-center py-12 pl-20 border-2 rounded-xl shadow-md">
                    <div class="w-20 lg:w-12 mr-4">
                        <img src="imgs/icons/wsp.svg" alt="">
                    </div>
                    <div>
                        <h4 class="text-3xl lg:text-lg breyna-text-bold">Whatsapp</h4>
                        <p class="text-2xl lg:text-sm mt-3">+54 9 11 5332 3196</p>
                    </div>
            </article>
            <article class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl border-2 shadow-md">
                    <div class="w-20 lg:w-10 mr-4">
                        <img src="imgs/icons/tel.svg" alt="">
                    </div>
                    <div class="text-white">
                        <h4 class="text-3xl lg:text-lg breyna-text-bold">Teléfono</h4>
                        <p class="text-2xl lg:text-sm mt-3">4816 6733</p>
                    </div>
            </article>
            <article class="flex cursor-pointer w-full lg:items-center py-8 pl-20 rounded-xl border-2 shadow-md">
                    <div class="w-16 mr-4">
                        <img src="imgs/icons/msj.svg" alt="">
                    </div>
                    <div class="flex flex-col gap-4">
                        <h4 style="width: 20ch; line-height: 1" class="text-3xl lg:text-lg breyna-text-bold">Consultas</h4>
                        <div class="text-2xl lg:text-sm">
                            <span>Asistencial</span>
                            <p class="underline">asistente@breyna.com</p>
                        </div>
                        <div class="text-2xl lg:text-sm">
                            <span>Investigaciones</span>
                            <p class="underline">info@stat–research.com</p>
                        </div>
                    </div>
            </article>
        </div>
    </div>
</section>

<section class="lg:p-20 mt-32 lg:mt-0 pb-40 lg:pb-40 flex flex-col gap-6 mx-10 lg:mx-0">
    <img class="mx-auto" src="imgs/icons/quotes.svg" alt="">
    <h2 class="mx-auto breyna-text-blue text-4xl text-center font-bold lg:w-6/12 lg:max-w-3xl breyna-text-bold">Muchos se dedican a destapar las arterias; nosotros nos dedicamos a que no se tapen</h2>
    <p class="breyna-text-blue text-center uppercase tracking-widest text-xl lg:text-base">Dr. Conrado Estol, director y fundador</p>
</section>

@endsection