@extends('layouts.plantilla')

@section('contenido')

<style>
    .arrow {
    border: solid white;
    border-width: 0 2px 2px 0;
  }

    nav * {
        color: white!important;
    }

    .breyna-heart {
        fill:rgba(255, 255, 255,0);
        stroke: #FFF;
    }

    .logo-text {
    fill: #FFF;
    }

    @keyframes dash {
    to {
      stroke-dashoffset: 0;
      fill:rgba(255, 255, 255,1);
      stroke:rgba(255, 255, 255,0)
    }
  }

  .grupo-medico-container {
        max-width: 17rem;
        height: 23rem;
  }

  .splide__pagination {
            bottom: -3rem!important;
        }

        .splide {
            cursor: pointer;
        }

  .splide__pagination__page {
            border: 2px solid #014494!important;
            background: transparent!important;
        }

        .splide__pagination__page.is-active {
            background: #014494!important;
        }

  @media (max-width: 799px) {
      nav {
          background-color: transparent!important;
      }

        .grupo-medico-container {
        max-width: 25rem;
        height: auto;
        }

        .splide__slide {
            display: flex;
            justify-content: center
        }

        .splide__pagination {
            bottom: -3rem!important;
        }

  }
</style>
<section class="min-h-screen hero-bg overflow-hidden flex justify-center items-center bg-center relative">
    <div class="text-center text-white">
        <h1 class="text-3xl lg:text-4xl breyna-hero-h1 w-11/12 mx-auto lg:w-7/12">
            Centro de salud con especialistas en Neurología, Cardiología y Prevención de enfermedad vascular e investigación clínica
        </h1>
        <h3 class="mt-6 text-3xl lg:text-xl">Fundado por el Dr. Conrado Estol</h3>
    </div>
    <div class="trama hidden lg:block h-80 bottom-0 left-0"></div>
</section>

<div class="-mt-20 lg:px-20 px-10">
    <div class="py-8 px-12 bg-white full-rounded w-full shadow-md mx-auto rounded-md lg:text-base text-2xl">
        <h3 class="lg:text-xl breyna-text-blue">Nuestra <span class="text-4xl lg:text-3xl breyna-text-bold">misión</span></h3>
        <p class="lg:text-2xl text-gray-500 mt-2 ">Mejorar la salud cardiovascular de los pacientes aplicando el concepto de la medicina basada en la evidencia, conocimientos de vanguardia, tecnología moderna y educación permanente</p>
    </div>
</div>

