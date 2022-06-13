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
    
    .drestol-li {
    border-bottom: .35rem solid #014494!important;
    background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%)!important;
    }

    .drestol-li:hover {
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%)!important;
    }

    .estol-ul {
    border-top: .35rem solid #014494!important;
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.03)!important;
    }

</style>

@section('contenido')

<section class="min-h-screen px-10 lg:px-20 pt-40 pb-40 breyna-text-black text-3xl lg:text-base">
    <div class="w-full flex-col items-center flex mx-auto hero-dr-estol lg:py-32 h-96 lg:h-fit rounded-3xl overflow-hidden">
        <div class="ml-auto mt-auto lg:mt-0 mr-12 flex flex-col gap-6 z-10 pointer-events-auto mb-12 lg:mb-0">
            <h1 style="font-size: 4rem" class="w-max text-6xl text-white breyna-text-bold">Dr. Conrado Estol</h1>
            <h2 class="w-max text-white mx-auto lg:mx-0 text-3xl tracking-lg lg:text-4xl  breyna-text-white">Neurólogo especialista en ACV</h2>
            <a target="_blank" href="https://drconradoestol.com/" class="bryena-bg-blue text-2xl flex lg:text-base uppercase items-center h-fit gap-2 text-white my-auto px-32 py-6 lg:py-4 lg:px-16 rounded-lg tracking-widest w-max lg:ml-auto lg:mr-0 mx-auto cursor-pointer">
                <p>Ir al sitio</p>
                <div class="w-3 h-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" x="0px" y="0px" xml:space="preserve"><path class="fill-white" d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                </div>
            </a>
        </div>
    </div>

    <div class="flex flex-col gap-6 lg:w-10/12 my-20">
        <p class="breyna-text-blue lg:text-2xl"><b>Información personal</b></p>
        <p>El Dr. Conrado Estol se graduó de médico especialista en ACV en la Universidad de Buenos Aires en 1982. Completó su formación médica como <b>residente de Clínica Médica en Nueva York</b> (Hospitales afiliados al Mount Sinai) y de <b>Neurología en la Universidad de Pittsburgh</b> (Pennsylvania), y realizó la especialización en <b>ACV (stroke) en Boston (New England Medical Center -Universidad de Tufts- y Spaulding Rehabilitation Hospital -Universidad de Harvard-), con el Prof. Louis Caplan</b>, mundialmente reconocido como líder en el tema.</p>
        <p>A pesar de tener doble ciudadanía (norteamericana por nacimiento y argentina por adopción), haber completado la formación médica en EE.UU., estar <b>certificado por el Consejo Norteamericano de Neurología y Psiquiatría</b> (no todos los neurólogos que ejercen en los Estados Unidos tienen esta certificación que es voluntaria y se logra pasando un examen de dos días), y haber recibido la oferta de ser Profesor de Neurología en Boston, decidió volver a la Argentina porque el ejercicio de la medicina le podría causar más satisfacciones y sus contribuciones tener un mayor impacto.</p>
        <p>Conrado Estol es <b>Doctor en Medicina de la UBA</b> con la Tesis titulada “Las complicaciones neurológicas del transplante hepático” en el que fue calificado con sobresaliente.</p>
    </div> 

    <div class="flex flex-col gap-6 lg:w-10/12 mt-28">
        <p class="breyna-text-blue lg:text-2xl"><b>Investigación y publicaciones cientificas</b></p>
        <p>El Dr. Conrado Estol tiene más de <b>170 publicaciones, la mayoría en revistas internacionales, que incluyen 50 trabajos originales (como primer autor en la mayoría), 40 capítulos de libro, 20 editoriales y cartas de lector, 60 presentaciones en congresos publicadas y un libro como editor.</b></p>
        <p>Fue <b>pionero en la investigación desarrollada en los EE.UU. sobre las drogas trombolíticas</b>, que a partir de estos trabajos iniciales se transformaron en el único tratamiento disponible en la actualidad para el ACV. En 1988 trató personalmente a uno de los primeros 5 pacientes que recibieron dicha medicación en el mundo.</p>
        <p><b>Durante sus años en la Universidad de Pittsburgh trabajó con el Dr. Thomas Starzl, inventor del transplante hepático</b> por lo que solo en esta universidad se hacían más transplantes que en el resto del mundo combinado. Mientras completaba su residencia como neurólogo, Conrado detectó que frecuentemente recibía consultas para evaluar neurológicamente a pacientes que habían recibido un transplante. Al tener acceso al banco de datos más grande del mundo sobre el tema, decidió escribir sobre esto. <b>Así publicó lo que fueron los primeros artículos en el mundo sobre las complicaciones neurológicas del transplante hepático. Esto le valió un reconocimiento por lo que fue invitado a dar conferencias sobre el tema, escribir capítulos de libro, ganó un premio para presentar uno de los trabajos en Japón (ACV y transplante), le valió el premio al “mejor residente del año” y propuso por primera vez que la llamada “mielinolisis pontina central” (una alteración cerebral ligada a variaciones en el sodio de la sangre) se asociaba casi sin excepción a disfunción hepática (algo no reconocido hasta el momento).</b></p>
        <p>Luego de su estudio de la “mielinolisis pontina central”, el Dr. Estol evaluó pacientes en que la lesión “pontina” revertía cuando se detectaba a tiempo y así describió junto a su jefe, el Dr. Caplan, el “edema pontino central” una condición potencialmente reversible que precede a la mielinolisis.</p>
        <p>También, tras observar una cantidad de pacientes que habían sufrido un desmayo al tomar gaseosa, el Dr. Estol publicó a este grupo y llamó “Desmayo por gaseosa” (Soda Syncope) al fenómeno. Esto tuvo amplia repercusión en los medios y por esto fue citado en varios diarios y programas de la televisión norteamericana.</p>
        <p>Por otro lado, fue quien introdujo en la Argentina en 1991 el Doppler Transcraneal para la evaluación no invasiva de las arterias cerebrales.</p>
        <p>Luego de volver a la Argentina, Conrado notó que muchos pacientes con problemas de columna mejoraban con el tratamiento de RPG que hacían las terapistas con las que trabajaba (esta técnica no existía en los EE.UU.). Publicó una serie de 20 pacientes que evitaron el quirófano gracias a este tratamiento y luego una serie de casi 200 pacientes con problemas de columna cervical y lumbar severos y con un índice de éxito mayor al 80%. El inventor de la técnica, Philip Souchard, no la había publicado por lo que el reporte de Conrado en el principal congreso neurológico del mundo (American Academy of Neurology) generó mucho interés en los medios. El diario La Nación publicó una extensa nota el 5 de mayo de 2005 y la técnica se popularizó significativamente en el país.</p>
        <p>Creó además el primer grupo de terapistas para Rehabilitación Neurológica del ACV con técnicas de Neurodesarrollo que aprendió en el Spaulding Rehabilitation Hospital de Boston donde estuvo a cargo de la unidad de ACV durante dos años.</p>
        <p>En el año 2009, luego de escuchar la historia descripta por Nando Parrado en una conferencia, el Dr. Estol pensó en una hipótesis en la que el propio accidente le había salvado la vida a Nando permitiendo así que el salvara a sus amigos en la montaña. En resumen: el golpe fracturó el cráneo de Nando permitiendo que el edema cerebral tuviese espacio para no dañar áreas vitales del cerebro. Luego fue dado por muerto y colocado en un área del fuselaje que causó hipotermia la que protegió sus neuronas y, finalmente, la falta de agua durante 2 días contribuyó a controlar el edema cerebral. Lo interesante es que la hipotermia y la apertura del cráneo son dos técnicas de tratamiento desarrolladas para protección cerebral años después de que el propio accidente las generara en Nando.</p>
    </div>

    <div class="my-28">
        <p class="lg:text-xl breyna-text-blue mb-6"><b>Premios y honores</b></p>
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="w-full p-6 bg-white shadow-md">
                <p class="lg:text-2xl breyna-text-water mb-4">1987</p>
                <p>Primer Premio de Neurociencias en el Concurso Anual de Investigación de Residentes: “Cerebral Infarctions in the Carotid Artery Territory – Correlation of Size with the Underlying Type of Vascular Lesions”. Pittsburgh, EE. UU.</p>
            </div>
            <div class="w-full p-6 bg-white shadow-md">
                <p class="lg:text-2xl breyna-text-water mb-4">1988</p>
                <p>Primer Premio de Neurociencias en el Concurso Anual de Investigación de Residentes: “Neurological Complications after Liver Transplantation”, Pittsburgh, EE. UU.</p>
            </div>
            <div class="w-full p-6 bg-white shadow-md">
                <p class="lg:text-2xl breyna-text-water mb-4">1988</p>
                <p>Primer Premio de Neurociencias en el Concurso Anual de Investigación de Residentes: “Neurological Complications after Liver Transplantation”, Pittsburgh, EE. UU.</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <div class="flex w-full flex-col lg:flex-row justify-between items-stretch gap-12 mt-8">
            <a 
            href="/dr-estol/acv" 
            class="flex cursor-pointer w-full items-center py-12 pl-20 border-gray-300 rounded-xl shadow-md lg:text-base text-2xl transition-all"
            x-data=" { hover: false }"
            x-on:mouseover="hover = true"
            x-on:mouseout="hover = false"
            :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
            >
                    <div class="w-12 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 49 49" xml:space="preserve"><g class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' "><path d="M19.6 49c-1.7 0-3.3-.8-4.4-2.2-.8.4-1.7.7-2.6.7-2.5 0-4.7-1.8-5.5-4.3-3-.2-5.4-2.9-5.4-6.2v-.7C.6 35 0 33.4 0 31.8c0-1.9.8-3.7 2.1-4.8-.5-.9-.7-1.9-.7-3 0-2.1 1-4.1 2.6-5.2-.2-.7-.4-1.4-.4-2.2 0-2.9 1.8-5.3 4.3-6v-.2C8 6.8 10.6 4 13.8 4h.3c.8-2.4 3-4 5.4-4 3.2 0 5.8 2.8 5.8 6.2 0 .5-.4.8-.8.8-.5 0-.8-.4-.8-.8 0-2.5-1.8-4.5-4.1-4.5-1.9 0-3.6 1.4-4 3.5 0 .2-.2.4-.4.5-.2.1-.4.2-.7.1-.2-.1-.4-.1-.7-.1-2.3 0-4.1 2-4.1 4.6 0 .3 0 .6.1.8 0 .5-.3.9-.8.9-2.1.3-3.7 2.2-3.7 4.5 0 .7.2 1.5.5 2.2.2.4 0 .9-.4 1.1-1.5.8-2.4 2.4-2.4 4.1 0 1 .3 1.9.8 2.8.1.2.2.4.1.6 0 .2-.2.4-.4.5-1.2.8-2 2.3-2 3.9 0 1.4.5 2.6 1.4 3.5.2.2.3.5.3.7 0 .3-.1.6-.1.9 0 2.5 1.9 4.6 4.1 4.6h.1c.5-.1.9.2 1 .7.4 2.1 2.1 3.7 4 3.7.8 0 1.6-.3 2.3-.8.2-.1.4-.2.7-.1.2 0 .4.2.6.4.7 1.3 2.1 2.1 3.5 2.1 2.2 0 4.1-2 4.1-4.6 0-.5.4-.8.8-.8.5 0 .8.4.8.8.2 3.4-2.4 6.2-5.5 6.2z"/><path d="M24.5 43.6c-.5 0-.8-.4-.8-.8V6.2c0-.5.4-.8.8-.8.5 0 .8.4.8.8v36.6c0 .4-.4.8-.8.8zM11.8 21.4c-.3 0-.5-.1-.7-.4-1.2-1.8-3.7-2.4-5.5-1.2-.4.2-.9.1-1.2-.3-.2-.4-.1-.9.3-1.2 2.6-1.7 6.1-.9 7.8 1.7.3.4.1.9-.2 1.2-.2.1-.3.2-.5.2zM7.7 43.1c-.4 0-.8-.3-.8-.7-.1-.5.3-.9.7-.9 1-.1 2-.7 2.6-1.5.6-.9.9-1.9.8-3-.1-.5.3-.9.7-.9.5-.1.9.3.9.7.2 1.5-.2 3-1.1 4.2-.9 1.2-2.2 2-3.7 2.2 0-.1 0-.1-.1-.1z"/><path d="M24.5 27.8c-.3 0-.7-.2-.8-.6-.5-1.6-2-2.6-3.6-2.7-.5 0-.8-.4-.8-.9s.4-.8.9-.8c2.3.1 4.4 1.6 5.1 3.8.2.4-.1.9-.5 1.1-.1 0-.2.1-.3.1zM16.9 33.2c-4.8 0-8.7-3.6-9.2-8.3 0-.5.3-.9.8-.9s.9.3.9.8c.4 3.9 3.6 6.8 7.5 6.8.5 0 .8.4.8.8s-.3.8-.8.8z"/><path d="M6.9 32.4c-.2 0-.4-.1-.6-.2-.3-.3-.3-.9 0-1.2 1.3-1.3 3.3-1.9 5.1-1.6.5.1.8.5.7 1-.1.5-.5.8-1 .7-1.3-.3-2.7.2-3.6 1.1-.1.1-.4.2-.6.2zM20.2 43.7c-.5 0-.8-.4-.8-.8 0-1.6-.5-3.1-1.4-4.4-.3-.4-.2-.9.2-1.2.4-.3.9-.2 1.2.2 1.1 1.6 1.7 3.5 1.7 5.4-.1.4-.4.8-.9.8zM18 8.1c-.3 0-.6-.1-.7-.4-.6-1-1.6-1.7-2.7-1.9-.5-.1-.8-.5-.7-1 .1-.5.5-.8 1-.7 1.6.3 3 1.3 3.8 2.7.3.5.2 1-.2 1.2-.2.1-.3.1-.5.1zM19.9 18.4c-.1 0-.2 0-.3-.1-2.7-1.2-4.7-3.7-5.3-6.6-.1-.5.2-.9.7-1 .5-.1.9.2 1 .7.5 2.4 2.1 4.4 4.3 5.4.4.2.6.7.4 1.1-.1.3-.5.5-.8.5z"/><path d="M17.1 21.7c-.4 0-.8-.3-.8-.7-.3-1.8 0-3.6.7-5.2.2-.4.7-.6 1.1-.4.4.2.6.7.4 1.1-.6 1.4-.8 2.9-.6 4.3.1.5-.2.9-.7 1 0-.1-.1-.1-.1-.1zM29.4 49c-3.2 0-5.8-2.8-5.8-6.2 0-.5.4-.8.8-.8.5 0 .8.4.8.8 0 2.5 1.8 4.6 4.1 4.6 1.4 0 2.7-.8 3.5-2.1.1-.2.3-.4.6-.4.2 0 .5 0 .7.2.7.5 1.5.8 2.3.8 2 0 3.7-1.5 4-3.7 0-.2.2-.4.4-.6.2-.1.4-.2.7-.1h.1c2.3 0 4.1-2 4.1-4.6 0-.3 0-.6-.1-.9 0-.3 0-.5.2-.7.9-.9 1.5-2.2 1.5-3.5 0-1.6-.8-3.1-2-3.9-.2-.1-.3-.3-.4-.5 0-.2 0-.5.1-.6.6-.9.9-1.8.9-2.8 0-1.7-.9-3.4-2.4-4.1-.4-.2-.6-.7-.4-1.1.3-.7.5-1.4.5-2.2 0-2.3-1.6-4.3-3.7-4.5-.2 0-.4-.1-.6-.3-.1-.2-.2-.4-.2-.6 0-.3.1-.5.1-.8 0-2.5-1.8-4.6-4.1-4.6-.3 0-.5 0-.7.1-.2.1-.5 0-.7-.1-.2-.1-.3-.3-.4-.5-.4-2-2.1-3.5-4-3.5-2.3 0-4.1 2-4.1 4.5 0 .5-.4.8-.8.8-.5 0-.8-.4-.8-.8 0-3.4 2.6-6.2 5.8-6.2 2.5 0 4.6 1.6 5.4 4h.3c3.2 0 5.8 2.8 5.8 6.2v.3c2.5.7 4.3 3.2 4.3 6 0 .7-.1 1.5-.4 2.2 1.6 1.1 2.6 3.1 2.6 5.2 0 1.1-.2 2.1-.7 3 1.4 1.2 2.2 2.9 2.2 4.8 0 1.6-.6 3.2-1.7 4.4v.7c0 3.3-2.4 6-5.4 6.2-.8 2.6-3 4.3-5.5 4.3-.9 0-1.8-.2-2.6-.6-.9 1.4-2.6 2.2-4.3 2.2z"/><path d="M37.2 21.4c-.2 0-.3 0-.5-.1-.4-.3-.5-.8-.2-1.2 1.7-2.6 5.2-3.4 7.8-1.7.4.2.5.8.3 1.2-.2.4-.8.5-1.2.3-1.9-1.2-4.3-.7-5.5 1.2-.2.1-.4.3-.7.3zM41.3 43.1h-.1c-1.5-.2-2.8-1-3.7-2.2-.9-1.2-1.3-2.7-1.1-4.2.1-.5.5-.8.9-.7.5.1.8.5.7.9-.1 1.1.1 2.1.8 3 .6.8 1.6 1.4 2.6 1.5.5.1.8.5.7.9 0 .5-.4.8-.8.8zM24.5 34.3h-.3c-.4-.2-.7-.6-.5-1.1.8-2.2 2.8-3.7 5.1-3.8.4 0 .9.3.9.8s-.3.9-.8.9c-1.6.1-3.1 1.1-3.6 2.7-.1.3-.5.5-.8.5zM32.1 33.2c-.5 0-.8-.4-.8-.8 0-.5.4-.8.8-.8 3.9 0 7.1-2.9 7.5-6.8 0-.5.4-.8.9-.8s.8.5.8.9c-.5 4.7-4.4 8.3-9.2 8.3z"/><path d="M42 32.4c-.2 0-.4-.1-.6-.3-.9-.9-2.3-1.4-3.6-1.1-.5.1-.9-.2-1-.7-.1-.5.2-.9.7-1 1.9-.4 3.8.2 5.1 1.6.3.3.3.9 0 1.2-.1.2-.3.3-.6.3zM28.8 43.7c-.5 0-.8-.4-.8-.8 0-1.9.6-3.8 1.7-5.4.3-.4.8-.5 1.2-.2.4.3.5.8.2 1.2-.9 1.3-1.4 2.9-1.4 4.4-.1.4-.4.8-.9.8zM31 8.1c-.1 0-.3 0-.4-.1-.4-.2-.5-.7-.3-1.1.8-1.4 2.2-2.4 3.8-2.7.5-.1.9.2 1 .7s-.2.9-.7 1c-1.1.2-2.1.9-2.7 1.9-.2.2-.4.3-.7.3zM29 21.7c-.2 0-.4-.1-.6-.2-.3-.3-.3-.9 0-1.2 1.7-1.8 2.5-4.2 2-6.6-.1-.5.2-.9.7-1 .5-.1.9.2 1 .7.5 2.9-.4 6-2.5 8.1-.2.1-.4.2-.6.2z"/><path d="M31.2 17c-.4 0-.7-.3-.8-.7-.1-.5.2-.9.7-1 1.5-.3 2.8-1 3.9-2 .3-.3.9-.3 1.2 0 .3.3.3.9 0 1.2-1.3 1.2-2.9 2.1-4.7 2.4-.1.1-.2.1-.3.1z"/></g></svg>
                    </div>
                    <div>
                        <h4 class="lg:text-lg"><b>ACV</b></h4>
                        <div class="flex items-center mt-3 gap-1">
                            <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                            <div class="w-3 h-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path class="transition-all" :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                            </div>
                        </div>
                    </div>
            </a>
            <a 
            href="/dr-estol/neurologia" 
            class="flex cursor-pointer w-full items-center py-12 pl-20 border-gray-300 rounded-xl shadow-md lg:text-base text-2xl transition-all"
            x-data=" { hover: false }"
            x-on:mouseover="hover = true"
            x-on:mouseout="hover = false"
            :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
            >
                    <div class="w-12 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 62" xml:space="preserve"><g class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' " ><path d="M9.5 16.9c.5.6 1.3.9 1.8 1 .8.2 1.6.2 1.7.2.5 0 .9-.4 1-.9 0-.5-.4-.9-.9-.9-.6 0-1.2-.1-1.7-.3.9-.7 1.4-1.7 1.6-2.4.1-.5-.2-1-.7-1.1s-1 .2-1.2.6c-.1.2-.7 2.2-2.9 2-2.4-.1-3.2 2.2-3.4 3.5 0 .5.3.9.9 1h.1c.5 0 .9-.4.9-.8 0-.1.2-1.8 1.3-1.7.6-.1 1-.1 1.5-.2zM10.9 28.7c.1-.2.4-.3.6-.4 2.6-.7 3.3-3.1 3.3-4.3 0-.5-.4-.9-.9-.9s-.9.4-1 .9c0 .1 0 1.8-1.5 2.4-.9-.7-1.4-1.5-1.5-1.5-.3-.4-.9-.5-1.3-.3-.4.3-.6.8-.3 1.3 0 0 .5.7 1.3 1.4-.3.3-.4.5-.5.8-.5 1.3.4 2.6.5 2.8.2.3.5.4.8.4.2 0 .4 0 .5-.2.4-.3.6-.8.3-1.3-.1-.1-.4-.8-.3-1.1zM39.4 18.8h.2c.4 0 .8-.3.9-.7 0-.1.2-1.3-.5-2.2-.3-.4-1-.8-2.2-.7-2.2.1-2.8-1.8-2.9-2-.1-.5-.7-.8-1.2-.6-.5.1-.8.6-.7 1.1.2.7.7 1.6 1.6 2.4-.4.2-1 .3-1.7.3-.5 0-.9.4-.9.9s.4.9 1 .9c0 0 .8 0 1.7-.2.5-.1 1.3-.4 1.8-1h1.4c.3 0 .5 0 .6.1s.1.5.1.7c0 .4.3.9.8 1zM37.6 25.9c.3-.4.2-1-.3-1.3-.4-.3-1-.2-1.3.3 0 0-.6.8-1.5 1.5C33.1 25.7 33 24 33 24c0-.5-.4-.9-1-.9-.5 0-1 .4-1 .9 0 1.2.7 3.6 3.3 4.3.2.1.5.2.6.3.1.3-.2 1-.4 1.3-.3.4-.2 1 .2 1.3.2.1.4.2.5.2.3 0 .6-.1.8-.4.1-.2 1.1-1.6.6-2.9-.1-.2-.2-.5-.5-.7 1-.8 1.5-1.5 1.5-1.5zM44.5 45.1h-1.9v-1.8c0-.8-.7-1.4-1.5-1.4H38c-.8 0-1.5.6-1.5 1.4v1.8h-1.9c-.8 0-1.5.6-1.5 1.4v3c0 .8.7 1.4 1.5 1.4h1.9v1.8c0 .8.7 1.4 1.5 1.4h3.1c.8 0 1.5-.6 1.5-1.4V51h1.9c.8 0 1.5-.6 1.5-1.4v-3c0-.8-.6-1.5-1.5-1.5zm-.4 4h-1.9c-.8 0-1.5.6-1.5 1.4v1.8h-2.3v-1.8c0-.8-.7-1.4-1.5-1.4H35V47h1.9c.8 0 1.5-.6 1.5-1.4v-1.8h2.3v1.8c0 .8.7 1.4 1.5 1.4h1.9v2.1z"/><path d="M39.6 38.2c-1.4 0-2.6.3-3.8.7l.3-1.8C40 36.3 43 33 42.9 29c0-1.2-.3-2.3-.8-3.3 0-.1 0-.2.1-.3 2.4-1.5 3.8-4.1 3.8-6.8 0-3.4-2.1-6.4-5.5-7.6-.1 0-.2-.1-.2-.3V10c0-1.1-.3-2.2-.8-3.2-.2-.4-.8-.6-1.3-.4s-.6.8-.4 1.2c.4.7.6 1.5.6 2.3v.5c-.1.9.5 1.8 1.4 2.1 2.6 1 4.3 3.3 4.3 5.9 0 2.1-1.1 4.1-3 5.3-.9.6-1.2 1.6-.8 2.5.4.8.6 1.7.6 2.6 0 3.5-2.9 6.3-6.5 6.4-1.4 0-2.7-.3-3.9-1.1-.6-.4-1.3-.5-1.9-.2-.4.1-.9.2-1.3.2-1.9-.1-3.4-1.6-3.4-3.5v-7.7c2.9-.3 4.3-2.9 4.7-4.4.1-.5-.2-1-.7-1.1s-1 .2-1.1.7c0 0-.2.9-.8 1.6-.6.8-1.2 1.2-2 1.3v-7.6h.1c.9 0 1.9-.3 2.7-1.3.9-1.1 2.7-1 2.7-1 .5 0 1-.3 1-.8s-.3-.9-.9-1c-.1 0-2.9-.2-4.4 1.7-.4.9-.9 1-1.2 1V5.3c0-1.9 1.6-3.5 3.5-3.5 1.5 0 2.8.8 3.3 2.1.4.9 1.2 1.4 2.2 1.3h.4c.7 0 1.5.2 2.1.5.5.2 1 0 1.3-.4s0-1-.5-1.2c-.9-.4-1.9-.6-2.9-.6h-.5c-.1 0-.2 0-.3-.1-.8-2-2.8-3.3-5.1-3.3C25.7 0 24 .9 23 2.4 22 .9 20.4 0 18.5 0c-2.3 0-4.2 1.3-5.1 3.3 0 .1-.1.1-.3.1h-.5c-3.9 0-7 3-7 6.7v.7c0 .1-.1.2-.2.3C2.1 12.3 0 15.3 0 18.7c0 2.7 1.4 5.3 3.8 6.8.1.1.1.2.1.3-.5 1-.8 2.2-.8 3.3 0 3.9 2.9 7.3 6.8 8.1.4 1.4.5 2.9.3 4.4 0 .5.3.9.8 1h.1c.5 0 .9-.3.9-.8.2-1.5.1-3-.2-4.4.7 0 1.5-.1 2.2-.3l.9 3.2c.5 1.7 2.1 2.9 4 3 .2 1.1.3 2.3.4 3.5h-2.5c-1.5 0-2.8-.6-3.7-1.7-.3-.4-.9-.5-1.3-.2s-.5.9-.2 1.3c1.3 1.6 3.2 2.4 5.2 2.4h2.6c.1 3.9-.3 8-1.3 12.4-.1.5.2 1 .7 1.1s1-.2 1.1-.7c1.4-6.5 1.7-12.5.9-18.1H25c-.8 5.6-.5 11.5.9 18.1.1.4.5.7.9.7h.2c.5-.1.8-.6.7-1.1-.9-4.4-1.4-8.5-1.3-12.4h2.7c.2 5.2 4.8 9.4 10.3 9.4 1.7 0 3.5-.4 5-1.2.5-.2.6-.8.4-1.2-.3-.4-.8-.6-1.3-.4-1.2.7-2.6 1-4.1 1-4.6 0-8.4-3.6-8.4-8s3.8-8 8.4-8 8.4 3.6 8.4 8c0 1.8-.6 3.5-1.7 4.9-.3.4-.2 1 .2 1.3s1 .2 1.3-.2c1.4-1.7 2.1-3.8 2.1-6 .2-5.6-4.4-10-10.1-10zM5 29.1c0-.9.2-1.8.6-2.6.4-.9.1-2-.8-2.5-1.8-1.2-3-3.2-3-5.3 0-2.6 1.7-5 4.3-5.9.9-.3 1.5-1.2 1.4-2.1v-.5c0-2.7 2.3-4.9 5.1-4.9h.4c1 .1 1.8-.4 2.2-1.3.5-1.3 1.8-2.1 3.3-2.1 1.9 0 3.5 1.6 3.5 3.5v3.1h-.1c-.5 0-.8-.2-1.1-.6-1.4-1.8-3.7-1-4.8-.4-.4.3-.6.8-.3 1.2.3.4.9.5 1.3.2 0 0 1.6-.9 2.3-.1.8 1 1.8 1.3 2.7 1.3h.1v18.5c-2.2-.2-2.8-1.7-2.9-1.9-.2-.5-.7-.7-1.2-.6-.5.2-.8.7-.6 1.1.4 1.1 1.8 3 4.7 3.1v.4c0 1.9-1.5 3.4-3.4 3.5-.4 0-.9-.1-1.3-.2-.6-.2-1.4-.1-1.9.2-1.1.7-2.5 1.1-3.9 1.1-3.7.1-6.6-2.8-6.6-6.2zm14.2 12.3c-1.1 0-2.1-.7-2.4-1.7l-1-3.4.6-.3c.1 0 .2-.1.2 0 .6.2 1.3.3 2 .3 1.8 0 3.4-1 4.3-2.3 1 1.4 2.5 2.3 4.3 2.3.7 0 1.4-.1 2-.3h.2l.6.3-1 3.4c-.3 1-1.3 1.7-2.4 1.7h-7.4zm10.2 5.3h-2.7c.1-1.2.2-2.3.4-3.5 1.9-.1 3.5-1.3 4-3L32 37c.7.2 1.4.3 2.2.3-.2.9-.3 1.7-.3 2.6-2.5 1.5-4.1 4-4.5 6.8z"/></g></svg>
                    </div>
                    <div>
                        <h4 class="lg:text-lg"><b>Neurologia</b></h4>
                        <div class="flex items-center mt-3 gap-1">
                            <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                            <div class="w-3 h-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                            </div>
                        </div>
                    </div>
            </a>
            <a 
            href="/dr-estol/menciones" 
            class="flex cursor-pointer w-full items-center py-12 pl-20 border-gray-300 rounded-xl shadow-md lg:text-base text-2xl transition-all"
            x-data=" { hover: false }"
            x-on:mouseover="hover = true"
            x-on:mouseout="hover = false"
            :class="hover? 'breyna-bg-blue-300 text-white shadow-2xl -translate-y-3' : 'bg-white text-black'"
            >
                    <div class="w-max mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="44.3" x="0px" y="0px" viewBox="0 0 48 44" xml:space="preserve"><g class="transition-all" :class="hover? 'fill-white' : 'fill-breyna-blue' "><path d="M2.5 44.3c-.3 0-.6-.2-.7-.4-.2-.3-.1-.7.1-1 2.4-2.9 3.8-5.5 4.5-7.3H5.2c-2.9 0-5.2-2.3-5.2-5.2V5.2C0 2.3 2.3 0 5.2 0h37.6C45.7 0 48 2.3 48 5.2v25.2c0 2.9-2.3 5.2-5.2 5.2H17.1c-4.1 6.7-14 8.6-14.4 8.7h-.2zM5.2 1.7c-1.9 0-3.5 1.6-3.5 3.5v25.2c0 1.9 1.6 3.5 3.5 3.5h2.4c.3 0 .5.1.7.3.2.2.2.5.1.8-.5 1.7-1.6 4.2-3.6 7 3.2-1 8.6-3.3 11.1-7.6.1-.3.4-.4.7-.4h26.2c1.9 0 3.5-1.6 3.5-3.5V5.2c0-1.9-1.6-3.5-3.5-3.5H5.2z"/><path d="M14 27.5c-.3 0-.6-.1-.7-.4-.2-.4-.2-.8.2-1.1 1.7-1.5 2.6-4.1 3-6.1h-.8c-1.4 0-2.5-1.1-2.5-2.5v-4.1c0-1.4 1.1-2.5 2.5-2.5h4.1c1.4 0 2.5 1.1 2.5 2.5v4.1c0 .2 0 .4-.1.6-.8 6.1-7.6 9.3-7.9 9.4-.1.1-.2.1-.3.1zm1.7-15c-.5 0-.8.4-.8.8v4.1c0 .5.4.8.8.8h1.8c.2 0 .5.1.6.3.2.2.2.4.2.7-.2 1.3-.6 2.9-1.2 4.3 1.6-1.4 3.1-3.3 3.4-5.8V13.3c0-.5-.4-.8-.8-.8h-4zM26.5 27.5c-.3 0-.6-.1-.7-.4-.2-.4-.2-.8.2-1.1 1.7-1.5 2.6-4.1 3-6.1h-.8c-1.4 0-2.5-1.1-2.5-2.5v-4.1c0-1.4 1.1-2.5 2.5-2.5h4.1c1.4 0 2.5 1.1 2.5 2.5v4.1c0 .2 0 .4-.1.6-.8 6.1-7.6 9.3-7.9 9.4 0 .1-.1.1-.3.1zm1.7-15c-.5 0-.8.4-.8.8v4.1c0 .5.4.8.8.8H30c.2 0 .5.1.6.3.2.2.2.4.2.7-.2 1.3-.6 2.9-1.2 4.3 1.6-1.4 3.1-3.3 3.4-5.8V13.3c0-.5-.4-.8-.8-.8h-4z"/></g></svg>
                    </div>
                    <div>
                        <h4 class="lg:text-lg"><b>Menciones</b></h4>
                        <div class="flex items-center mt-3 gap-1">
                            <p class="lg:text-sm text-xl tracking-wide">SABER MÁS</p>
                            <div class="w-3 h-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 10" x="0px" y="0px" xml:space="preserve"><path :class="hover? 'fill-white' : 'fill-black' " d="M.8 9.5c-.2 0-.4-.1-.5-.2C0 9 0 8.5.3 8.2l3.6-3.5L.2 1.3C-.1 1-.1.5.2.2c.3-.3.8-.3 1.1 0l4.2 4c.1.1.2.3.2.5s-.1.5-.2.6l-4.2 4c-.2.1-.4.2-.5.2z"/></svg>
                            </div>
                        </div>
                    </div>
            </a>
        </div>
    </div>

</section>

@endsection