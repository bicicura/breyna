@extends('layouts.plantilla')

<style>
    nav ul li {
        color: black;
    }

    body {
        background-color: #f8f8fa;
    }

    .serv-li {
        border-bottom: .35rem solid #014494!important;
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%)!important;
    }

    .serv-li:hover {
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%)!important;
    }

    .nav-ul {
    border-top: .35rem solid #014494!important;
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.03)!important;
    } 
</style>

@section('contenido')

<section class="pt-24 pb-40 lg:px-20 px-10">
    <div class="py-20">
        <a class="text-gray-500 tracking-widest text-xl lg:text-base" href="/servicios"> <span class="icon-custom flechita-atras-svg mr-2"></span> SERVICIOS MÉDICOS</a>
        <h1 class="breyna-text-blue mt-6 text-3xl lg:text-2xl"><b>Cardiología</b></h1>
    </div>

    <div class="lg:grid lg:grid-cols-3 lg:grid-rows-3 gap-12 lg:gap-8 flex flex-col">
        @foreach ($cardiologia as $item)
            
        <a class="bg-white rounded-lg overflow-hidden" href="/servicios/{{$item['ruta']}}">
            <div style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);" class="flex w-max-xs h-full">
                    <img class="w-48 lg:w-32 object-cover" src="/imgs/servicios/cardio/{{$item['img']}}" alt="">
                    <div class="ml-8 lg:my-0 my-16 lg:ml-6 lg:px-6 lg:py-8 lg:block mr-6 lg:mr-0 justify-center flex-col mx-4">
                        <h2 class="text-3xl lg:text-base breyna-text-bold">{{$item['titulo']}}</h2>
                        <p class="mt-4 uppercase text-xl lg:text-base">Saber mas <span class="icon-custom flechita-svg ml-2"></p>
                    </div>
            </div>
        </a>
                    
        @endforeach
    </div>
</section>

@endsection