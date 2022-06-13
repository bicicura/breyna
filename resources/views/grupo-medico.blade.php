@extends('layouts.plantilla')

@section('contenido')

<style>
    main {
        padding-top: .3rem;
    }

    .article-banner {
        background-image: url(../imgs/grupo-medico/hero-gm.jpg);
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
        background-color: var(--breyna-gray);
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

    .grupo-medico-li {
        border-bottom: .35rem solid #014494;
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%);
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.10);
    }

    @media (min-width: 800px) {
        .height-mio {
            min-height: 25rem;
        }
    }
</style>

<section class="w-full py-12"></section>

<div class="article-banner w-full py-36 text-center text-white">
    <div class="z-50">
        <h4 class="text-lg tracking-widest">EQUIPO BREYNA</h4>
        <h1 class="text-3xl mt-4"><b>¡Conocé nuestro grupo médico!</b></h1>
    </div>
</div>

<x-grupo-medico />

@endsection