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

<section class="px-40 pt-24 pb-40 breyna-text-black w-8/12">
    <div class="pt-12 pb-6">
        <a class="text-gray-500 tracking-widest uppercase" href="/prevencion-enfermedad-vascular"> <span class="icon-custom flechita-atras-svg mr-2"></span> Prevención de Enfermedad Vascular</a>
        <h1 class="uppercase breyna-text-blue mt-6 text-xl"><b>Diabetología y Endocrinología</b></h1>
    </div>

    <div class="flex white w-full">
        <div class="w-full">
            <p class="my-6">La Diabetes es una <b>enfermedad crónica</b>, caracterizada por el <b>aumento del azúcar en sangre</b>, llamado hiperglucemia. Esta alteración se debe a un déficit total o parcial y/o a la mala utilización de una hormona producida por el páncreas denominada <b>insulina</b>.</p>
        </div> 
    </div>

    <div class="flex flex-col gap-12">
        <div class="flex flex-col gap-4">
            <p><b>Tipos de Diabetes</b></p>
            <p>Hay varios tipos de diabetes, pero las más frecuentes son la diabetes tipo 1 y tipo 2.</p>
            <p><span class="breyna-text-water">La Diabetes tipo 1</span> suele aparecer en gente joven y de manera brusca, con síntomas como sed excesiva (polidipsia), incremento del volumen urinario (poliuria), aumento del apetito (polifagia), pérdida de peso y síntomas inespecíficos como cansancio o falta de fuerzas. Debido a que su causa es la destrucción de las células productoras de insulina por parte del sistema inmune, <b>los pacientes con diabetes tipo 1 necesitan ser tratados con insulina desde el momento del diagnóstico, y de por vida</b>. Este tipo de diabetes no suele tener un factor hereditario.</p>
            <p><span class="breyna-text-water">La Diabetes tipo 2</span> suele aparecer en los adultos, siendo al principio una <b>enfermedad asintomática</b>. Esto hace que para detectarla sea necesaria la realización de análisis de sangre de manera periódica, pues los síntomas aparecen una vez avanzada la enfermedad. En estos casos, la diabetes se debe a la combinación de un déficit parcial de insulina con una falla en su acción, y los pacientes pueden ser tratados mediante un plan de alimentación y actividad física, fármacos vía oral, insulina o una combinación de ellos. Este tipo de diabetes puede estar relacionada a una predisposición genética.</p>
        </div>

        <div>
            <p><b>¿Cómo se diagnostica la Diabetes?</b></p>
            <p>El diagnóstico de Diabetes se realiza por una Glucemia de ayunas ≥ 126 mg/dl en 2 o más ocasiones, o por valores de glucemia ≥ 200 mg/dl luego de una prueba de tolerancia oral a la glucosa. Esta consiste en beber una solución azucarada con 75 gramos de glucosa y medir la respuesta glucémica a las 2 horas. También por la presencia de síntomas típicos de diabetes (poliuria, polidipsia, polifagia, pérdida de peso) acompañados de valores de glucemia al azar ≥ 200 mg/dl.</p>
        </div>

        <div class="flex flex-col gap-4">
            <p><b>¿Cuáles son las consecuencias de la Diabetes para el organismo?</b></p>
            <p><b>Si no se trata adecuadamente, la hiperglucemia puede llevar a complicaciones agudas (a corto plazo)</b> y/o crónicas (a largo plazo). Las complicaciones agudas se deben a la falta de insulina, lo que determina que la glucosa permanezca elevada en la sangre y no ingrese a las células. Éstas, al carecer de energía para cumplir sus funciones comienzan a utilizar combustibles alternativos como las grasas, produciendo sustancias ácidas (cetonas) que al acumularse pueden alterar el estado de conciencia hasta una situación de coma. A su vez, el aumento marcado de la glucemia determina que se pierda azúcar por la orina (glucosuria), arrastrando consigo agua y minerales, lo que mantenido en el tiempo lleva a la deshidratación. Las complicaciones agudas, por lo tanto, suelen ser situaciones graves, que requieren la internación del paciente.</p>
            <p>Las <b>complicaciones crónicas</b> se deben a que el aumento de la glucosa mantenido en el tiempo puede afectar diferentes órganos, a través del daño de pequeños y/o grandes vasos sanguíneos. Dentro del primer grupo, el mal control de la diabetes puede llevar a: daño en los ojos, con pérdida progresiva de la visión; falla de los riñones, con posible requerimiento de diálisis o trasplante de riñón; alteración del sistema nervioso, con pérdida de la sensibilidad de los miembros inferiores, aumentando el riesgo de úlceras y amputaciones. Respecto al daño de los grandes vasos sanguíneos, la diabetes puede afectar al corazón, con aumento del riesgo de infarto de miocardio; al cerebro, incrementando el riesgo de accidente cerebrovascular; y a las arterias de los miembros inferiores, aumentando el riesgo de amputaciones.</p>
        </div>
    </div>
</section>

@endsection