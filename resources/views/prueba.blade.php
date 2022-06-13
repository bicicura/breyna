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

@livewireStyles

<div class="pt-40 min-h-screen">
    @livewire('contact-form')
</div>

@livewireScripts


@endsection