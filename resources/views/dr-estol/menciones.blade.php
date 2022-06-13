@extends('layouts.plantilla')

<style>
    nav ul li {
        color: black;
    }

    body {
        background-color: #F8F8FA;
    }

    nav {
        background-color: white;
    }
</style>

@section('contenido')

<section class="lg:px-40 px-10 pt-28 pb-40 breyna-text-black lg:w-8/12 text-3xl lg:text-base">

    <div class="py-12">
        <a class="text-gray-500 tracking-widest uppercase text-xl lg:text-base" href="/dr-estol"> <span class="icon-custom flechita-atras-svg mr-2"></span> Dr. Conrado Estol</a>
        <h1 class="uppercase breyna-text-blue mt-4 mb-6 text-3xl lg:text-2xl"><b>Menciones</b></h1>
        <p>El Dr. Conrado Estol ha sido destacado como personalidad en 3 libros:</p>
    </div>

    <div class="flex white w-full flex-col gap-6">
        <div class="w-full flex flex-col gap-2">
            <p class="text-3xl lg:text-2xl breyna-text-water">2006</p>
            <p class="text-2xl lg:text-base">Biografía del Dr. Estol en el libro <i>“Los últimos 50 años de la medicina argentina y sus protagonistas”.</i> M Baron, Ed. Perfil.</p>
        </div>

        <div class="w-full flex flex-col gap-2">
            <p class="text-3xl lg:text-2xl breyna-text-water">2007</p>
            <p class="text-2xl lg:text-base">Biografía del Dr. Estol en el libro <i>“La educación de los que influyen”</i>. Luciana Vázquez, Ed. Sudamericana.</p>
        </div>

        <div class="w-full flex flex-col gap-2">
            <p class="text-3xl lg:text-2xl breyna-text-water">2009</p>
            <p class="text-2xl lg:text-base">Biografía del Dr. Estol en <i>“Who’s who in Medicine and Healthcare”</i> (Quién es Quién en Medicina y en Salud), 7th Edition.</p>
        </div>

        <div class="w-full flex flex-col gap-2">
            <p class="text-3xl lg:text-2xl breyna-text-water">2020</p>
            <p class="text-2xl lg:text-base">Conrado Estol entrevistado en el programa “Hablemos de otra cosa” de Pablo Sirvén; por en canal “LN+” (La Nación +)<br><a target="_blank" href="https://www.youtube.com/watch?v=8CwgBU8Gnho&ab_channel=LANACION" class="breyna-text-blue cursor-pointer">Podés ver el video haciendo click aquí » </a></p>
        </div>

        <div class="w-full flex flex-col gap-2">
            <p class="text-3xl lg:text-2xl breyna-text-water">2020</p>
            <p class="text-2xl lg:text-base">Nota en Clarín “Detrás del barbijo. Conrado Estol, el “Doctor Tapabocas” que dejó muda a la OMS por el coronavirus” por la periodista Emilia Vexler en la sección “Personajes”.<br> <a target="_blank" href="https://www.clarin.com/sociedad/conrado-estol-doctor-tapabocas-dejo-muda-oms_0_AA6ATcNnh.html" class="breyna-text-blue cursor-pointer">Podés leer la nota haciendo click aquí »</a></p>
        </div>

    </div>
</section>

@endsection