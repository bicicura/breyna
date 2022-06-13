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

<div class="article-banner cardio4-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Infarto de Miocardio</b></h1>
    </div>

    <div class="flex flex-col gap-12 lg:w-7/12">
        <p>El IAM es la <b>muerte de un grupo de células del músculo cardíaco (o miocardio)</b> producida por la falta de llegada de oxígeno cuando una arteria coronaria del corazón se tapa bruscamente por un coágulo, que se forma sobre una placa de colesterol (o ateroma) preexistente.</p>

        <div>
            <p class="mb-4"><b>¿A qué llamamos paciente “Vulnerable”?</b></p>
            <p>El infarto agudo de miocardio es como un “tsunami” que puede producirse en el curso de la vida de una persona que tiene mucha grasa acumulada en las paredes de sus arterias coronarias (aterosclerosis) como consecuencia de ser portadores de varios factores de riesgo cardiovasculares mal controlados (presión alta, tabaquismo, sobrepeso, colesterol, diabetes, etc), y que frecuentemente, se les superpone una crisis emocional intensa o estrés agudo, que actúan como gatillo o disparador. Esas personas que cuentan con varios factores de riesgo en su vida cotidiana, especialmente si se les ha diagnosticado por algún método de imágenes la presencia de aterosclerosis en sus arterias, son las que se denominan paciente “vulnerable” para sufrir un ataque cardíaco.</p>
        </div>

        <div>
            <p class="mb-4"><b>Concepto clave para entender cómo prevenir un Infarto</b></p>
            <p><span class="breyna-text-water">La obstrucción coronaria que existe ANTES del infarto NO es severa en la mayoría de los casos (85%)</span>, es decir, es una obstrucción leve o mediana, por debajo del 70% de la luz de la arteria. Llamativamente, la placa de colesterol o grasa es grande, pero crece inicialmente hacia afuera de la pared arterial y no obstruye mucho. Por eso, <span class="breyna-text-water">los chequeos basados en la realización de una prueba de esfuerzo (ergometría, cámara gamma o ecoestrés) no alcanzan para quedarse tranquilo cuando los resultados son normales.</span> Estas pruebas son anormales sólo cuando las obstrucciones superan el 70% de la luz arterial (severas en la jerga médica), que no suelen ser generalmente, las responsables de un infarto. Por esta razón, es común ver pacientes que sufren un IAM y que en los últimos meses realizaron un chequeo con una prueba de esfuerzo que fue normal. Seguramente, los otros gatillos del infarto, es decir los factores de riesgo y las cuestiones emocionales, no estuvieron bien controlados.
            <br>
            <br>Ver la Nota: <span class="underline brenya-text-blue-light">“La importancia de cuantificar la aterosclerosis carotídea”</span></p>
        </div>

        <div>
            <p class="mb-4"><b>¿Por qué el Infarto es peligroso?</b></p>
            <p>Una vez producido el IAM, la cicatriz puede ser grande o pequeña, y esto determinará una evolución complicada o no. Cuando la secuela o cicatriz es grande, producto de la obstrucción en un segmento de arteria coronaria importante, genera una contracción o bombeo del corazón muy débil, que puede llevar a la insuficiencia cardíaca o arritmias. Si el infarto es pequeño, no suele haber complicaciones, y si el paciente cuida sus factores de riesgo y no repite otro evento semejante, todo quedará en la anécdota y llevará una vida normal en términos de cantidad y calidad.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p><b>¿Cómo se trata un IAM?</b></p>
            <p>El <b>“tiempo es músculo”</b> es una frase que trasmite la necesidad de instaurar un tratamiento rápidamente. Por cada minuto que pasa, muchas células del miocardio se van muriéndo debido a la falta de oxígeno. Sila arteria obstruida es destapada dentro de la primer hora, existen muchas posibilidades de que no quede ninguna secuela. Para ello, <b>el primer actor es el propio paciente</b>, quien debe consultar o llamar a la ambulancia rápidamente cuando tiene un dolor u opresión en el centro del pecho, o una sensación de faltade aire repentina.</p>
            <p>Es difícil describir el dolor de un IAM, pero en general podemos decir que cualquier “malestar” extraño, continuo, no conocido previamente, no necesariamente intenso, que se instala en el pecho (y sólo a veces se irradia al cuello o los brazos), debería ser motivo de alerta. </p>
            <p>Una vez llegado al hospital, se le realizará un electrocardiograma y un análisis de sangre buscando “indicadores” de daño miocárdico. Los médicos, ante determinadas condiciones del caso, indicarán medicamentos llamados fibrinolíticos por vía endovenosa para disolver el coágulo que obstruye la arteria coronaria, o bien realizarán un cateterismo y una angioplastia directa para destapar la arteria responsable, que hoy, en centros de alta complejidad y con operadores muy entrenados, es el tratamiento de elección. </p>
            <p>Posteriormente, el paciente estará internado 3 o 4 días para recibir medicamentos que seguramente deberá seguir tomando de por vida, entre ellos aspirina, betabloqueantes y estatinas para el colesterol.</p>
            <p><b>Todo paciente que sufrió un IAM deberá tener un seguimiento cardiológico y controlar estrictamente sus factores de riesgo, tales como el colesterol, la presión arterial, el peso, dejar de fumar y hacer ejercicio regular.</b></p>
            <p><b>En MECyC, nuestros cardiólogos tienen una larga trayectoria y entrenamiento en centros de cardiología de primer nivel y alta complejidad, y están muy familiarizados con el manejo de esta enfermedad.</b></p>
        </div>

    </div>

</section>

@endsection