<section class="py-12 lg:px-20 px-10 lg:mt-12 relative">
    <div class="flex flex-col justify-center items-center lg:text-base text-2xl">
        <h2 class="lg:text-2xl mx-auto breyna-text-blue">Nuestros <span class="text-4xl lg:text-4xl breyna-text-bold">servicios</span></h2>
        <div class="flex w-full flex-col lg:flex-row justify-between items-stretch gap-12 mt-8">
            <a 
            href="/neurologia" 
            class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
            x-data=" { hover: false }"
            x-on:mouseover="hover = true"
            x-on:mouseout="hover = false"
            :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
            >
                    <div class="w-12 mr-4">
                        {{-- <img src="imgs/icons/neurologia.svg" alt=""> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 62" xml:space="preserve"><g class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' " ><path d="M9.5 16.9c.5.6 1.3.9 1.8 1 .8.2 1.6.2 1.7.2.5 0 .9-.4 1-.9 0-.5-.4-.9-.9-.9-.6 0-1.2-.1-1.7-.3.9-.7 1.4-1.7 1.6-2.4.1-.5-.2-1-.7-1.1s-1 .2-1.2.6c-.1.2-.7 2.2-2.9 2-2.4-.1-3.2 2.2-3.4 3.5 0 .5.3.9.9 1h.1c.5 0 .9-.4.9-.8 0-.1.2-1.8 1.3-1.7.6-.1 1-.1 1.5-.2zM10.9 28.7c.1-.2.4-.3.6-.4 2.6-.7 3.3-3.1 3.3-4.3 0-.5-.4-.9-.9-.9s-.9.4-1 .9c0 .1 0 1.8-1.5 2.4-.9-.7-1.4-1.5-1.5-1.5-.3-.4-.9-.5-1.3-.3-.4.3-.6.8-.3 1.3 0 0 .5.7 1.3 1.4-.3.3-.4.5-.5.8-.5 1.3.4 2.6.5 2.8.2.3.5.4.8.4.2 0 .4 0 .5-.2.4-.3.6-.8.3-1.3-.1-.1-.4-.8-.3-1.1zM39.4 18.8h.2c.4 0 .8-.3.9-.7 0-.1.2-1.3-.5-2.2-.3-.4-1-.8-2.2-.7-2.2.1-2.8-1.8-2.9-2-.1-.5-.7-.8-1.2-.6-.5.1-.8.6-.7 1.1.2.7.7 1.6 1.6 2.4-.4.2-1 .3-1.7.3-.5 0-.9.4-.9.9s.4.9 1 .9c0 0 .8 0 1.7-.2.5-.1 1.3-.4 1.8-1h1.4c.3 0 .5 0 .6.1s.1.5.1.7c0 .4.3.9.8 1zM37.6 25.9c.3-.4.2-1-.3-1.3-.4-.3-1-.2-1.3.3 0 0-.6.8-1.5 1.5C33.1 25.7 33 24 33 24c0-.5-.4-.9-1-.9-.5 0-1 .4-1 .9 0 1.2.7 3.6 3.3 4.3.2.1.5.2.6.3.1.3-.2 1-.4 1.3-.3.4-.2 1 .2 1.3.2.1.4.2.5.2.3 0 .6-.1.8-.4.1-.2 1.1-1.6.6-2.9-.1-.2-.2-.5-.5-.7 1-.8 1.5-1.5 1.5-1.5zM44.5 45.1h-1.9v-1.8c0-.8-.7-1.4-1.5-1.4H38c-.8 0-1.5.6-1.5 1.4v1.8h-1.9c-.8 0-1.5.6-1.5 1.4v3c0 .8.7 1.4 1.5 1.4h1.9v1.8c0 .8.7 1.4 1.5 1.4h3.1c.8 0 1.5-.6 1.5-1.4V51h1.9c.8 0 1.5-.6 1.5-1.4v-3c0-.8-.6-1.5-1.5-1.5zm-.4 4h-1.9c-.8 0-1.5.6-1.5 1.4v1.8h-2.3v-1.8c0-.8-.7-1.4-1.5-1.4H35V47h1.9c.8 0 1.5-.6 1.5-1.4v-1.8h2.3v1.8c0 .8.7 1.4 1.5 1.4h1.9v2.1z"/><path d="M39.6 38.2c-1.4 0-2.6.3-3.8.7l.3-1.8C40 36.3 43 33 42.9 29c0-1.2-.3-2.3-.8-3.3 0-.1 0-.2.1-.3 2.4-1.5 3.8-4.1 3.8-6.8 0-3.4-2.1-6.4-5.5-7.6-.1 0-.2-.1-.2-.3V10c0-1.1-.3-2.2-.8-3.2-.2-.4-.8-.6-1.3-.4s-.6.8-.4 1.2c.4.7.6 1.5.6 2.3v.5c-.1.9.5 1.8 1.4 2.1 2.6 1 4.3 3.3 4.3 5.9 0 2.1-1.1 4.1-3 5.3-.9.6-1.2 1.6-.8 2.5.4.8.6 1.7.6 2.6 0 3.5-2.9 6.3-6.5 6.4-1.4 0-2.7-.3-3.9-1.1-.6-.4-1.3-.5-1.9-.2-.4.1-.9.2-1.3.2-1.9-.1-3.4-1.6-3.4-3.5v-7.7c2.9-.3 4.3-2.9 4.7-4.4.1-.5-.2-1-.7-1.1s-1 .2-1.1.7c0 0-.2.9-.8 1.6-.6.8-1.2 1.2-2 1.3v-7.6h.1c.9 0 1.9-.3 2.7-1.3.9-1.1 2.7-1 2.7-1 .5 0 1-.3 1-.8s-.3-.9-.9-1c-.1 0-2.9-.2-4.4 1.7-.4.9-.9 1-1.2 1V5.3c0-1.9 1.6-3.5 3.5-3.5 1.5 0 2.8.8 3.3 2.1.4.9 1.2 1.4 2.2 1.3h.4c.7 0 1.5.2 2.1.5.5.2 1 0 1.3-.4s0-1-.5-1.2c-.9-.4-1.9-.6-2.9-.6h-.5c-.1 0-.2 0-.3-.1-.8-2-2.8-3.3-5.1-3.3C25.7 0 24 .9 23 2.4 22 .9 20.4 0 18.5 0c-2.3 0-4.2 1.3-5.1 3.3 0 .1-.1.1-.3.1h-.5c-3.9 0-7 3-7 6.7v.7c0 .1-.1.2-.2.3C2.1 12.3 0 15.3 0 18.7c0 2.7 1.4 5.3 3.8 6.8.1.1.1.2.1.3-.5 1-.8 2.2-.8 3.3 0 3.9 2.9 7.3 6.8 8.1.4 1.4.5 2.9.3 4.4 0 .5.3.9.8 1h.1c.5 0 .9-.3.9-.8.2-1.5.1-3-.2-4.4.7 0 1.5-.1 2.2-.3l.9 3.2c.5 1.7 2.1 2.9 4 3 .2 1.1.3 2.3.4 3.5h-2.5c-1.5 0-2.8-.6-3.7-1.7-.3-.4-.9-.5-1.3-.2s-.5.9-.2 1.3c1.3 1.6 3.2 2.4 5.2 2.4h2.6c.1 3.9-.3 8-1.3 12.4-.1.5.2 1 .7 1.1s1-.2 1.1-.7c1.4-6.5 1.7-12.5.9-18.1H25c-.8 5.6-.5 11.5.9 18.1.1.4.5.7.9.7h.2c.5-.1.8-.6.7-1.1-.9-4.4-1.4-8.5-1.3-12.4h2.7c.2 5.2 4.8 9.4 10.3 9.4 1.7 0 3.5-.4 5-1.2.5-.2.6-.8.4-1.2-.3-.4-.8-.6-1.3-.4-1.2.7-2.6 1-4.1 1-4.6 0-8.4-3.6-8.4-8s3.8-8 8.4-8 8.4 3.6 8.4 8c0 1.8-.6 3.5-1.7 4.9-.3.4-.2 1 .2 1.3s1 .2 1.3-.2c1.4-1.7 2.1-3.8 2.1-6 .2-5.6-4.4-10-10.1-10zM5 29.1c0-.9.2-1.8.6-2.6.4-.9.1-2-.8-2.5-1.8-1.2-3-3.2-3-5.3 0-2.6 1.7-5 4.3-5.9.9-.3 1.5-1.2 1.4-2.1v-.5c0-2.7 2.3-4.9 5.1-4.9h.4c1 .1 1.8-.4 2.2-1.3.5-1.3 1.8-2.1 3.3-2.1 1.9 0 3.5 1.6 3.5 3.5v3.1h-.1c-.5 0-.8-.2-1.1-.6-1.4-1.8-3.7-1-4.8-.4-.4.3-.6.8-.3 1.2.3.4.9.5 1.3.2 0 0 1.6-.9 2.3-.1.8 1 1.8 1.3 2.7 1.3h.1v18.5c-2.2-.2-2.8-1.7-2.9-1.9-.2-.5-.7-.7-1.2-.6-.5.2-.8.7-.6 1.1.4 1.1 1.8 3 4.7 3.1v.4c0 1.9-1.5 3.4-3.4 3.5-.4 0-.9-.1-1.3-.2-.6-.2-1.4-.1-1.9.2-1.1.7-2.5 1.1-3.9 1.1-3.7.1-6.6-2.8-6.6-6.2zm14.2 12.3c-1.1 0-2.1-.7-2.4-1.7l-1-3.4.6-.3c.1 0 .2-.1.2 0 .6.2 1.3.3 2 .3 1.8 0 3.4-1 4.3-2.3 1 1.4 2.5 2.3 4.3 2.3.7 0 1.4-.1 2-.3h.2l.6.3-1 3.4c-.3 1-1.3 1.7-2.4 1.7h-7.4zm10.2 5.3h-2.7c.1-1.2.2-2.3.4-3.5 1.9-.1 3.5-1.3 4-3L32 37c.7.2 1.4.3 2.2.3-.2.9-.3 1.7-.3 2.6-2.5 1.5-4.1 4-4.5 6.8z"/></g></svg>
                    </div>
                    <div>
                        <h4 class="lg:text-lg"><b>Neurología</b></h4>
                        <div class="flex items-center mt-3 gap-1">
                            <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                            <div class="w-3 h-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                            </div>
                        </div>
                    </div>
            </a>
            <a 
            href="/cardiologia" 
            class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
            x-data=" { hover: false }"
            x-on:mouseover="hover = true"
            x-on:mouseout="hover = false"
            :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
            >
                    <div class="w-12 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 35.5 48" xml:space="preserve"><g class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' "><path d="M32.6 29c.2.3.5.6.9.6.2 0 .2 0 .4-.1.5-.2.7-.7.5-1.2-.2-.5-.7-.7-1.2-.5-.6.2-.9.7-.6 1.2z"/><path d="M35.2 31.7c-.1-.5-.6-.8-1.1-.7-.5.1-.9.6-.8 1.1.2 1.3.2 2.7.2 4-.2 3-1.9 5.8-4.5 7.6l-.7.4c-1.2.9-2.8 1.3-4.4 1.3-.6 0-1.2-.1-1.7-.2l-2.6-.6c-5-1.1-9.5-3.7-12.7-7.4-1.4-1.7-2.1-2.8-2.6-4 0-.1.1-.2 0-.4 0 0-.5-4.1 5.4-6.6 4.1-1.7 5.9-4.7 6.6-6.1 4.4.6 6 1.7 6.1 1.9.2.2.6.3.9.2.1 0 .2 0 .2-.1 3.1-.6 6.3 1 7.6 3.7.2.5.8.7 1.2.5.5-.2.7-.7.5-1.2-.7-1.6-2-2.9-3.6-3.8.2-.6.3-1.2.3-1.8v-.4h.7c.5 0 1-.4 1-.9s-.4-.9-1-.9h-1.1c-.2-.6-.6-1.2-1-1.7l.4-.4c.4-.3.4-.9 0-1.3-.4-.3-1-.3-1.3 0l-.5.5c-.7-.5-1.7-.8-2.7-1 1.2-1 3-1.4 5-1.4.2 0 .5-.1.7-.2.2-.2.3-.4.3-.7V7.7c0-.5-.4-.9-.9-.9-.2 0-2-.2-4.3.2-1.1-2-2.6-3.5-4.2-4.2l.7-1c.3-.4.2-1-.2-1.2-.4-.2-1.1-.2-1.3.2l-1 1.4c-.4-.1-.8-.1-1.2-.1h-.7V.9c0-.5-.4-.9-1-.9-.5 0-1 .4-1 .9v1.6c-.9.3-1.7.9-2.6 1.6-.6.5-1.1 1.2-1.6 1.8-.3-.7-1.1-1.2-2-1.2H6.2C5 4.7 4 5.6 4 6.8v9.5c-.5.3-1 .7-1.4 1.2C.3 19.9-.1 22.8 0 25c0 2.4.7 4.9 1.6 6.5.2.3.2.7.4 1.1.7 1.7 1.2 3.5 3.5 5.9 3.5 4 8.4 6.8 13.8 8l2.6.6c.7.2 1.4.2 2.2.2 2 0 3.9-.6 5.6-1.7l.7-.4c3.1-2.2 5-5.5 5.2-9.1-.1-1.5-.1-3-.4-4.4zM23.4 20.4c-.4-.2-1.1-.7-2.1-1 .1-.9.3-2.6 1.2-4.1.2 0 .5-.1.7-.1 2.5 0 4.6 1.9 4.6 4.3 0 .3-.1.7-.2 1.1-1.3-.2-2.8-.4-4.2-.2zm4.9-11.8v1.7c-2.4.1-4.4.8-5.9 2.2-2.2 2-2.7 4.7-3 6.3-.9-.2-2-.4-3.3-.6-.3-.2-.6-.5-.9-.7v-.1c0-2.5.8-4.5 2.5-6 3.2-2.6 8.5-2.8 10.6-2.8zM17.5 3.8c.5 0 1 .1 1.4.2 1.6.4 2.9 1.6 4 3.2-2.2.5-4.7 1.3-6.6 3-1.8 1.6-2.8 3.6-3.1 6.1-.8-.5-1.6-.8-2.3-1.1V9.8s0-.1.1-.1c1.1-3.5 3.7-5.9 6.5-5.9zM5.9 6.9c0-.2.1-.2.2-.2h2.7c.2 0 .2.1.2.2v8H8c-.7 0-1.5.2-2.2.4.1 0 .1-8.4.1-8.4zM4 18.8c1.2-1.3 2.7-2.1 4.2-2.2 1.9-.1 4.2.9 6.4 2.9-.6 1.1-2.2 3.7-5.6 5.1-3.7 1.6-5.3 3.8-6 5.3v.1c-1.2-2.5-1.9-8.1 1-11.2z"/><path d="M12.3 37.2c-.4-.3-1-.2-1.3.1-.3.4-.2 1 .2 1.3 2.7 2.1 5.7 3.6 9.1 4.3h.2c.4 0 .8-.2.9-.7.1-.5-.2-1-.7-1.1-3.2-.6-6-2-8.4-3.9zM8.5 34.8c-.4.3-.4.9-.1 1.3.2.2.5.3.7.3.2 0 .4-.1.6-.2.4-.3.5-.9.1-1.3-.2-.3-.9-.4-1.3-.1z"/></g></svg>
                        
                    </div>
                    <div>
                        <h4 class="lg:text-lg"><b>Cardiología</b></h4>
                        <div class="flex items-center mt-3 gap-1">
                            <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                            <div class="w-3 h-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path class="transition-all" :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                            </div>
                        </div>
                    </div>
            </a>
            <a 
            href="/prevencion-enfermedad-vascular" 
            class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
            x-data=" { hover: false }"
            x-on:mouseover="hover = true"
            x-on:mouseout="hover = false"
            :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
            >
                    <div class="w-14 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 56 60" xml:space="preserve"><path class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' " d="M19.2 44.8c.5 0 .9-.4.8-.9-.1-2.2 0-4.3.5-6.4.9-4 2.7-6.7 4.2-9.1 1.7-2.6 3.1-4.9 3.5-8.3.6-6.1-2.6-12.7-9.8-19.7-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2 6.7 6.6 9.8 12.8 9.3 18.3-.2 2.1-.9 3.7-1.9 5.3-2.8-.3-5.4.1-7.6 1.2-.4.2-.8.4-1.2.7-2.7-2.7-6-4.6-9.5-5.5-1.1-.4-2.3-.6-3.4-.7-1.4-.1-2.8 1-2.9 2.4-.1 1.4 1 2.7 2.5 2.8.9.1 1.7.2 2.6.4 2.5.6 4.9 2 6.9 3.9-.4.3-.8.6-1.2.8-1.7.9-3.7 1.1-6.1.6-1.5-.3-2.9.8-3.1 2.2-.2 1.4.8 2.7 2.2 3 1.7.3 3.3.4 4.8.2 0 2.3-.5 4.5-1.4 6.5-.4.8-.8 1.5-1.3 2.3-.7 1-.6 2.5.2 3.4 1.1 1.2 3.1 1 4.1-.3.7-1 1.3-2 1.8-3 1.5-3.1 2.1-6.7 1.9-10.4 1.5-.9 2.4-1.9 3.2-2.7.8-.8 1.4-1.5 2.4-2 .6-.3 1.2-.5 2-.6-1 1.9-2 4-2.6 6.7-.5 2.2-.7 4.5-.5 6.9-.1.4.3.8.8.8zm-.6-15.4c-1.3.6-2.1 1.5-2.9 2.3-.8.9-1.7 1.8-3.2 2.6-.3.3-.5.7-.5 1.1.3 3.5-.3 7-1.7 10-.5 1-1 1.9-1.6 2.8-.3.5-1 .5-1.4.1-.2-.3-.3-.8 0-1.2.6-.8 1.1-1.6 1.5-2.5 1.1-2.4 1.7-5.2 1.6-8 0-.3-.2-.6-.4-.8-.2-.2-.6-.3-.9-.2-1.5.2-3.2.2-5-.1-.5-.1-.8-.5-.8-1 .1-.5.5-.8 1-.7 2.8.5 5.2.2 7.3-.8 1-.5 1.6-1.1 2.1-1.5.4-.4.4-1.1 0-1.6-2.3-2.4-5.2-4.1-8.2-4.9-.9-.2-1.9-.4-2.9-.5-.4 0-.8-.4-.8-.8-.1-.5.5-1 1-1 1.1.1 2.1.2 3.2.5 3.3.8 6.5 2.7 9 5.4.4.4 1 .5 1.5.1.4-.3.9-.6 1.4-.9 1.7-.8 3.6-1.2 5.7-1.1-.1.2-.2.4-.4.5-.2.4-.5.8-.8 1.2-1.3.2-2.6.5-3.8 1zm35.9.5c-1.5-1-3.9-2.1-7.1-2.2-1.7 0-3.4.3-5.1.9-.4-1.2-.8-2.4-1.1-3.6-.6-2.4-1-4.9-1.2-7.3 1.2.8 2.3 1.7 4.4 2.4.5.1 1-.1 1.1-.6.1-.5-.1-1-.6-1.1-1.7-.5-2.8-1.3-3.8-2-.2-.2-.5-.4-.7-.5-.4-.3-1-.3-1.5-.1-.5.3-.7.8-.7 1.3.2 2.8.6 5.7 1.3 8.4.4 1.5.9 3.1 1.4 4.6.2.5.7.7 1.2.5 1.6-.7 3.4-1.1 5.2-1.1 2.8.1 4.9 1.1 6.2 1.9.4.3.6.8.3 1.2-.3.4-.8.5-1.2.3-1.1-.7-2.9-1.6-5.3-1.6-1.4 0-2.7.2-4 .7-.4.1-.6.4-.8.8-.1.4-.1.8 0 1.1.8 1.6 1.7 3.2 2.7 4.7.3.4.2 1-.2 1.2-.4.3-1 .2-1.3-.2-1.6-2.5-2.9-5.1-4-7.8-.2-.4-.6-.8-1-.8-.5-.1-1 .1-1.3.4-1.5 1.7-2.7 3.5-3.5 5.5-.3.9-.6 1.9-.8 2.8-.1.5-.5.8-1 .7-.5-.1-.8-.6-.7-1.1.2-1.1.5-2.1.9-3.1 1.1-3 3.1-5.7 5.7-7.8.3-.2.4-.6.3-.9-.2-.6-.3-1.1-.5-1.7-.9-3.3-1.3-6.8-1.4-10.2 0-.4-.2-.7-.5-1-.3-.3-.7-.4-1-.4-.8.1-1.6.2-2.5.5-.1-.6-.2-1.1-.4-1.7 2.3-.7 4.6-.7 6.5-.1.6.2 1.3-.1 1.6-.6.9-1.4 2-2.6 3.4-3.5 2.3-1.5 4.6-1.9 6.2-2 .5 0 .9.4 1 .8 0 .5-.4.9-.8.9-1.3 0-3.3.4-5.3 1.7-1 .7-1.9 1.6-2.6 2.6-.4.6-.3 1.5.3 1.9 1 .7 1.9 1.4 3.3 1.8 2.2.7 4.6.5 7.3-.5.5-.2 1 .1 1.1.5.1.4-.1.9-.6 1.1-1.6.6-3.2.9-4.6 1-.5 0-.9.4-.8.9 0 .5.4.8.9.8 1.7-.1 3.4-.5 5.2-1.1 1.4-.5 2.1-2 1.6-3.3-.5-1.4-2.1-2.1-3.4-1.6-2.3.9-4.4 1-6.1.5-1-.3-1.7-.8-2.5-1.3.6-.7 1.2-1.4 2-1.9 1.6-1.1 3.3-1.4 4.4-1.4 1.4 0 2.6-1.3 2.5-2.7-.1-1.4-1.3-2.6-2.8-2.5-1.8.1-4.4.5-7.1 2.3-1.4 1-2.7 2.3-3.7 3.7-2.3-.6-4.7-.6-7.3.2C30.2 7.7 27.9 4 24.6.3c-.3-.4-.9-.4-1.2-.1-.4.3-.4.9-.1 1.3C29 8 31.6 14.3 30.9 20.3c-.4 4-2.2 6.8-3.9 9.4-1.6 2.5-3.1 4.8-3.9 8.3-1.4 6.4.4 13.7 5.5 21.6.3.4.8.5 1.2.3.4-.3.5-.8.3-1.2-4.8-7.5-6.6-14.3-5.3-20.3.7-3.2 2.1-5.4 3.6-7.7 1.8-2.8 3.7-5.8 4.2-10.2.1-1.3.1-2.6 0-3.9.7-.2 1.3-.4 2-.4.1 3.5.6 6.9 1.5 10.2l.3 1.2c-2.6 2.3-4.6 5.1-5.7 8.2-.4 1.1-.7 2.2-.9 3.4-.3 1.4.7 2.9 2.1 3.1 1.4.3 2.8-.7 3.1-2.1.2-.9.4-1.7.7-2.5.6-1.6 1.5-3.1 2.7-4.5 1.1 2.6 2.4 5.1 4 7.5.8 1.2 2.6 1.6 3.8.7 1.1-.8 1.4-2.4.6-3.6-.9-1.3-1.7-2.7-2.4-4.2.9-.3 1.9-.5 2.9-.5 2 0 3.5.8 4.4 1.4 1.2.8 2.9.4 3.7-.8.7-1.4.3-3-.9-3.8zM20.6 47.8c-.1-.5-.6-.8-1-.7-.5.1-.8.6-.7 1 .8 3.7 2.3 7.5 4.6 11.4.2.4.8.6 1.2.3.4-.2.6-.8.3-1.2-2.2-3.7-3.7-7.3-4.4-10.8z"/></svg>
                        
                    </div>
                    <div>
                        <h4 class="lg:text-lg"><b>Prevención de enfermedad vascular</b></h4>
                        <div class="flex items-center mt-3 gap-1">
                            <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                            <div class="w-3 h-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                            </div>
                        </div>
                    </div>
            </a>
        </div>
    </div>

    <div class="punteos1 lg:p-24 p-32 w-max absolute right-0 top-90"></div>

    <div class="mt-32 mb-24">
        <h2 class="lg:text-2xl text-3xl mx-auto breyna-text-blue mb-8">Conocé nuestro <span class="text-4xl"><b>grupo médico</b></span></h2>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <div class="splide px-10 lg:px-20">
        <div class="splide__track cursor-grab">
            <ul class="splide__list">
                <li class="splide__slide mx-auto">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="1">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/conrado.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Conrado J. Estol</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Neurología y Enfermedad Cerebrovascular</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="2">
                        <div class="mb-4 overflow-hidden bg-gray-300 rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/angelotti.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. María Florencia Angellotti</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Neurología y Medicina del Sueño</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="3">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/navarrete.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Analía de Navarrete</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Neurología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/garcia.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Constanza García Méndez</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Neurología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="5">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/taboada.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Romina Taboada</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Neurología</p>
                    </div>
                </li>
                {{-- aca va --}}
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="1">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/botto.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Fernando Botto</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Cardiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="3">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/colaso.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Patricia González Colaso</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Cardiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="3">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/cobo.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Augusto Lavalle Cobo</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Cardiología y Lípidos</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="2">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/romero.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Guadalupe Romero</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Cardiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="2">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="object-cover" src="imgs/grupo-medico/koretzky.jpeg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Martín Koretzky</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Cardiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden bg-gray-300 rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/eliane.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Eliane Sasovsky</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Cardiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/cordeu2.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Florencia Cordeu</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Clínica Médica</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="2">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/gut-medico.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Lucas Gutnisky</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Endocrinología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="2">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/sauane.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dra Nadia Mariana Sauane</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Especialista en Medicina Familiar</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/brunetta.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Valeria Brunetta</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Nutrición</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/jarast.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Osvaldo Jarast</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Medico Cardiólogo y Deportologo</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/aguilar.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Josefina González Aguilar</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Psicología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/gil.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Leticia Gil</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Psicología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/rattagan.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Josefina Rattagan M.</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Terapista ocupacional</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/guarriello.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>María Florencia Guarriello</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Fonoaudiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/davancens.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Agustina Davancens</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Fonoaudiología</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/bisheimer.jfif" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Julia Bisheimer</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Kinesiología y Fisiatría</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/graiz.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Claudia Graiz</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Kinesiología y Fisiatría</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/rourich.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>María Carla Rourich</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Kinesiología y Fisiatría</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/solari.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>Barbara Solari</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Kinesiología y Fisiatría</p>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grupo-medico-container overflow-hidden p-6 border border-gray-200 rounded-2xl" id="4">
                        <div class="mb-4 overflow-hidden rounded-2xl lg:h-60 h-96" id="medico-img">
                            <img class="h-full w-full object-cover" src="imgs/grupo-medico/scalone.jpg" alt="">
                        </div>
                        <h4 class="text-3xl lg:text-lg lg:leading-tight" id="nombre" style="max-width: 18ch"><b>María José Scalone</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-xl lg:text-sm breyna-text-gray mt-2 lg:mt-0">Licenciada en Kinesiología y Fisiatría</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            var splide = new Splide( '.splide', {
            rewind : true,
            perPage: 5,
            gap    : '1rem',
            breakpoints: {                
                800: {
                perPage: 1,
                gap    : '.7rem',
                }
            },
            } );

            splide.mount();
        } );
    </script>
    </div>
