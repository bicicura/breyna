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

    @media (max-width: 800px) {
        nav {
            background-color: transparent;
        }
    }

</style>


@section('contenido')

<div class="article-banner cardio3-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">

    <div class="py-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Insuficiencia Cardíaca</b></h1>
    </div>

    <div class="flex flex-col gap-12 lg:w-7/12">
        <div>
            <p class="mb-4"><b>¿Qué es la Insuficiencia Cardíaca?</b></p>
            <p>Partiendo del concepto de que el corazón funciona como una “bomba” que expulsa sangre para el correcto funcionamiento de los músculos y el resto de los órganos (cerebro, riñones y aparato digestivo, etc), la insuficiencia cardiaca es la <b>incapacidad del corazón para lograr un adecuado suministro de sangre acorde a las necesidades de cada órgano, o haciéndolo a expensas de un esfuerzo mayor que es lo que se conoce como mecanismo de compensación.</b> En los últimos años la prevalencia de la insuficiencia cardiaca se encuentra en aumento, sobre todo a partir de los 65 años, así  como también aumentó la cantidad de internaciones que produce.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Cuáles son las principales causas?</b></p>
            <p>Las causas son varias, las más comunes son la <span class="breyna-text-water">hipertensión arterial</span> (sobre todo en personas mayores) y la <span class="breyna-text-water">enfermedad coronaria</span>. Otras circunstancias que llevan a la insuficiencia cardiaca son la presencia de enfermedades valvulares, problemas del músculo cardiaco o trastornos presentes en el nacimiento.<br>En los últimos 20 años las enfermedades cardiovasculares han sido la principal causa de muerte en nuestro país, dentro de estas, la insuficiencia cardiaca es la más frecuente con un 31%. Si bien la sobrevida ha mejorado en los últimos años la supervivencia a 5 años es del 50%, por lo que es muy importante su diagnóstico, tratamiento y seguimiento.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Es grave?</b></p>
            <p>Por lo general es un cuadro lento y progresivo. En sus primeras etapas el organismo pone en marcha una serie de mecanismos compensatorios y cuando estos se sobrepasan, se manifiestan los síntomas. En algunos casos puede desarrollarse un cuadro agudo sin manifestación clínica alguna antes de la presentación.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Es un cuadro súbito?</b></p>
            <p>Los síntomas consisten en retención de líquido que se manifiesta como aumento del diámetro en los tobillos o piernas (edemas), sensación de plenitud o dolor en la zona del hígado después de comer y/o falta de aire que expresa congestión pulmonar, al principio suele ser durante los esfuerzos pero también puede ocurrir en reposo. Otra forma de presentarse es como fatiga excesiva frente a esfuerzos que antes no la producían.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Cuáles son los síntomas?</b></p>
            <p>El tratamiento está dirigido por un lado a tratar de identificar y tratar la causa que la produce, por ejemplo, si es hipertensión ,mantener valores normales de la misma; si es por enfermedad coronaria, tratarla con remedios y/o cateterismo. Por otro lado, el tratamiento también tiene que mejorar los síntomas de sobrecarga de líquido, para lo cual se utilizan diuréticos, y también prolongar la sobrevida mejorando el bombeo del corazón. Por último algunos casos pueden requerir dispositivos cardiacos.</p>
        </div>

        <div class="mb-4">
            <p><b>¿Cuál es el tratamiento?</b></p>
            <p>Como se mencionó previamente, las causas de insuficiencia cardíaca son diversas. En nuestro país la principal es la enfermedad coronaria, por ello la mejor forma de prevenirla es el control de los factores   de riesgo cardiovascular (hipertensión, diabetes, tabaquismo, sedentarismo, colesterol elevado, sobrepeso). En las personas que tienen problemas valvulares o enfermedad del músculo cardíaco,   lo más efectivo es el control periódico, y  en caso de recibir medicación, no suspenderla sin indicación médica.  </p>
        </div>
    
        <div class="flex flex-col gap-4">
            <p><b>¿Cómo puedo evitar llegar a tener Insuficiencia Cardíaca?</b></p>
            <p>Uno puede evitar llegar a tener insuficiencia Cardíaca si se conocen los antecedentes de riesgo hereditarios, que se pueden consultar con padres, abuelos, tíos o hermanos.</p>
            <p>Otras temas importantes a saber es si tienen factores de riesgo cardiovasculares como hipertensión arterial, diabetes, dislipemia, obesidad, trastornos en el sueño, tabaquismo, consumo de tóxicos o sedentarismo para poder tratarlos y controlarlos. </p>
            <p>La depresión y la soledad  son dos factores que afectan mucho a la salud del corazón y que en el contexto de pandemia intensificaron su incidencia. Es importante interrogar sobre el estado anímico de los pacientes.</p>
            <p>Se recomienda poder hacer los controles clínicos y estudios complementarios, que incluyen un electrocardiograma, un análisis de laboratorio, control de peso y presión arterial.</p>
            <p>Pudiendo sostener los hábitos saludables como una alimentación saludable, el control de la presión arterial, del colesterol y practicando ejercicio en forma regular y constante lleva en general a que la causa no se desarrolle.</p>
        </div>
 
        <div class="mb-4">
            <p><b>Si ya tengo Insuficiencia Cardíaca, ¿cómo me cuido?</b></p>
            <p>En las personas que padecen insuficiencia cardiaca es muy importante la realización de <b>controles diarios del peso</b>, ya que los primeros cambios se notan en la balanza antes que en el espejo. Por otro lado es fundamental el <b>seguimiento médico periódico</b> ya que los remedios y las dosis pueden requerir modificaciones y por último, se deben colocar vacunas como la de la neumonía y la gripe.</p>
        </div>

    </div>

</section>

@endsection