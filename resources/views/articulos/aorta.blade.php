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

<div class="article-banner cardio8-banner w-full py-40"></div>
<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Enfermedades de la aorta y arterias miembros inferiores</b></h1>
    </div>

    <div class="flex flex-col gap-6 lg:w-7/12">
        
        
        <p>Igual que las arterias coronarias y otras arterias del organismo, <b>las arterias de los miembros inferiores tambien sufren del acúmulo de grasa en sus paredes en forma de placas o ateromas (aterosclerosis)</b>. De esta manera, con el paso del tiempo van obstruyéndose poco a poco hasta llegar a taparse por completo.</p>
        <p>En este caso, los predisponentes son los mismos, es decir, <b>el tabaquismo, la presión y el colesterol altos, la diabetes, el exceso de peso y el sedentarismo</b>. Cuando las obstrucciones son severas (por encima del 70% de la luz de la arteria) empiezan a dar síntomas tales como dolores o calambres. Según el lugar de la obstrucción, los mismos pueden localizarse en los glúteos, en los muslos o en las piernas. Al principio, estos síntomas se producen al caminar y calman con el reposo, por eso se denominan “claudicación intermitente”.</p>
        <p>Además, es posible que el paciente sienta frialdad de los dedos, que a veces se ponen azulados. En el exámen físico, el médico puede detectar, además, que los pulsos de las piernas se van perdiendo o desaparecen.</p>

        <div class="flex flex-col gap-6 mt-6">
            <p ><b>¿Cómo se trata?</b></p>
            <p>A diferencia de otros territorios arteriales, <b>no es necesario realizar una búsqueda obsesiva de obstrucciones arteriales en las piernas</b>, excepto que el paciente relate síntomas, o que el médico encuentre alteraciones significativas. Cuando no los hay, no se ha demostrado que destapar las arterias o ponerles un bypass mejore los resultados del tratamiento médico con remedios y medidas generales.</p>
            <p>En los casos que sí hay sintomas o signos de “isquemia” (la sangre con oxígeno no llega bien), la realización de un <b>ecodoppler</b> color de las piernas suele ser suficiente para evaluar el estado arterial. Si es necesario avanzar más aún en el diagnóstico, puede solicitarse un cateterismo o arteriografía invasiva.</p>
            <p>Como dijimos, <b>el tratamiento con medicamentos es muy bueno</b>. Básicamente, hay que dejar de fumar, bajar el colesterol y la presión arterial, comer sano, hacer ejercicio, y controlar todos los factores de riesgo que corresponda.</p>
            <p>Cuando hay síntomas que el tratamiento médico no puede controlar, puede indicarse una angioplastia de la arteria obstruida, que se realiza mediante catéteres, o bien una cirugía de bypass de la pierna. Ambos procedimientos suelen ser muy efectivos. Posteriormente, el paciente deberá continuar cuidando los predisponentes ya mencionados.</p>
        </div>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-md mt-8">
        <p class="breyna-text-water lg:text-2xl mb-4"><b>¡IMPORTANTE!</b></p>
        <p><b>La gran mayoría de pacientes que sufren de esta enfermedad en las piernas, también sufren de aterosclerosis en las arterias del corazón (arterias coronarias) o del cuello (carótidas), que son las que realmente pueden originar complicaciones muy graves como el infarto de miocardio o el accidente cerebrovascular. Por este motivo, es necesario realizar una evaluación profunda de esos sectores también, y cuidarlos seriamente como describimos en otras notas.</b></p>
    </div>

</section>

@endsection