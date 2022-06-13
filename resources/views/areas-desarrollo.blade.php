@extends('layouts.plantilla')

@section('contenido')

<style>
    .max-h-0 {
  max-height: 0;
}

    .parent-2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 1.8rem;
        grid-row-gap: 1.8rem;
    }

    .parent-3 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 1.8rem;
        grid-row-gap: 1.8rem;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 1.8rem;
        grid-row-gap: 1.8rem;
    }

    main {
        padding-top: .3rem;
    }

    .article-banner {
        background-image: url(../imgs/ensayos-clinicos/hero.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        z-index: 0;
    }

    .article-banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: var(--breyna-blue);
        opacity: 60%;
        pointer-events: none;
        mix-blend-mode: multiply;
        z-index:-1;
    }

    .grupo-medico-container * {
        pointer-events: none;
    }
    
    nav ul li {
        color: black
    }

    .ensayo-li {
        border-bottom: .35rem solid #014494;
        background: linear-gradient(180deg, rgba(1, 68, 148, 0) -26.39%, rgba(1, 68, 148, 0.1) 71.69%);
    }

    nav {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.10);
    }
</style>

<div class="lg:px-20 px-4 pt-40 pb-12">
    <a class="text-gray-500 tracking-widest uppercase" href="/ensayos-clinicos"> <span class="icon-custom flechita-atras-svg mr-2"></span> Ensayos clínicos por STAT-Research</a>
    <h1 class="breyna-text-blue mt-6 text-xl"><b>Áreas de desarrollo</b></h1>
</div>

