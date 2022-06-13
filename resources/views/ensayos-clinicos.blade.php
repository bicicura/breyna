@extends('layouts.plantilla')

@section('contenido')

<style>

    main {
        padding-top: .3rem;
    }

    .article-banner {
        background-image: url(../imgs/ensayos-clinicos/hero.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        z-index: 0;
    }

    .article-banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: var(--breyna-blue);
        opacity: 60%;
        pointer-events: none;
        mix-blend-mode: multiply;
        z-index:-1;
    }

    .grupo-medico-container * {
        pointer-events: none;
    }
    
    nav ul li {
        color: black
    }

    nav ul li ul li {
        color: white!important;
    }

    .ensayo-li {
        border-bottom: .35rem solid #014494;
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%);
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.10);
    }
</style>

<section class="w-full py-12"></section>

<div class="article-banner w-full py-36 text-center lg:block text-white">
    <div class="z-50">
        <h1 class="text-3xl mt-4"><b>Ensayos clínicos por STAT-Research</b></h1>
    </div>
</div>

<section class="px-10 lg:px-40 breyna-text-black text-3xl lg:text-base">

    <div class="py-12">
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Quienes somos</b></h1>
    </div>

    <div class="flex w-full rounded-lg">
        <div class="w-full lg:w-7/12">
            <p class="lg:text-base"><b>Nosotros</b></p>
            <p class="my-6 lg:text-base">Somos un Centro de investigación Clínica de carácter médico dedicado hace más de 17 años a proporcionar servicios de apoyo a instituciones de salud, biotecnología y a la industria farmacéutica. Nuestra sede está ubicada en Buenos Aires, Argentina.</p>
            <p class="lg:text-base">Fundado por el Dr. Conrado J. Estol, MD, Ph.D., FAAN, director científico, quien cuenta con más de 30 años de experiencia en ensayos clínicos.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg mt-8">
        <div class="w-full  lg:w-7/12">
            <p class="lg:text-base"><b>Misión</b></p>
            <p class="my-6 lg:text-base">Ser una organización médica y científica impulsada por los más altos niveles de calidad e integridad para mejorar la vida de las personas, proporcionando una amplia gama de servicios profesionales y clínicos a las instituciones farmacéuticas, biotecnológicas y sanitarias.</p>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12">
        <div class="w-full lg:text-base">
            <p class="mb-6"><b>Nuestros valores</b></p>
            <ul class="flex flex-col justify-between gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Comportamiento ético</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Respeto por los pacientes y sus familias</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Trabajo en equipo</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Comunicación abierta y honesta</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Responsabilidad y precaución en las decisiones médicas</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Formación continua</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Crecimiento constante e innovación</p>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <p>Compromiso con nuestro trabajo</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex w-full rounded-lg my-12 lg:text-base">
        <div class="w-full">
            <p class="mb-6"><b>Premios obtenidos</b></p>
            <ul class="flex flex-col justify-between gap-6 lg:gap-2">
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <div>
                        <p class="breyna-text-water">Año 2009</p>
                        <p>Data Quality Award, Estudio Warcef, Columbia University. Sponsored by NIH</p>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <div>
                        <p class="breyna-text-water">Año 2009</p>
                        <p>Top Recruitment Award, Estudio Warcef, Columbia University. Sponsored by NIH</p>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <div>
                        <p class="breyna-text-water">Año 2018</p>
                        <p>Site Appreciation Award, Syneos Health</p>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                    <div>
                        <p class="breyna-text-water">Méritos</p>
                        <p>- Miembro asociado Trintex</p>
                        <p>- Partnership Member Sanofi</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="pb-40 px-10 lg:px-20">
    <div class="flex flex-col lg:grid lg:grid-cols-3 lg:grid-rows-2 gap-12">
        <a 
        href="/areas-de-desarrollo" 
        class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
        x-data=" { hover: false }"
        x-on:mouseover="hover = true"
        x-on:mouseout="hover = false"
        :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
        >
            <div class="w-12 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 54 58" xml:space="preserve"><g class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' "><path d="M32.9 14c-5.1-1.9-10.5-1.3-14.7 1.6-4.2 2.9-6.7 7.7-6.7 12.7 0 2.5.6 5.1 1.8 7.3.6 1.1 1.2 2 1.9 2.9.3.4.7.7 1 1 .4.3.8.7 1 1 .2.2.3.5.4.9.3.7.6 2.1.9 3.4.3 1.5.7 2.9 1 3.8.3.8 1.3 3.2 4.1 3.2H30c1.8 0 3.3-1.1 3.9-2.8.4-1 .8-2.5 1.2-4 .4-1.4.7-2.9 1.1-3.7.1-.3.2-.5.4-.7.1-.1.2-.3.4-.4 4.4-4.4 6.1-9.1 5.2-14.6-.8-5.3-4.4-9.8-9.3-11.6zm2.7 24.7c-.2.2-.4.4-.6.7-.3.4-.4.8-.6 1.1-.4.9-.8 2.4-1.2 4-.4 1.5-.7 3-1.1 3.8v.1c-.3.8-1.1 1.4-1.9 1.4H28v-9.1l4.9-4.1c.4-.4.5-1 .1-1.5-.4-.4-1-.5-1.5-.1L27 38.9 22.4 35c-.4-.4-1.1-.3-1.5.1-.4.4-.3 1.1.1 1.5l4.9 4.1v9.1h-2.2c-.7 0-1.5-.2-2.2-1.9-.3-.7-.6-2.1-.9-3.4-.3-1.5-.7-2.9-1-3.8-.2-.4-.3-.8-.6-1.2-.4-.6-.9-1-1.4-1.4-.3-.3-.6-.5-.8-.8-.6-.7-1.2-1.6-1.7-2.5-1-1.9-1.6-4.1-1.6-6.3 0-4.4 2.2-8.5 5.8-11 2.3-1.6 4.9-2.4 7.6-2.4 1.7 0 3.5.3 5.2 1 4.2 1.6 7.2 5.4 8 10 .9 4.7-.5 8.6-4.5 12.6zM31.4 55h-8.8c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.8c.6 0 1-.5 1-1s-.4-1-1-1zM27 7.6c.6 0 1-.5 1-1V1c0-.6-.5-1-1-1-.6 0-1 .5-1 1v5.6c0 .6.4 1 1 1zM16 10.1c.2.3.5.5.9.5.2 0 .4 0 .5-.1.5-.3.7-.9.4-1.4l-3-5.2c-.3-.5-.9-.7-1.4-.4-.5.3-.7.9-.4 1.4l3 5.2zM3.7 14.9l5.2 3c.2.1.4.1.6.1.4 0 .7-.2.9-.5.3-.5.1-1.1-.4-1.4l-5.2-3c-.5-.3-1.1-.1-1.4.4-.3.5-.2 1.1.3 1.4zM7.6 27c0-.6-.5-1-1-1H1c-.6 0-1 .5-1 1 0 .6.5 1 1 1h5.6c.6 0 1-.4 1-1zM9 36.3l-5.2 3c-.5.3-.7.9-.4 1.4.2.3.5.5.9.5.2 0 .4 0 .5-.1l5.2-3c.5-.3.7-.9.4-1.4-.3-.6-.9-.7-1.4-.4zM36.8 10.5c.2.1.3.1.5.1.4 0 .7-.2.9-.5l3-5.1c.3-.5.1-1.1-.4-1.4-.5-.3-1.1-.1-1.4.4l-3.1 5.2c-.2.4 0 1.1.5 1.3zM44.7 18.2c.2 0 .3 0 .5-.1l5.3-2.9c.5-.3.7-.9.4-1.4-.3-.5-.9-.7-1.4-.4l-5.3 2.9c-.5.3-.7.9-.4 1.4.1.4.5.5.9.5zM53 26h-5.6c-.6 0-1 .5-1 1 0 .6.5 1 1 1H53c.6 0 1-.5 1-1 0-.6-.5-1-1-1zM50.2 39.3l-5.2-3c-.5-.3-1.1-.1-1.4.4-.3.5-.1 1.1.4 1.4l5.2 3c.2.1.3.1.5.1.4 0 .7-.2.9-.5.3-.5.1-1.1-.4-1.4z"/></g></svg>
            </div>
            <div>
                <h4 class="lg:text-lg"><b>Áreas de desarrollo</b></h4>
                <div class="flex items-center mt-3 gap-1">
                    <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                    <div class="w-3 h-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                    </div>
                </div>
            </div>
        </a>
        <a 
        href="/nuestro-staff" 
        class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
        x-data=" { hover: false }"
        x-on:mouseover="hover = true"
        x-on:mouseout="hover = false"
        :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
        >
            <div class="w-12 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 32" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-breyna-blue' " d="M11.7 20.1c-3.8 0-6.8-3.1-6.8-6.8 0-3.8 3.1-6.8 6.8-6.8 3.8 0 6.8 3.1 6.8 6.8.1 3.8-3 6.8-6.8 6.8zm0-11.6c-2.7 0-4.8 2.2-4.8 4.8s2.2 4.8 4.8 4.8 4.8-2.2 4.8-4.8-2.1-4.8-4.8-4.8zM1 31.8c-.6 0-1-.4-1-1v-.6C0 25.1 4.1 21 9.2 21h5.9c.5.1 1 .5.9 1.1s-.5 1-1.1.9H9.2c-4 0-7.2 3.2-7.2 7.2v.6c0 .6-.4 1-1 1zM40 32c-.6 0-1-.4-1-1v-3.4c0-2.6-1.3-4.9-3.5-6.3-1.3-.8-2.7-1.2-4.3-1.2h-5.5c-2.4 0-4.6 1.1-6.1 2.9-1.1 1.3-1.6 3-1.6 4.6V31c0 .6-.4 1-1 1s-1-.4-1-1v-3.4c0-2.2.7-4.2 2.1-5.9 1.9-2.3 4.7-3.7 7.7-3.7h5.5c1.9 0 3.7.5 5.3 1.6 2.8 1.8 4.4 4.8 4.4 8V31c0 .6-.4 1-1 1zM56 31.8c-.6 0-1-.4-1-1v-.6c0-4-3.2-7.2-7.2-7.2h-5.4c-.5 0-1-.4-1-1s.4-1 1-1h5.5c5.1 0 9.2 4.1 9.2 9.2v.6c-.1.6-.5 1-1.1 1zM45.3 20.1c-3.8 0-6.8-3.1-6.8-6.8 0-3.8 3.1-6.8 6.8-6.8s6.8 3.1 6.8 6.8c0 3.8-3.1 6.8-6.8 6.8zm0-11.6c-2.7 0-4.8 2.2-4.8 4.8s2.2 4.8 4.8 4.8 4.8-2.2 4.8-4.8-2.2-4.8-4.8-4.8zM28.5 17.2c-4.7 0-8.6-3.9-8.6-8.6 0-4.7 3.9-8.6 8.6-8.6 4.7 0 8.6 3.9 8.6 8.6 0 4.8-3.9 8.6-8.6 8.6zm0-15.2c-3.6 0-6.6 3-6.6 6.6 0 3.6 3 6.6 6.6 6.6 3.6 0 6.6-3 6.6-6.6 0-3.6-3-6.6-6.6-6.6z"/></svg>
            </div>
            <div>
                <h4 class="lg:text-lg"><b>Nuestro equipo</b></h4>
                <div class="flex items-center mt-3 gap-1">
                    <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                    <div class="w-3 h-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                    </div>
                </div>
            </div>
        </a>
        <a 
        href="/infraestructura" 
        class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
        x-data=" { hover: false }"
        x-on:mouseover="hover = true"
        x-on:mouseout="hover = false"
        :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
        >
            <div class="w-12 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 47" xml:space="preserve"><g :class="hover? 'fill-white' : 'fill-breyna-blue' "><path d="M45.9 22.4h-2.1v-2.1c0-5.4-2.1-10.5-5.9-14.4C34 2.1 28.9 0 23.5 0 19.7 0 16 1.1 12.8 3.1L5.7.1C5.5 0 5.3 0 5 0c-.2.1-.4.3-.5.5L.2 6.9c-.2.2-.2.4-.2.7 0 .2.1.5.3.7l4.4 4.4c-1 2.4-1.5 5-1.5 7.7v2.1H1.1c-.3 0-.6.1-.8.3s-.3.4-.3.7v22.4c0 .3.1.6.3.8.2.2.5.3.8.3H46c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8V23.5c0-.3-.1-.6-.3-.8-.3-.2-.6-.3-.9-.3zM2.4 7.3l3.3-4.9 5 2.1c-2.1 1.7-3.8 3.7-5.1 6L2.4 7.3zm2.9 13c0-4.8 1.9-9.4 5.3-12.8 3.4-3.4 8-5.3 12.8-5.3S32.9 4 36.3 7.5c3.4 3.4 5.3 8 5.3 12.8v2.1H5.3v-2.1zm-3.2 4.3h42.7v3.2H2.1v-3.2zm19.3 20.3v-5.3h4.3v5.3h-4.3zm6.4 0v-6.4c0-.3-.1-.6-.3-.8-.2-.2-.5-.3-.8-.3h-6.4c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8v6.4H2.1v-15h42.7v15h-17z"/><path d="M9.6 37.4H5.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.2-.2-.5-.3-.8-.3zM17.1 37.4h-4.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.3-.2-.5-.3-.8-.3zM9.6 33.1H5.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.2-.2-.5-.3-.8-.3zM17.1 33.1h-4.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.3-.2-.5-.3-.8-.3zM41.7 37.4h-4.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.3-.2-.6-.3-.8-.3zM34.2 37.4h-4.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.3-.2-.5-.3-.8-.3zM41.7 33.1h-4.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.3-.2-.6-.3-.8-.3zM34.2 33.1h-4.3c-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8 0 .3.1.6.3.8.2.2.5.3.8.3h4.3c.3 0 .6-.1.8-.3.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.3-.2-.5-.3-.8-.3z"/></g></svg>
            </div>
            <div>
                <h4 class="lg:text-lg"><b>Infraestructura</b></h4>
                <div class="flex items-center mt-3 gap-1">
                    <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                    <div class="w-3 h-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                    </div>
                </div>
            </div>
        </a>
        <a 
        href="/sponsors" 
        class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
        x-data=" { hover: false }"
        x-on:mouseover="hover = true"
        x-on:mouseout="hover = false"
        :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
        >
            <div class="w-12 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 48" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-breyna-blue' " d="M63.7 17.2 46.7.3c-.4-.4-1-.4-1.4 0l-6.2 6.1-1.1 1c-1.4 1.3-2.8 1.4-4.4 1.6-.9.1-1.8.2-2.9.5-.8.2-1.5.5-2.1.7L18.7.3c-.4-.4-1-.4-1.4 0L.3 17.2c-.4.4-.4 1 0 1.4l6.2 6.1c.2.2.4.3.7.3.3 0 .5-.1.7-.3l.7-.7 2.3 2.3c-.2.1-.4.3-.6.5l-.1.1c-.7.7-1.1 1.7-1.1 2.7 0 1 .4 2 1.1 2.7.7.7 1.7 1.1 2.7 1.1h.2v.2c0 1 .4 2 1.1 2.7.7.7 1.7 1.1 2.7 1.1h.2v.2c0 1 .4 2 1.1 2.7.7.7 1.7 1.1 2.7 1.1h.2v.2c0 1 .4 2 1.1 2.7.7.7 1.7 1.1 2.7 1.1 1 0 2-.4 2.7-1.1l.3-.3c.1-.1.3-.3.4-.5l3.4 3.4c.7.7 1.7 1.1 2.7 1.1 1 0 1.9-.4 2.7-1.1.8-.8 1.1-1.8 1.1-2.8h.2c1 0 1.9-.4 2.7-1.1.7-.7 1.1-1.6 1.1-2.6v-.2h.2c1 0 1.9-.4 2.7-1.1.8-.8 1.1-1.8 1.1-2.8h.2c1 0 1.9-.4 2.7-1.1 1.5-1.5 1.5-3.8 0-5.3l6.4-6.3 1 1c.2.2.4.3.7.3.3 0 .5-.1.7-.3l6.2-6.1c0-.3 0-1-.4-1.3zm-61.3.7L18 2.4l4.8 4.7L7.2 22.6l-4.8-4.7zm9.2 13c-.3-.3-.5-.8-.5-1.3s.2-.9.5-1.3l.1-.1c.3-.3.8-.5 1.3-.5s1 .2 1.3.5c.3.3.5.8.5 1.3s-.2.9-.5 1.3l-.1.1c-.7.7-1.9.7-2.6 0zm4 4c-.3-.3-.5-.8-.5-1.3s.2-.9.5-1.3l.1-.1 1.9-1.9c.4-.4.8-.5 1.3-.5s.9.2 1.3.5c.3.3.5.8.5 1.3s-.2.9-.5 1.3L18.1 35c-.7.6-1.8.6-2.5-.1zm4 4c-.3-.3-.5-.8-.5-1.3s.2-.9.5-1.3l1.3-1.3c.3-.3.8-.5 1.3-.5s1 .2 1.3.5c.7.7.7 1.9 0 2.6l-1 1-.3.3c-.7.7-1.9.7-2.6 0zm6.8 3.7-.3.3c-.7.7-1.9.7-2.6 0-.3-.3-.5-.8-.5-1.3s.2-.9.5-1.3l.3-.3c.4-.4.8-.5 1.3-.5s.9.2 1.3.5c.3.3.5.8.5 1.3.1.5-.1.9-.5 1.3zm20.9-8.7c-.7.7-1.8.7-2.5 0l-3.6-3.5c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l3.6 3.5c.7.7.7 1.8 0 2.5s-1.8.7-2.5 0l-3.6-3.5c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l3.6 3.5c.3.3.5.8.5 1.2 0 .5-.2.9-.5 1.2-.7.7-1.8.7-2.5 0l-3.6-3.5c-.2-.2-.5-.3-.7-.3-.3 0-.5.1-.7.3-.4.4-.4 1 0 1.4l3.6 3.5c.7.7.7 1.8 0 2.5s-1.8.7-2.5 0L29 41.4v-.1c0-1-.4-2-1.1-2.7-.6-.6-1.3-.9-2.1-1.1.4-1.3.2-2.8-.9-3.9-.6-.6-1.4-.9-2.2-1 .1-.4.2-.7.2-1.1 0-1-.4-2-1.1-2.7-1.4-1.3-3.5-1.5-5-.4-.2-.6-.5-1.2-1-1.7-.7-.7-1.7-1.1-2.6-1.1l-3.2-3 14.2-14 2.6 2.6c-1.6.9-2.6 2-3.8 3.2l-.8.8-1.2 1c-.7.7-1.1 1.7-1.1 2.7s.4 2 1.1 2.7c.7.7 1.7 1.1 2.7 1.1 1 0 2-.4 2.7-1.1l3.1-3.1c.8-.8 2-.2 4.6 1.3 1 .6 2.2 1.3 3.5 1.9l9.7 9.6c.7.8.7 1.9 0 2.6zm0-5.3-5.4-5.4c.9.2 1.8.3 2.7.3h.9c.6 0 1-.5.9-1.1 0-.5-.5-1-1.1-.9-4.2.3-7.5-1.7-10.2-3.3-2.6-1.5-5-3-7-1L25 20.3c-.4.3-.8.5-1.3.5s-1-.2-1.3-.5c-.4-.3-.5-.8-.5-1.3s.2-1 .5-1.3l1.2-1.2.8-.8c1.9-1.9 3.3-3.3 6.9-4.3.9-.2 1.7-.3 2.5-.4 1.8-.2 3.7-.4 5.6-2.1l.4-.4 13.9 13.8-6.4 6.3zm9.5-6-1-1L41.2 7.1 46 2.4l15.6 15.5-4.8 4.7z"/></svg>
            </div>
            <div>
                <h4 class="lg:text-lg"><b>Sponsors</b></h4>
                <div class="flex items-center mt-3 gap-1">
                    <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                    <div class="w-3 h-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                    </div>
                </div>
            </div>
        </a>
        <a 
        href="/contacto" 
        class="flex cursor-pointer w-full items-center py-12 pl-20 rounded-xl shadow-md lg:text-base text-2xl transition-all"
        x-data=" { hover: false }"
        x-on:mouseover="hover = true"
        x-on:mouseout="hover = false"
        :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
        >
            <div class="lg:w-12 w-max lmr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 47" width="47" height="47" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-breyna-blue' " d="M41.5 47H41c-7.1-.8-14-3.2-20-7.1-5.5-3.5-10.4-8.3-13.9-13.9C3.2 20.1.8 13.1 0 6c0-.8 0-1.5.3-2.2.2-.7.6-1.4 1.2-2C2 1.2 2.6.8 3.3.5 4 .2 4.7 0 5.5 0h6.8c1.3 0 2.6.5 3.6 1.3 1 .9 1.7 2.1 1.9 3.4.3 2.1.8 4.2 1.5 6.1.4 1 .5 2.1.2 3.1-.2 1-.7 2-1.5 2.7L15.8 19c3 5 7.2 9.2 12.2 12.1l2.3-2.3c.8-.7 1.7-1.3 2.7-1.5 1-.2 2.1-.1 3.1.2 2 .7 4 1.3 6.1 1.5 1.4.2 2.6.9 3.5 1.9.9 1 1.3 2.3 1.3 3.7v6.8c0 .8-.2 1.5-.5 2.2-.3.7-.8 1.3-1.3 1.9s-1.2.9-2 1.2c-.5.2-1.1.3-1.7.3zM12.4 2c-.1 0-.1 0 0 0H5.5c-.5 0-1 .1-1.4.3-.5.2-.8.5-1.2.8s-.6.8-.7 1.3c-.2.5-.2.9-.2 1.4.7 6.8 3.1 13.4 6.8 19.2 3.4 5.3 8 9.9 13.3 13.2 5.7 3.7 12.3 6 19.1 6.8.5 0 1 0 1.4-.2.5-.2.9-.4 1.3-.7.4-.3.6-.7.8-1.2.2-.5.3-.9.3-1.4v-6.8c0-.9-.3-1.7-.8-2.4-.6-.7-1.3-1.1-2.2-1.2-2.2-.3-4.4-.8-6.6-1.6-.6-.2-1.3-.3-2-.1-.7.1-1.3.5-1.7.9l-2.9 2.9c-.3.3-.8.4-1.2.2-5.8-3.3-10.6-8.1-14-13.9-.2-.4-.2-.9.2-1.2l2.9-2.9c.5-.5.8-1.1.9-1.7.1-.7.1-1.3-.1-2-.8-2.1-1.3-4.3-1.6-6.6-.1-.8-.5-1.6-1.2-2.2-.7-.6-1.5-.9-2.3-.9z"/></svg>
            </div>
            <div>
                <h4 class="lg:text-lg"><b>Contacto</b></h4>
                <div class="flex items-center mt-3 gap-1">
                    <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                    <div class="w-3 h-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
@endsection