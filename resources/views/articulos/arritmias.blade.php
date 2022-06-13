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

<div class="article-banner cardio7-banner w-full py-40"></div>

<section class="px-10 lg:px-40 pt-24 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="pb-12">
        <a class="text-gray-500 tracking-widest uppercase" href="/cardiologia"> <span class="icon-custom flechita-atras-svg mr-2"></span> Cardiología</a>
        <h1 class="uppercase breyna-text-blue mt-6 lg:text-xl"><b>Arritmias cardíacas y electrofisiología </b></h1>
    </div>

    <div class="flex flex-col gap-6 lg:w-7/12">
        <p>La Fibrilación Auricular (o “FA” en la jerga médica) es una <b>arritmia muy común</b>, que se incrementa día a día.<br>Esto ocurre porque está <b>ligada a la edad</b> (la expectativa de vida crece con los avances de la medicina) y a otras condiciones que veremos luego. </p>

        <p>Aunque siempre existió, en estos tiempos surgieron algunos nuevos tratamientos que ayudan a sobrellevarla mejor, y aún a eliminarla. Esto hace que en las revistas científicas y en las reuniones médicas sea un tema muy debatido, asi tambien como en el consultorio.</p>

        <p><b>Arritmia es toda alteración del ritmo del corazón</b>. Hay decenas de ellas, pero sólo algunas pocas merecen un manejo especial. </p>

        <p>La <b>FA</b> es un arritmia “totalmente irregular”, en la cual el corazón puede ir rápido (mas de 100 latidos por minuto) o normal (menos de 100 lpm). Esta irregularidad se puede detectar en el pulso, sin dar ningún síntoma, o a veces pueden sentirse “palpitaciones”, que son como golpecitos en el pecho o en el cuello, como que “el corazón se para”, pero que en realidad transmiten esa irregularidad de las contracciones. La forma mas simple de documentar esta arritmia es con un electrocardiograma. </p>

        <p>Ojo! Las palpitaciones también pueden ser causadas por otras arritmias, inclusive por el corazón acelerado sin arritmia. La fibrilación auricular puede ser permanente (siempre está) o paroxística (aparece por poco tiempo, a veces minutos, y se va, con chance de repetir). </p>

        <p>La probabilidad de tenerla despues de cumplir 40 años es de 1 cada 6 personas, o sea, no es raro que alguno de nosotros la tenga. De hecho, <b>a mayor edad mayor chance de tener FA</b>. Así, sabemos que después de los 75 años, 1 cada 10 personas la tiene, ya en forma permanente.</p>

        <p>Las causas que la producen se dividen en cardíacas y no cardíacas. Entre las primeras tenemos insuficiencia cardíaca, enfermedad coronaria, infarto, hipertensión arterial y enfermedades de las valvulas. Entre las segundas, tenemos problemas respiratorios (sobre todo broquitis crónica y enfisema), infecciones, alteraciones hormonales (problemas de tiroides) y minerales (como potasio o magnesio bajos). Como ven, esta arritmia <b>no siempre indica un problema del corazón. Tambien hay factores predisponentes, como fumar, alcohol, exceso de peso, estrés intenso y diabetes.</b></p>

        <p><span class="breyna-text-water"><b>Ahora bien, ¿por qué hay que hablar de esta arritmia?</b></span><br>Simplemente porque puede dar complicaciones serias, entre ellas, generar coágulos dentro del corazón que pueden “viajar” por las arterias dentro del organismo (<b>embolia</b>). El destino mas grave es el cerebro (<b>accidente cerebrovascular o ACV</b>), pero tambien puede ir a las piernas, riñones, etc. Tener una fibrilación auricular aumenta 5 veces el riesgo de sufrir un ACV. Traducido a números, podemos decir que cada año, 5 cada 100 pacientes con FA tienen un ACV embólico. Y el ACV es peligroso porque puede dejar discapacidad, y a veces llevar a la muerte.</p>

        <p>Por esta razón, <b>uno de los pilares del tratamiento de la FA es definir el riesgo individual de tener un ACV</b>, y si es elevado, indicar anticoagulantes (tipo acenocumarol), o antiagregantes plaquetarios (tipo aspirina o clopidogrel) segun corresponda. Obviamente, a veces la linea que separa la indicación de un tratamiento o el otro es borrosa, y cada médico debe definirlo charlando con su paciente. Los anticoagulantes aumentan el riesgo de hemorragias, a veces graves, pero tambien disminuyen el riesgo de sufrir un ACV en estos pacientes. Por lo tanto, todo esto debe ponerse en la balanza, considerando las razones médicas, pero tambien las expectativas y las preferencias del paciente.</p>

        <p>Recientemente se han investigado “<b>nuevos anticoagulantes orales</b>” que no requieren controles de sangre como los clásicos (acenocumarol y warfarina), y que mejorar los riesgos, o al menos los igualan. Quizás el mayor costo ($) sea una barrera, pero hay que pesarlo contra la incomodidad de hacer controles todos los meses y la ausencia de interacciones con muchas comidas y remedios. En nuestro medio ya están en uso el dabigatran, el rivaroxaban y el apixaban (nombres difíciles, ¿no?).</p>

        <p>Otra <b>innovación</b> importante es el tratamiento de la FA a través de un cateterismo por las venas, denominado <b>“ablación por radiofrecuencia o por crioablación”</b>, que sirve para cortar la FA, o al menos demorarla por varios años, mediante la emision de calor o frío en el “circuito eléctrico” del corazón que está alterado. La indicación suele ser clara en pacientes que han tenido varios episodios, o que toleran muy mal la arritmia o los medicamentos. Históricamente, se ha indicado la cardioversión eléctrica en forma programada, que es como un “choquecito” al corazón de baja carga de electricidad, pero la chance de éxito con la ablación es mas alta. De todos modos, los resultados excelentes con esta técnica lo logran médicos muy entrenados, en hospitales especializados y con tecnología de última generación.</p>

    </div>

</section>

@endsection