<section class="lg:px-20 px-4 pb-40">
    <h2 class="text-3xl lg:text-2xl lg:w-6/12">
        Nuestra vasta experiencia en el mercado nos ha permitido especializarnos en las siguientes áreas terapéuticas:
    </h2>

    <div class="h-fit w-full flex mt-12">
        <div class="lg:mr-8">
            <div class="grid-cols-2 grid breyna-text-blue py-2 bg-gray-100 rounded-lg mb-4">
                <p class="pl-8"><b>Especialidad</b></p>
                {{-- <p><b>Nombre</b></p> --}}
                <p><b>Estudios Activos</b></p>
                {{-- <p><b>Sponsor</b></p> --}}
            </div>
            <div class="bg-white mx-auto" x-data="{selected:null}">
                <ul class="shadow-box flex flex-col gap-4">
                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 1 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">Cardiología</span>
                                <span class="text-2xl" x-text="selected !== 1 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Fernando Botto', 'avatar' => 'botto.jpg', 'especialidad' => 'Cardiología'],
                                    ['nombre' => 'PI Dra. Patricia González Colaso ', 'avatar' => 'colaso.jpg', 'especialidad' => 'Cardiología'],
                                    ['nombre' => 'PI Dr. Augusto Lavalle Cobo', 'avatar' => 'cobo.jpg', 'especialidad' => 'Cardiología'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dra. Guadalupe Romero', 'especialidad' => 'Cardiología'],
                                        ['nombre' => 'Dra. Agustina Gelormini', 'especialidad' => 'Cardiología'],
                                        ['nombre' => 'Dra. Eliane Sasovsky', 'especialidad' => 'Cardiología'],
                                        ]"
                                />
                                <div>
                                    {{-- <x-data-tables :medicos="[['nombre' => 'PI DR. CONRADO ESTOL', 'avatar' => 'conrado.jpg', 'especialidad' => 'Neurologia']]" /> --}}
                                </div>
                                <div class="col-start-2">
                                    <p>Hipercolesterolemia</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Taquicardia paroxística supraventricular</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Lipoproteína A elevada y factor de riesgo Cardiovascular</p>
                                </div>
                            </div>
                        </div>
                    </li>
          
                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 2 ? 'bg-gray-100' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">Dermatología</span>
                                <span class="text-2xl" x-text="selected !== 2 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Mariano Marini', 'avatar' => 'marini.jpg', 'especialidad' => 'Dermatología'],
                                    ['nombre' => 'PI Dra. Tania Zarowsky', 'avatar' => 'tania.jpg', 'especialidad' => 'Dermatología'],
                                    ]"
                                />
                                <div class="col-start-2">
                                    <p>PSORIASIS</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Prurigo nodular</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Urticaria</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Lupus cutaneo</p>
                                </div>
                                <div class="col-start-2">
                                    <p>Dermatitis atópica</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Urticaria Cronica Espontanea</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Hidradenitis supurativa</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Alopecía</p>
                                </div>
                            </div>
                        </div>
                    </li>
      
                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 3 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">ENDOCRINOLOGÍA</span>
                                <span class="text-2xl" x-text="selected !== 3 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Lucas Gutnisky', 'avatar' => 'gut.jpg', 'especialidad' => 'Endocrinología'],
                                    // ['nombre' => 'PI Dr. Adrian Pioretti ', 'avatar' => 'pioretti.jpg', 'especialidad' => 'Endocrinología'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dra. María Angeles Asensio', 'especialidad' => 'Endocrinología'],
                                        ['nombre' => 'Dra. Lorena Katzin', 'especialidad' => 'Endocrinología'],
                                        ['nombre' => 'Lic. Nutrición Melany Carlovich', 'especialidad' => 'Endocrinología'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>Sobepeso y Obesidad</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Diabetes</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Nefropatía</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 4 ? selected = 4 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 4 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">NEUROLOGÍA</span>
                                <span class="text-2xl" x-text="selected !== 4 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Conrado Estol', 'avatar' => 'conrado.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dr. Ricardo Alonso', 'avatar' => 'alonso.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dra. Analía De Navarrete ', 'avatar' => 'navarrete.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dra. Eugenia Conti', 'avatar' => 'conti.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dra. Constanza Garcia Mendez ', 'avatar' => 'garcia.jpg', 'especialidad' => 'Neurologia'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dr. Nicolas Morera', 'especialidad' => 'Neurologia'],
                                        ['nombre' => 'Dra. Cecilia Pita', 'especialidad' => 'Neurologia'],
                                        ]"
                                />
                                <div class="col-start-2 space-y-3">
                                    <p>Hipotensión ortostatica</p>
                                    <p class="">Amiloidosis</p>
                                    <p class="">Esclerosis múltiple</p>
                                    <p class="">Alzheimer</p>
                                    <p class="">ACV</p>
                                    <p class="">ELA</p>
                                    <p>Miastenia Gravis</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 4 ? selected = 4 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 4 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">NEUROLOGÍA</span>
                                <span class="text-2xl" x-text="selected !== 4 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Conrado Estol', 'avatar' => 'conrado.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dr. Ricardo Alonso', 'avatar' => 'alonso.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dra. Analia Navarrete ', 'avatar' => 'navarrete.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dra. Eugenia Conti', 'avatar' => 'conti.jpg', 'especialidad' => 'Neurologia'],
                                    ['nombre' => 'PI Dra. Constanza Garcia Mendez ', 'avatar' => 'garcia.jpg', 'especialidad' => 'Neurologia'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dr. Nicolas Morera', 'especialidad' => 'Neurologia'],
                                        ['nombre' => 'Dra. Cecilia Pita', 'especialidad' => 'Neurologia'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>Hipotensión ortostatica</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Amiloidosis</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Esclerosis múltiple</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">Alzheimer</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">ACV</p>
                                </div>
                                <div class="col-start-2">
                                    <p class="">ELA</p>
                                </div>
                                <div class="col-start-2">
                                    <p>Miastenia Gravis</p>
                                </div>
                            </div>
                        </div>
                    </li> --}}

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 5 ? selected = 5 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 5 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">NEUMONOLOGÍA</span>
                                <span class="text-2xl" x-text="selected !== 5 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container5" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Juan GImenez Salazar', 'avatar' => 'salazar.jpg', 'especialidad' => 'NEUMONOLOGÍA'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dr. Mauro Zeolla', 'especialidad' => 'NEUMONOLOGÍA'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>EPOC-Enfermedad pulmonar obstructiva crónica</p>
                                </div>
                                <div class="col-start-2">
                                    <p>Fibrosis Pulmonar idiopática</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 6 ? selected = 6 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 6 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">HEPATOLOGÍA</span>
                                <span class="text-2xl" x-text="selected !== 6 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container6" x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Esteban Gonzalez Ballerga', 'avatar' => 'ballerga.jpg', 'especialidad' => 'HEPATOLOGÍA'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dr. Daniel Álvarez', 'especialidad' => 'HEPATOLOGÍA'],
                                        ['nombre' => 'Dra. Andrea Curia', 'especialidad' => 'HEPATOLOGÍA'],
                                        ['nombre' => 'Dra. Gisela Sotera', 'especialidad' => 'HEPATOLOGÍA'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>COLANGITIS PRIMARIA</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 7 ? selected = 7 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 7 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">REUMATOLOGÍA</span>
                                <span class="text-2xl" x-text="selected !== 7 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container7" x-bind:style="selected == 7 ? 'max-height: ' + $refs.container7.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Jorge Alejandro Brigante', 'avatar' => 'brigante.jpg', 'especialidad' => 'REUMATOLOGÍA'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dra. Romina Quiroz', 'especialidad' => 'REUMATOLOGÍA'],
                                        ['nombre' => 'Dra Gimena Gómez', 'especialidad' => 'REUMATOLOGÍA'],
                                        ['nombre' => 'Dra. Mora Galán', 'especialidad' => 'REUMATOLOGÍA'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>Arteritis de celulas gigantes</p>
                                </div>
                                <div class="col-start-2">
                                    <p>Lupus eritematoso sistémico</p>
                                </div>
                                <div class="col-start-2">
                                    <p>Artritis Psoriásica juvenil</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 8 ? selected = 8 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 8 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">PSIQUIATRÍA</span>
                                <span class="text-2xl" x-text="selected !== 8 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container8" x-bind:style="selected == 8 ? 'max-height: ' + $refs.container8.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dr. Marcos Suffriti', 'avatar' => 'sufriti.jpg', 'especialidad' => 'PSIQUIATRÍA'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dra. Josefina Carro Arias', 'especialidad' => 'PSIQUIATRÍA'],
                                        ['nombre' => 'Dra. Eugenia Ubeira', 'especialidad' => 'PSIQUIATRÍA'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>Depresión con insomnio</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 9 ? selected = 9 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 9 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">Infectología</span>
                                <span class="text-2xl" x-text="selected !== 9 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container9" x-bind:style="selected == 9 ? 'max-height: ' + $refs.container9.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dra. Verónica Latal Ridilenir', 'avatar' => 'latal.jpg', 'especialidad' => 'Infectología'],
                                    ]"
                                />
                                <div class="col-start-2">
                                    <p>VIH</p>
                                </div>
                                <div class="col-start-2">
                                    <p>COVID-19</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 10 ? selected = 10 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 10 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">Gastroenterología</span>
                                <span class="text-2xl" x-text="selected !== 10 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container10" x-bind:style="selected == 10 ? 'max-height: ' + $refs.container10.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Dra. María Eugenia Linares', 'avatar' => 'linares.jpg', 'especialidad' => 'Gastroenterología'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dr. Mariano Biagioni', 'especialidad' => 'Gastroenterología'],
                                        ['nombre' => 'Dr. Andrés Wonaga', 'especialidad' => 'Gastroenterología'],
                                        ['nombre' => 'Dra. Olga Quintero', 'especialidad' => 'Gastroenterología'],
                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>Colitis Ulcerosa</p>
                                </div>
                                <div class="col-start-2">
                                    <p>Enfermedad de Crohn</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="relative">
                        <button type="button" class="w-full text-left" @click="selected !== 11 ? selected = 11 : selected = null">
                            <div class="w-full py-3 px-8 flex items-center justify-between rounded-lg transition-all"
                            x-bind:class="selected == 11 ? 'bg-gray-100 ' : 'bryena-bg-blue text-white'"
                            >
                                <span class="uppercase font-medium">Oncología</span>
                                <span class="text-2xl" x-text="selected !== 11 ? '+' : '-'"></span>
                            </div>
                        </button>
      
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700 bg-gray-100 text-black rounded-lg" style="" x-ref="container11" x-bind:style="selected == 11 ? 'max-height: ' + $refs.container11.scrollHeight + 'px' : ''">
                            <div class="grid grid-cols-2 uppercase h-fit py-4 px-3.5 gap-4">
                                <x-data-tables :medicos="[
                                    ['nombre' => 'PI Máximo Barros', 'avatar' => 'oncologia.jpg', 'especialidad' => 'Oncología'],
                                    ]"
                                    :subs="[
                                        ['nombre' => 'Dr. Joaquin Girola', 'especialidad' => 'Oncología'],

                                        ]"
                                />
                                <div class="col-start-2">
                                    <p>CA de mama</p>
                                </div>
                                <div class="col-start-2">
                                    <p>CA de próstata</p>
                                </div>
                                <div class="col-start-2">
                                    <p>CA pulmón</p>
                                </div>
                                <div class="col-start-2">
                                    <p>CA riñon</p>
                                </div>
                                <div class="col-start-2">
                                    <p>CA cérvix y colorrectal </p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
          </div>
        </div>
        </div>
</section>
@endsection