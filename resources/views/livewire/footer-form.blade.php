<footer x-data="footer" style="z-index: 100" class="lg:px-20 px-10 bryena-bg-blue text-white pb-12 pt-40 lg:pt-36 relative">

    @livewire('solicitar-turno-form')

    <section class="lg:mx-20 absolute left-0 right-0" style="top: -60px">
        <div class="lg:mx-20 mx-10">
            <div class="py-8 mx-auto lg:px-20 px-10 bg-white full-rounded w-full drop-shadow-2xl mx-auto rounded-md flex flex-col lg:flex-row text-center lg:text-left">
                <h3 class="lg:w-8/12 mx-auto text-3xl text-gray-500 {{$ensayos? 'hidden' : ''}}">Centro de salud con especialistas en neurología, cardiología y prevención de enfermedad vascular</h3>
                <button @click="showTurnoForm = true" {{$ensayos? 'hidden' : ''}} class="bryena-bg-blue mx-auto w-full text-xl lg:text-base lg:w-max uppercase h-fit text-white my-auto py-5 lg:py-3 px-16 rounded-lg tracking-wide mt-4 breyna-text-bold">Solicitar turno</button>
                <a href="/contacto" class="bryena-bg-blue mx-auto shadow-md w-full {{!$ensayos? 'hidden' : ''}} text-xl lg:text-base lg:w-max uppercase h-fit text-white my-auto py-5 lg:py-3 px-16 rounded-lg tracking-wide mt-4 breyna-text-bold">CONTACTO</a>
            </div>
        </div>
    </section>
    <div class="w-full flex lg:flex-row lg:justify-between flex-col gap-6 lg:gap-0 mt-6 lg:mt-0">
            <div class="w-full lg:text-base text-2xl">
                <p>asistente@breyna.com</p>
                <p>+54 11 4811 1875  /  +54 11 4816 6733</p>
            </div>
            <div class="w-full flex lg:justify-center">
                <div class="w-60">
                    <img src="/imgs/index/logo.svg" class="logo" alt="">
                </div>
            </div>
            <div class="w-full flex lg:justify-end items-center gap-4">
                <div class="w-8">
                    <a target="_blank" href="https://www.instagram.com/breyna.salud/">
                        <img src="/imgs/icons/ig.svg" alt="">
                    </a>
                </div>
            </div>
    </div>
    <div class="w-full flex justify-between border-t border-white mt-8 pt-8 text-2xl lg:text-base">
        <div class="w-full hidden lg:block">
            <p>Powered by <b>La Juanita Media</b></p>
        </div>
        <div class="w-full flex justify-center">
            <p>© Breyna 2022. Todos los derechos reservados.</p>
        </div>
        <div class="w-full flex justify-end">
            <div id="scrollTopBtn" class="flex items-center cursor-pointer gap-2">
                <span>Subir</span>
                <img src="/imgs/icons/topBtn.svg" alt="">
            </div>
        </div>
    </div>

    

    {{-- <section 
    x-show="showFooterForm"
    @keydown.escape.window = "showFooterForm = false"
    class="w-full min-h-screen fixed flex inset-0 justify-center items-center realtive"
    style="z-index: 778; display:none">
        <div class="absolute inset-0 m-auto bg-black opacity-70"
        x-show="showFooterForm"
        x-transition:enter.duration.300ms 
        x-transition:leave.duration.150ms>
        </div>
        <form
        wire:submit.prevent="storeFooter"
        x-show="showFooterForm"
        x-transition:enter.duration.500ms
        x-transition:enter.scale.80
        x-transition:leave.duration.300ms
        x-transition.delay.100ms
        class="relative bg-white flex flex-col text-3xl lg:text-base w-full text-black lg:w-7/12 mx-10 lg:mx-auto py-16 px-8 gap-8 opacity-100 rounded-xl shadow-md max-w-3xl" action="" @click.away="showFooterForm = false">
            <div class="absolute right-12 top-12 cursor-pointer" @click="showFooterForm = false">
                <span class="icon-custom close-gray-svg"></span>
            </div>
            @if ($flagMailFooter)
            <div class="w-40 h-70 mx-auto">
                <img src="/imgs/icons/formContactoExito.png" alt="">
            </div>
            <div class="text-center">
                <h2 class="breyna-text-blue text-3xl">¡Listo!</h2>
                <h3 class="breyna-text-blue text-2xl">Tus datos fueron enviados</h3>
                <p class="w-7/12 mx-auto text-2xl lg:text-base mt-4">Pronto nos pondremos en contacto para terminar de coordinar tu turno médico</p>
            </div>        
            @else
            <h2 class="text-center text-4xl lg:text-3xl breyna-text-blue">Solicitar turno</h2>
            <div>
                <div class="flex gap-6">
                    <input wire:model="nombreFooter" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="Nombre" type="text">
                    <input wire:model="apellidoFooter" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="Apellido" type="text">
                </div>
                @error('nombreFooter') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                @error('apellidoFooter') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model="emailFooter" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="E-mail" type="email" class="email">
                @error('emailFooter') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model="telefonoFooter" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="Teléfono" type="tel" name="" id="">
                @error('telefonoFooter') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <div class="w-full border-2 border-gray-300 rounded-xl pr-8">
                    <select wire:model="especialidadFooter" x-on:change="filter = $event.target.value" x-ref="especialidad" class="w-full py-4 px-6 rounded-xl" name="especialidad" id="especialidad">
                        <option value="" selected>Especialidad</option>
                        <option value="neurologia">Neurología</option>
                        <option value="cardiologia">Cardiología</option>
                        <option value="Prevención de Enfermedad Vascular">Prevención de Enfermedad Vascular</option>
                    </select>
                </div>
                @error('especialidadFooter') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <div class="w-full border-2 border-gray-300 rounded-xl pr-8">
                    <select wire:model="medicoFooter" class="w-full py-4 px-6 rounded-xl" name="" id="">
                        <option value="" selected>Médicos</option>
                        <template  x-for="especialidad in filteredMedicos" :key="especialidad.id">
                            <option x-bind:value="especialidad.medico" x-text="especialidad.medico"></option>
                        </template>
                    </select>
                </div>
                @error('medicoFooter') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <button @click="showSpinnerTurnoForm = true" type="" class="bryena-bg-blue uppercase w-full rounded-xl p-4 text-white breyna-text-bold tracking-widest">ENVIAR</button>
            @endif
        </form>
    </section> --}}

</footer>