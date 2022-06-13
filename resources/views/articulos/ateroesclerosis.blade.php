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

<div class="article-banner cardio5-banner w-full py-40" style="background-position: 100% 20%"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Enfermedad Coronaria, Angina de pecho y Ateroesclerosis</b></h1>
    </div>

    <div class="flex flex-col gap-12 lg:w-7/12">
        <div>
            <p class="mb-4"><b>¿Qué es la Aterosclerosis?</b></p>
            <p>Aterosclerosis es el <b>depósito de grasa en las paredes de las arterias que se produce con el paso del tiempo</b>, especialmente en las personas que tienen factores de riesgo, tales como presión arterial alta, colesterol alto, diabetes, tabaquismo, sedentarismo, sobrepeso, estrés y antecedentes familiares.<br>Los primeros y muy pequeños depósitos de colesterol en las paredes arteriales empiezan en la adolescencia, e inclusive, en la infancia. A partir de allí, la cantidad de factores de riesgo que acumule cada individuo hará que esa primer “semillita” o estría grasa crezca o bien que nunca se modifique, e inclusive desaparezca. Como referencia, algunos estudios demostraron que 1 cada 6 adolescentes tienen infiltraciones de colesterol en las paredes de las arterias coronarias, y 7 cada 10 a los 40 años. Luego de los 50 años, más del 85% tiene aterosclerosis coronaria de carácter leve, o más.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Qué es la enfermedad coronaria?</b></p>
            <p>Las arterias coronarias son 2, una a la derecha y otra a la izquierda del corazón, le llevan sangre oxigenada al propio músculo cardíaco (llamado miocardio) para que funcione normalmente. Cuando estas arterias tienen obstrucciones de grasa severas, es decir, más del 70% de la luz de la arteria, se produce insuficiencia coronaria o <b>“isquemia” del miocardio, por la poca llegada de oxígeno.</b> Esto puede dar dolor de pecho (denominado angina de pecho) o falta de aire, en general durante las actividades físicas o esfuerzos. Estos cuadros de insuficiencia coronaria no suelen ser peligrosos cuando están estables, es decir sin cambios clínicos en los últimos meses, pero cuando el dolor progresa a la situación de reposo o ante actividades mínimas, el problema es mayor, y es importante consultar al cardiólogo.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Cómo se diagnostica?</b></p>
            <p>El diagnóstico inicial surge de los síntomas que relata el paciente, especialmente <b>dolor de pecho (o angina de pecho) y a veces, falta de aire.</b> Luego se avanza mediante la solicitud de una prueba de esfuerzo (ergometría, cámara gamma o ecoestrés) o farmacológica (ecoestrés con dobutamina o camara gamma con dipiridamol). Sin embargo, la prueba de esfuerzo sirve para diagnosticar enfermedad coronaria severa pero no para predecir el riesgo de padecer un infarto de miocardio.  Hay estrategias más eficientes para la prevención cardiovascular y del infarto.</p>
        </div>

        <div class="w-full flex flex-col gap-4">
                <p class="mb-6"><b>¿Cómo se trata?</b></p>
                <p>La insuficiencia coronaria crónica estable puede controlarse con <b>remedios</b>, y en los casos más rebeldes, se requiere de un <b>cateterismo cardíaco o coronariografía</b> para evaluar directamente el estado de las arterias coronarias y así poder definir la necesidad de una angioplastia coronaria por catéteres o una cirugía de bypass, según la cantidad y lugar de las obstrucciones.</p>
                <p class="breyna-text-water">Es muy importante destacar que múltiples investigaciones han demostrado que:</p>
                <ul class="flex flex-col justify-between gap-4">
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p><span><b>Los remedios son de gran utilidad,</b> sobre todo las aspirinas, que previenen la formación de coágulos, y las estatinas, que bajan el colesterol.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p><b>No toda insuficiencia coronaria o isquemia detectada en una prueba de esfuerzo o farmacológica debe ser estudiada con un cateterismo.</b> Sólo aquellas que tengan criterios denominados de alto riesgo, ya sea clínico, o durante la prueba de esfuerzo, deben someterse a una coronariografía y eventual revascularización por angioplastía o cirugía.</p>
                    </li>
                </ul>
        </div>
    
    </div>

</section>

@endsection