</section>

<section class="lg:px-20 px-10 hidden lg:block">
    <div class="text-center text-white py-8 px-12 full-rounded w-full shadow-md mx-auto rounded-md bg-gradient-to-r from-cyan-500 to-blue-500">
        <h3 class="text-xl">Ensayos <span class="text-2xl"><b>clínicos</b></span></h3>
        <p class="text-lg mx-auto lg:w-9/12">Gran red de médicos e investigadores derivadores asociados que cubren una extensa población con distintas patologías y ofrecen una completa gama de prestaciones.</p>
    </div>
</section>

{{-- <section class="lg:px-20 px-10 mt-28">
    <div>
        <h2 class="mx-auto breyna-text-blue mb-8 text-4xl breyna-text-bold text-4xl">Sponsors <span class="lg:text-2xl text-3xl ">con los que trabajamos</span></h2>
    </div>

    <div class="lg:flex w-full lg:justify-between lg:items-center grid grid-cols-3 grid-rows-2 gap-4 lg:gap-0 text-2xl">
        <div class="lg:block flex justify-center items-center text-center">
            
            <img src="imgs/index/sponsor-lilly.png" alt="">
        </div>
        <div class="lg:block flex justify-center items-center text-center">
            
            <img src="imgs/index/sponsor-ingelheim.png" alt="">
        </div>
        <div class="lg:block flex justify-center items-center text-center">
            
            <img src="imgs/index/sponsor-janssen.png" alt="">
        </div>
        <div class="lg:block flex justify-center items-center text-center">
            
            <img src="imgs/index/sponsor-abscience.png" alt="">
        </div>
        <div class="lg:block flex justify-center items-center text-center">
            
            <img src="imgs/index/sponsor-bayer.png" alt="">
        </div>
        <div class="lg:block flex justify-center items-center text-center">
            
            <img src="imgs/index/sponsor-bial.png" alt="">
        </div>
    </div>
</section> --}}

