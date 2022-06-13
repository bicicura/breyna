@props(['name'])

<div 
id="{{ $name }}" 
style="z-index: 1000" 
x-data="{ show: false }" 
x-show="show" 
x-on:modal.window="show = true"
@keydown.escape.window = "show = false">
    <div class="fixed inset-0 bg-gray-900 opacity-90"></div>

    <div class="bg-white shadow-md max-w-3xl h-fit rounded-md fixed inset-0 m-auto rounded-2xl overflow-hidden">
        <span class="absolute right-4 top-4 text-xl" @click="show = false">X</span>
        <div class="flex flex-col h-full justify-between">
            <div class="w-full py-40 bg-no-repeat bg-cover" style="background-image: url(../imgs/grupo-medico/conrado-lg.jpg)">

            </div>
            <div class=" bg-white w-full p-6">
                <p class="mb-6 text-2xl breyna-text-blue"><b>Dr. Conrado J. Estol</b></p>
                <ul class="flex flex-col justify-between gap-2">
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p>Médico especialista en Neurología y Enfermedad Cerebrovascular Certificado por el Consejo de Psiquiatría y Neurología de los EE.UU.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p>Fundador y director de Breyna, STAT-Research</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p>Director de la Unidad de ACV del Sanatorio Guemes</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p>Co-fundador de Biomakers</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>