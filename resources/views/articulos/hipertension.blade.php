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

<div class="article-banner cardio1-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Presión Arterial (Hipertensión e Hipotensión Arterial)</b></h1>
    </div>

    <div class="flex flex-col gap-12 lg:w-7/12">
        <div>
            <p class="mb-4"><b>¿Qué es la Presión Arterial?</b></p>
            <p>La presión arterial es la <b>fuerza que ejerce la sangre sobre las paredes de las arterias como producto del bombeo continuo del corazón</b>. Existe una presión máxima o sistólica, y una mínima o diastólica. Los valores normales son hasta 120/80 mm Hg, es decir hasta 120 de máxima y hasta 80 de mínima.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿A qué llamamos Hipertensión Arterial (HTA)?</b></p>
            <p>Se define como hipertensión arterial a <b>valores de la presión arterial por encima de 140/90 mm Hg</b>, es decir, por encima de 140 de máxima, o de 90 de mínima, o ambas, durante gran parte del día e inclusive la noche. Cuando los valores están por encima de 120/80 y por debajo de 140/90 mm Hg, se considera una situación limítrofe que puede predisponer a la presión alta en el futuro, por ello se llama presión “normal alta” o “pre-hipertensión arterial”, y justifica un seguimiento cuidadoso.</p>
        </div>

        <div class="flex white w-full">
            <div class="w-full">
                <p class="mb-6"><b>Algunos Mitos</b></p>
                <ul class="flex flex-col justify-between gap-2">
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p><span class="breyna-text-water">“Los ancianos pueden tener la presión más alta porque las arterias se endurecen”</span> <b>FALSO</b>. <br>Es verdad que el paso del tiempo pone más rígidas a las arterias, sin embargo, esto no debe ser una excusa para justificar la presión alta. En las personas mayores de edad los valores deben respetar los mismos valores que se mencionaron antes.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p><span class="breyna-text-water">“La presión alta da síntomas”.</span> <b>FALSO</b>. La presión alta en forma crónica suele ser asintomática. Así, en forma silenciosa va enfermando al corazón, el cerebro y los riñones. Muchos refieren cefalea, mareos o algún otro malestar; sin embargo, estos son síntomas muy comunes y responden a otras causas.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <p class="mb-4"><b>¿Cuáles son los riesgos de la Presión Alta?</b></p>
            <p><span class="breyna-text-water">La HTA es la condición cardiovascular asociada a la mayor cantidad de muertes en el mundo.</span><br>En la Argentina, 1 de cada 2 adultos por encima de los 35 años es hipertenso, y la mitad de ellos no lo sabe. La hipertensión arterial no tratada predispone al desarrollo de aterosclerosis, es decir el depósito de grasa en las paredes de las arterias del cuerpo. Y a través de ella, puede desencadenar complicaciones graves, tales como el ataque cardíaco (infarto de miocardio), el accidente cerebrovascular o ACV, la insuficiencia cardíaca y la insuficiencia renal. En el caso de la pre-hipertensión, también se acompaña de riesgos cardíacos y neurológicos aumentados. A estos pacientes comúnmente no se le da mucha importancia, y por esa razón pueden tener peores consecuencias que las de un hipertenso real controlado.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Es normal que la presión veríe o suba en algunas situaciones?</b></p>
            <p>En algunas situaciones el corazón late más rápido o más lento, con más o con menos energía, y además, las arterias están más o menos dilatadas. Esto hace que la presión arterial presente oscilaciones dentro de los límites normales, pero en realidad no representan ninguna enfermedad. Además, en ocasiones la presión puede subir como consecuencia de una emoción, un esfuerzo o ejercicio intenso, o una crisis de estrés. En estas situaciones la presión vuelve rápidamente a la normalidad, y esto no significa tener hipertensión arterial.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Cuáles son las causas del HTA?</b></p>
            <p>En más del 90% de los casos la presión alta está relacionada al acumulo de sal en el organismo, al estado de las arterias, el sistema nervioso y los riñones, y a la cantidad de hormonas que circulan en la sangre. Los factores comunes que predisponen a la presión alta son comer con mucha sal, fumar, el exceso de peso, el sedentarismo, la diabetes, el estrés permanente, la ansiedad, tomar mucho alcohol y los antecedentes en la familia.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p><b>¿Cómo se trata la HTA? </b></p>
            <p>El primer paso consiste en comer alimentos saludables, con poca sal, hacer ejercicio regular, bajar de peso, dejar de fumar, reducir el consumo de alcohol y controlar el estrés.<br>Si estas medidas no son suficientes, su médico le indicará uno o más remedios para bajar la presión que, mediante investigaciones clínicas, han demostrado ser muy eficientes, siempre que se acompañen de las medidas señaladas en el primer paso. Para que el tratamiento tenga éxito, <b>es necesario saber que no hay que dejar de tomar los medicamentos aunque los controles muestren que la PA está controlada.</b></p>
            <p class="breyna-text-water"><b>En nuestro centro, ponemos mucho énfasis en la educación sobre cómo prevenir los problemas cardiovasculares, porque para que cada uno lleve adelante un estilo de vida más sano, que muchas veces es una tarea difícil, el paciente debe entender muchos “porqué y para qué”.</b></p>
            <p class="breyna-text-water"><b>Ser exigentes con los límites óptimos conduce a una vida más larga y saludable.</b></p>
        </div>
    
    </div>

</section>

@endsection