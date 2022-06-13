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
</style>

@section('contenido')

<section class="pt-24 pb-40 lg:px-20 px-10">
    <div class="py-20">
        <a class="text-gray-500 tracking-widest text-xl lg:text-base" href="/ensayos-clinicos"> <span class="icon-custom flechita-atras-svg mr-2"></span> Ensayos clínicos por STAT-Research</a>
        <h1 class="breyna-text-blue mt-6 text-3xl lg:text-2xl"><b>Sponsors y Cros con los que trabajamos</b></h1>
    </div>

    <h2 class="breyna-text-blue mt-8 mb-10 text-3xl lg:text-2xl"><b>Sponsors</b></h2>
    <div class="grid lg:grid-cols-6 grid-cols-3 grid-rows-12 gap-8" style="grid-auto-rows: 1fr;">
        @foreach ($sponsors as $item)
            
       <div class="mx-auto flex items-center justify-center">
           <img src="/imgs/ensayos-clinicos/sponsors/{{$item['img']}}" alt="">
       </div>
                    
        @endforeach
    </div>

    <h2 class="breyna-text-blue mt-24 mb-10 text-3xl lg:text-2xl"><b>CROs</b></h2>
    <div class="grid lg:grid-cols-6 grid-cols-3 grid-rows-12 gap-8" style="grid-auto-rows: 1fr;">
        @foreach ($cros as $item)
            
       <div class="mx-auto flex items-center justify-center">
           <img src="/imgs/ensayos-clinicos/sponsors/{{$item['img']}}" alt="">
       </div>
                    
        @endforeach
    </div>
</section>

@endsection