<section style="min-height: 44.2rem" class="relative px-10 lg:lg:px-20 px-10 pt-24 mb-32 maps-section text-3xl lg:text-base">
    <div class="flex relative flex-col lg:flex-row pt-24 lg:pt-0">
        <div class="w-max" style="z-index: 4">
            <h2 class="text-4xl lg:text-2xl mx-auto mb-8 breyna-text-blue">Contactate con <span class="text-4xl breyna-text-bold">nosotros</span></h2>
            <p class="text-2xl lg:text-lg mx-auto breyna-text-blue mb-4"><b>Av. Callao 875 3F, Buenos Aires, Argentina</b></p>
            <a target="_blank" href="https://goo.gl/maps/Re7QXbR5XQRXkzAS7"><span class="uppercase tracking-wide text-2xl lg:text-lg">Ver en google maps</span> <span class="icon-custom flechita-svg ml-2"></span></a>
        </div>
        <div x-data="{contacto: false}" class="z-50">
            @livewire('contact-form-map', ['email' => 'asistente@breyna.com'])
        </div>
    </div>
    <iframe class="map absolute top-0 left-0 min-h-screen" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1658.8612517906602!2d-58.393620982028175!3d-34.59888431099867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccabfb994e01d%3A0x3baaa25e0a012ed2!2sAv.%20Callao%20875%203f%2C%20C1055%20CABA!5e0!3m2!1sen!2sar!4v1644616486487!5m2!1sen!2sar" style="border:0; z-index: 1; width: 100%" allowfullscreen="" loading="lazy"></iframe>
</section>

@endsection