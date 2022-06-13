@extends('layouts.plantilla')

<style>
    nav ul li {
        color: black;
    }

    .nav-ul {
    border-top: .35rem solid #014494!important;
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.03)!important;
    }

    .maps-section::after {
    background: linear-gradient(180deg, rgba(255,255,255,1) 45%, rgba(0,0,0,0) 100%)!important;
}
</style>

@section('contenido')

<section class="relative px-10 lg:px-20 pt-40 pb-40 lg:pb-0 lg:mb-0 flex flex-col-reverse maps-section text-3xl lg:text-base min-h-screen">
    <div class="flex flex-col lg:grid lg:grid-cols-2 lg:static mx-auto lg:mt-0 mb-auto w-full lg:w-max h-fit gap-24 lg:gap-12 px-10 lg:px-0">
        <div style="z-index: 776" x-data="{showDerivar:false, loading:false}" class="flex justify-center relative items-center pt-36 lg:pt-0">
            <div x-on:click="showDerivar = true" class="flex relative justify-center flex-col items-center gap-4 bg-gray-100 rounded-xl w-full lg:w-max p-12 cursor-pointer shadow-md lg:bg-opacity-50 hover:bg-opacity-100 hover:bg-blue-100 ease-in-out duration-300">
                <img class="w-24" src="/imgs/ensayos-clinicos/derivar-01.svg" alt="">
                <div class="text-center">
                    <p class="font-bold lg:text-xl">Derivar Paciente</p>
                    <p class="text-gray-500 font-bold">Profesionales</p>
                </div>
            </div>
            @livewire('derivar-paciente-form')
        </div>
        <div x-data="{showPaciente:false, loading:false, contacto: true}" @keydown.escape.window = "showPaciente = false" class="flex justify-center items-center">
            <div style="z-index: 50" class="flex relative justify-center flex-col items-center gap-4 bg-gray-100 rounded-xl cursor-pointer shadow-md w-full lg:w-max p-12 lg:bg-opacity-50 hover:bg-opacity-100 hover:bg-green-100 ease-in-out duration-300" x-on:click="showPaciente = true">
                <img class="w-24" src="/imgs/ensayos-clinicos/paciente-01.svg" alt="">
                <div class="text-center">
                    <p class="font-bold lg:text-xl">Contactate con nosotros</p>
                    <p class="text-gray-500 font-bold">Pacientes</p>
                </div>
            </div>
            <div x-show="showPaciente" class="top-0 left-0 w-full min-h-screen fixed flex justify-center items-center realtive cursor-default" style="z-index: 778; display:none">
                <div class="relative px-10 lg:px-0 w-full lg:w-max">
                    <div class="absolute bg-gray-100 lg:-right-8 right-4 p-4 lg:-top-8 -top-12 cursor-pointer z-100 rounded-full shadow-md" x-on:click="showPaciente = false">
                        <span class="icon-custom close-gray-svg"></span>
                    </div>
                    @livewire('contact-form-map', ['email' => 'info@stat–research.com'])
                </div>
                <div class="absolute inset-0 m-auto bg-black opacity-70 -z-10"
                x-show="showPaciente"
                x-on:click="showPaciente = false"
                x-transition:enter.duration.300ms 
                x-transition:leave.duration.150ms></div>
            </div>
        </div>     
    </div>
    <div class="flex flex-col lg:flex-row relative border-2 border-green-500">
        <div class="lg:w-max" style="z-index: 4">
            <div>
                <a class="text-gray-500 uppercase tracking-widest text-xl lg:text-base" href="/ensayos-clinicos"> <span class="icon-custom flechita-atras-svg mr-2"></span> Ensayos clínicos por STAT-Research</a>
                <h1 class="breyna-text-blue text-3xl lg:text-2xl my-4"><b>Contactate con nosotros</b></h1>
                <p>Para derivar un paciente o solicitar más información utilice esta herramienta.</p>
            </div>
            <p class="text-2xl lg:text-lg mx-auto breyna-text-water my-4"><b>Av. Callao 875 3F, Buenos Aires, Argentina</b></p>
            <a target="_blank" href="https://goo.gl/maps/Re7QXbR5XQRXkzAS7"><span class="uppercase tracking-wide text-2xl lg:text-base">Ver en google maps</span> <span class="icon-custom flechita-svg ml-2"></span></a>
        </div>
    </div>
    <iframe class="map absolute top-0 left-0 h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1658.8612517906602!2d-58.393620982028175!3d-34.59888431099867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccabfb994e01d%3A0x3baaa25e0a012ed2!2sAv.%20Callao%20875%203f%2C%20C1055%20CABA!5e0!3m2!1sen!2sar!4v1644616486487!5m2!1sen!2sar" style="border:0; z-index: 1; width: 100%" allowfullscreen="" loading="lazy"></iframe>
</section>
@endsection