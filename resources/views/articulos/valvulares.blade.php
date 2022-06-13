@extends('layouts.plantilla')

<link rel="stylesheet" href="/css/articulos.css?v=6">

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

    nav ul li ul li {
        color: #014494!important;
    }
</style>


@section('contenido')

<div class="article-banner cardio6-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Enfermedades valvulares</b></h1>
    </div>

    <div class="flex flex-col gap-12 lg:w-7/12">
        <div>
            <p class="mb-4 breyna-text-water"><b>Valvulopatías</b></p>
            <p>Las valvulopatías son enfermedades que <b>impiden la apertura o el cierre correctos de una o varias válvulas del corazón</b>. Las valvulopatías que afectan a la válvula aórtica son las más importantes. Las válvulas cardiacas regulan el flujo de sangre entre las cavidades del corazón y su salida hacia las arterias principales. Estas estructuras desempeñan un papel fundamental en el funcionamiento del corazón. Las valvulopatías son enfermedades que afectan a estas estructuras, impidiendo su correcta apertura (estenosis valvular) o cierre (insuficiencia valvular). Las cuatro válvulas del corazón pueden verse afectadas, aunque las valvulopatías más importantes son las que afectan a la válvula aórtica o a la mitral.</p>
            <p><span class="underline">Diagnóstico</span>: La auscultación de un soplo cardiaco puede hacer sospechar la presencia de alguna valvulopatía, pero la prueba fundamental que lleva al diagnóstico es el Eco Doppler cardíaco color<br>Las valvulopatías pueden mantenerse durante muchos años sin dar ningún síntoma. Cuando ya está avanzada (estenosis o insuficiencia de grado severo) y comienzan a aparecer los síntomas, o cuando el corazón empieza a dar muestras de afectación secundaria a la valvulopatía, puede requerir un tratamiento quirúrgico.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p class="breyna-text-water"><b>Valvulopatías aórtica o Estenosis aórtica</b></p>
            <p><b>Afecta a la válvula aórtica y provoca su obstrucción. Esto dificulta el flujo de salida de la sangre desde el ventrículo izquierdo hacia la aorta. </b></p>
            <p><span class="underline font-bold">Causas</span>: Las causas más frecuentes son la afectación reumática o la degenerativa. También hay malformaciones congénitas de la válvula aórtica que provocan estenosis.</p>
            <p><span class="underline font-bold">Síntomas</span>: Los tres síntomas fundamentales que aparecen cuando la estenosis aórtica es severa son disnea (sensación de falta de aire), dolor torácico y síncope (pérdida del conocimiento). Estos síntomas se relacionan más cuando se realiza algún esfuerzo.</p>
            <p><span class="underline font-bold">Tratamiento</span>: Es la sustitución valvular por una prótesis metálica o biológica. También existe la posibilidad de implante de prótesis autoexpandibles dependiendo las características de cada paciente.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p class="breyna-text-water"><b>Insuficiencia aórtica</b></p>
            <p><b>Afecta a la válvula aórtica e impide su correcto cierre durante la diástole. Esto provoca el retorno de sangre hacia el corazón, provocando una sobrecarga de volumen.</b></p>
            <p><span class="underline font-bold">Causas</span>: Las causas más frecuentes son la afectación reumática, la degenerativa o la complicación de infecciones a dicho nivel (endocarditis).</p>
            <p><span class="underline font-bold">Síntomas</span>:  En general la sintomatología no es tan importante como en la estenosis y puede pasar desapercibida. Fundamentalmente aparece disnea, aunque también puede presentarse dolor torácico.</p>
            <p><span class="underline font-bold">Tratamiento</span>: Se realiza la sustitución valvular por una prótesis metálica o biológica.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p class="breyna-text-water"><b>Estenosis mitral</b></p>
            <p><b>Esta valvulopatía afecta a la válvula mitral y provoca una obstrucción en el flujo de sangre entre la aurícula izquierda y el ventrículo izquierdo.</b></p>
            <p><span class="underline font-bold">Causas</span>: Las causas más frecuentes son la afectación reumática y la degenerativa.</p>
            <p><span class="underline font-bold">Síntomas</span>:  Suele ocasionar sensación de disnea. Es frecuente también la aparición de arritmias como la fibrilación auricular.</p>
            <p><span class="underline font-bold">Tratamiento</span>: Normalmente se sustituye la válvula por una prótesis metálica o biológica. En algunos casos, se puede llegar a realizar una valvuloplastía.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p class="breyna-text-water"><b>Insuficiencia mitral</b></p>
            <p><b>Es la afectación de la válvula mitral que impide su correcto cierre. Provoca un retorno de la sangre en sístole desde el ventrículo izquierdo a la aurícula izquierda. Causa una sobrecarga de volumen en las cavidades izquierdas.</b></p>
            <p><span class="underline font-bold">Causas</span>: Las causas más frecuentes son la afectación reumática, degenerativa, el prolapso valvular mitral o la dilatación del anillo mitral.</p>
            <p><span class="underline font-bold">Síntomas</span>: Suele ocasionar sensación de disnea. Es frecuente también la aparición de arritmias como la fibrilación auricular.</p>
            <p><span class="underline font-bold">Tratamiento</span>: Se trata mediante la sustitución valvular por prótesis metálica o biológica, o mediante una reparación valvular.</p>
            <p>Las válvulas del lado derecho del corazón (tricúspide y pulmonar) también se pueden afectar y provocar estenosis o insuficiencia. Son valvulopatías menos frecuentes y generalmente no precisan tratamiento quirúrgico. La estenosis pulmonar suele ser una enfermedad congénita, mientras que la insuficiencia tricúspide aparece normalmente asociada a valvulopatías del lado izquierdo del corazón</p>
        </div>

    </div>

</section>

@endsection 