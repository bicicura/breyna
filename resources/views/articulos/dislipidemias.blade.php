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

<div class="article-banner bg-bottom cardio2-banner w-full py-56" style="background-position: 50% 85%"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 text-xl"><b>Dislipidemias</b></h1>
    </div>

    <div class="flex flex-col gap-12 lg:w-7/12">
        <div>
            <p class="mb-4"><b>¿Por qué es peligroso para la salud?</b></p>
            <p>El colesterol es una <b>variedad de grasa que tenemos en el organismo y que es necesaria para muchas funciones.</b><br>Por encima de determinados niveles es peligroso porque se va depositando en las paredes arteriales y las va obstruyendo lentamente (esta condición se denomina aterosclerosis). Así, puede generar complicaciones graves en el corazón y en el cerebro, tales como el infarto agudo de miocardio y el accidente cerebrovascular.</p>
            <p><b>El colesterol alto no da síntomas hasta que aparecen las complicaciones arteriales</b>. Por eso, es  fundamental concurrir al médico periódicamente para hacer controles de salud. Normalmente, un análisis de sangre muestra el colesterol total, el colesterol LDL (o colesterol malo), el colesterol HDL (o colesterol bueno), y otras variedades de grasas, entre ellas los triglicéridos, que también contienen colesterol en su interior</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Cómo me doy cuenta si tengo el Colesterol elevado?</b></p>
            <p>No hay que esperar a tener síntomas. El colesterol elevado no produce síntomas. Una persona puede estar años con el colesterol elevado y hacerse el diagnóstico en el contexto de una complicación Cardiovascular aguda, por ejemplo, cuando tienen un ACV o un Infarto. Queda claro que la única forma de darse cuenta como esta su colesterol es realizando los controles clínicos periódicos de acuerdo a su edad y antecedentes.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Por qué sube el Colesterol?</b></p>
            <p>El colesterol sube naturalmente con la edad. Las mujeres, hasta la menopausia, tienen el colesterol más bajo que los hombres porque las hormonas femeninas lo bajan, pero luego, sube rápidamente si no se instauran medidas para evitarlo. El colesterol alto también puede ser familiar o <b>hereditario</b>, y empezar en la adolescencia. Hay 3 factores fundamentales que lo elevan: <b>la dieta rica en colesterol y grasas, el sobrepeso, y la falta de actividad física regular.</b></p>
        </div>

        <div>
            <p class="mb-4"><b>¿Es normal que la presión veríe o suba en algunas situaciones?</b></p>
            <p>En algunas situaciones el corazón late más rápido o más lento, con más o con menos energía, y además, las arterias están más o menos dilatadas. Esto hace que la presión arterial presente oscilaciones dentro de los límites normales, pero en realidad no representan ninguna enfermedad. Además, en ocasiones la presión puede subir como consecuencia de una emoción, un esfuerzo o ejercicio intenso, o una crisis de estrés. En estas situaciones la presión vuelve rápidamente a la normalidad, y esto no significa tener hipertensión arterial.</p>
        </div>

        <div>
            <p class="mb-4"><b>¿Qué valores deben preocuparnos?</b></p>
            <p>El colesterol total deseable debe estar por debajo de 200 mg/dl, pero es fundamental saber los valores de los otros parámetros. Cuando hablamos de riesgo cardiovascular, el colesterol malo o LDL, es la variedad más importante a tener en cuenta inicialmente. El valor “óptimo” debe ser menor a 100 mg/dl. Por debajo de 130 mg/dl es aceptable, entre 130 y 160 mg/dl es limítrofe, y por encima de 160 mg/dl es alto. Con respecto al colesterol bueno o HDL, debe estar por encima de 40 mg/dl para reducir los riesgos cardiovasculares. Los triglicéridos deben estar por debajo de 150 mg/dl. Por encima de 200 mg/dl está elevados, y entre 150 y 200 mg/dl están en el límite.<br>La base del tratamiento es <b>atacar los factores predisponentes</b>, es decir <b>comer con pocas grasas y sin exceso de calorías, y hacer ejercicio regular</b>, de al menos 3 o 4 veces por semana. Esto ayuda a bajar o controlar el peso, además de bajar el colesterol malo y los triglicéridos. El ejercicio regular ayuda también a subir el colesterol bueno, que es protector. Si estas medidas no alcanzan (y frecuentemente desde el inicio del tratamiento), su médico cuenta con una variedad de medicación para bajar el colesterol que han sido extensamente investigados, y que han mostrado una alta efectividad, con excelentes <b>márgenes de seguridad cuando son debidamente indicados y controlados.</b> El tratamiento del colesterol elevado, igual que como ocurre con otras enfermedades crónicas de este tipo (por ejemplo, la hipertensión arterial y la diabetes), requiere que el paciente sea muy adherente al mismo y <b>no dejar de tomar los remedios</b>. Es frecuente ver que los pacientes dejan la medicación cuando observan niveles adecuados del colesterol, pero no tienen en cuenta que esto es gracias a los remedios, por lo cual al suspenderlos, el colesterol vuelve a subir.</p>
        </div>

        <div class="mb-4">
            <p><b>¿Cómo bajar el Colesterol?</b></p>
            <p>En algunos ámbitos se ha generado cierto debate por el uso frecuente de las <b>estatinas</b>, que son remedios para bajar el colesterol, y que brindan grandes beneficios en término de reducción de riesgo de infarto y de accidente cerebrovascular.</p>
        </div>
    
    </div>

</section>

@endsection