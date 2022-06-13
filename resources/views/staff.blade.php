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

    .parent {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto repeat(1, 1fr);
        grid-column-gap: 1.8rem;
        grid-row-gap: 1.8rem;
    }

    @media(max-width:799px) {
        .parent {
            display: flex;
            flex-direction: column
        }

        .movidita {
        min-height: 34rem
    }
    }

    .parent2 {
        grid-template-rows: auto repeat(1, 1fr);
    }

    .div1 { grid-area: 1 / 1 / 2 / 4; }

    .div2 { grid-area: 1 / 1 / 2 / 3; }
</style>

<div class="px-10 lg:px-20 pt-40 pb-12">
    <a class="text-gray-500 tracking-widest uppercase text-xl lg:text-base" href="/ensayos-clinicos"> <span class="icon-custom flechita-atras-svg mr-2"></span> Ensayos clínicos por STAT-Research</a>
    <h1 class="breyna-text-blue mt-6 text-3xl lg:text-2xl"><b>Nuestro Staff</b></h1>
</div>

<section class="flex flex-col gap-24 mb-40 mx-10 lg:mx-0 text-3xl lg:text-base">

    <div class="parent w-full lg:w-6/12 mx-auto">
        <div class="p-4 text-center div1" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Study Coordinators</b></p>
        </div>
        <div class="grupo-medico-container lg:order-3 order-2 overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/carpentero.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Silvina Carpentero</b></p>
        </div>
        <div class="grupo-medico-container lg:order-4 order-3 overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/potap.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Melisa Potap</b></p>
        </div>
        <div class="grupo-medico-container order-2 lg:order-4 overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/colombatti.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Nadia Colombatti</b></p>
        </div>
    </div>

    {{-- <div class="parent w-full grid grid-cols-3 grid-rows-2 parent2 lg:w-6/12 mx-auto gap-8">
        <div class="p-4 text-center order-1" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Dermatología</b></p>
        </div>
        <div class="p-4 text-center order-3 lg:order-2 mt-12 lg:mt-0" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Hepatología</b></p>
        </div>
        <div class="order-5 p-4 text-center lg:order-3 mt-12 lg:mt-0" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Infectología</b></p>
        </div>
        <div class="grupo-medico-container lg:order-4 overflow-hidden order-2 p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/marini.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Mariano Marini PI</b></p>
        </div>
        <div class="order-4 grupo-medico-container lg:order-5 overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/ballerga.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Esteban González Ballerga</b></p>
        </div>
        <div class="order-6 grupo-medico-container overflow-hidden lg:order-6 p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/latal.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Verónica Latal</b></p>
        </div>
    </div> --}}

    {{-- <div class="parent w-full lg:w-6/12 mx-auto">
        <div class="p-4 text-center div1" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Gastroenterología</b></p>
        </div>
        <div class="grupo-medico-container overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/linares.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Maria Eugenia Linares PI</b></p>
        </div>
        <div class="grupo-medico-container overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/quintero.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Olga Quintero</b></p>
        </div>
        <div class="grupo-medico-container overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/wonaga.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Andrés Wonaga</b></p>
        </div>
    </div> --}}

    <div class="parent w-full lg:w-6/12 mx-auto">
        <div class="p-4 text-center order-1 lg:flex lg:items-center justify-center" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Manager</b></p>
        </div>
        <div class="p-4 text-center order-3 lg:order-2 mt-12 lg:mt-0" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Responsable de Laboratorio y asistente de investigación</b></p>
        </div>
        <div class="p-4 text-center order-5 lg:order-3 mt-12 lg:mt-0 lg:flex lg:items-center justify-center" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Área Administrativa</b></p>
        </div>
        <div class="grupo-medico-container order-2 lg:order-4 overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/ocampo.jpeg" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Celina Ocampo</b></p>
        </div>
        <div class="grupo-medico-container order-4 overflow-hidden lg:order-5 p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/aguirre.jpeg" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Valentina Aguirre </b></p>
        </div>
        <div class="grupo-medico-container order-4 overflow-hidden lg:order-5 p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/alisedo.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Josefina Perez Alisedo</b></p>
        </div>
    </div>

    <div class="parent w-full lg:w-6/12 mx-auto">
        <div class="p-4 text-center order-1" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Recepcionista </b></p>
        </div>
        <div class="p-4 text-center order-3 lg:order-2 mt-12 lg:mt-0" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Recepcionista</b></p>
        </div>
        <div class="p-4 text-center order-5 lg:order-3 mt-12 lg:mt-0 opacity-0 hidden lg:block" style="background-color: rgba(82, 196, 218, .15)">
            <p><b>Recepcionista </b></p>
        </div>
        <div class="grupo-medico-container order-2 lg:order-4 overflow-hidden p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/chapar.jpeg" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Susana Chapar</b></p>
        </div>
        <div class="grupo-medico-container overflow-hidden order-6 lg:order-6 p-6 border-2 border-gray-200 rounded-2xl">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/dardot.jpeg" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Veronica Dardot</b></p>
        </div>
        
        <div class="grupo-medico-container overflow-hidden order-6 lg:order-6 p-6 border-2 border-gray-200 rounded-2xl opacity-0 hidden lg:block">
            <div class="mb-4 overflow-hidden rounded-2xl movidita" id="medico-img" style="height: 15rem">
                <img class="h-full w-full object-cover" src="/imgs/ensayos-clinicos/ubeira.jfif" alt="">
            </div>
            <p class="text-center text-3xl lg:text-xl"><b>Veronica Dardot</b></p>
        </div>
    </div>

</section>


@endsection