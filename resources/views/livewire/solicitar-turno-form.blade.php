<section 
    x-show="showTurnoForm"
    @keydown.escape.window = "closeAll()"
    class="w-full min-h-screen fixed flex justify-center items-center top-0 left-0"
    style="z-index: 778; display:none">
        <div class="absolute inset-0 m-auto bg-black opacity-70"
        x-show="showTurnoForm"
        x-transition:enter.duration.300ms 
        x-transition:leave.duration.150ms></div>
        <form
        wire:submit.prevent="store"
        x-show="showTurnoForm"
        x-transition:enter.duration.500ms
        x-transition:enter.scale.80
        x-transition:leave.duration.300ms
        x-transition.delay.100ms
        class="relative bg-white flex flex-col w-full text-2xl text-black lg:text-base lg:w-7/12 mx-10 lg:mx-auto py-16 lg:py-10 px-8 space-y-6 opacity-100 rounded-xl shadow-md max-w-3xl" action="" @click.away="showTurnoForm = false">
            <div class="absolute right-12 top-12 cursor-pointer" @click="showTurnoForm = false">
                <span class="icon-custom close-gray-svg"></span>
            </div>
            @if ($flagMail)
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
                    <input wire:model.defer="nombre" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="Nombre y Apellido" type="text">
                    @error('nombre') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model.defer="email" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="E-mail" type="email" class="email">
                @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model.defer="telefono" class="w-full border-2 border-gray-300 py-4 px-6 rounded-xl" placeholder="Teléfono" type="tel" name="" id="">
                @error('telefono') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <div class="w-full border-2 border-gray-300 rounded-xl pr-8">
                    <select wire:model.defer="especialidad" x-on:change="filter = $event.target.value; Livewire.emit('changedInput')" x-ref="especialidad" x-model="est" x-init="est = ''" class="w-full py-4 px-6 rounded-xl focus:outline-0">
                        <option value="" disabled>Especialidad</option>
                        <option value="neurologia">Neurología</option>
                        <option value="clinica">Clínica</option>
                        <option value="cardiologia">Cardiología</option>
                        <option value="nutricion">Nutrición</option>
                        <option value="endocrinologia">Endocrinología</option>
                        <option value="deportologia">Deportología</option>
                        <option value="terapista">Terapia Ocupacional</option>
                        <option value="psicologia">Psicología</option>
                        <option value="fonoaudiologia">Fonoaudiología</option>
                        <option value="kinesiologia">Kinesiología</option>
                    </select>
                </div>
                @error('especialidad') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            
            <div >
                <div class="w-full border-2 border-gray-300 rounded-xl pr-8" wire:ignore>
                    <select wire:model.defer="medico" x-ref="medicoInput" class="w-full py-4 px-6 rounded-xl focus:outline-0">
                        <option value="" class="text-black">Médicos</option>
                        <template x-if="especialidadSelected"  x-for="especialidad in filteredMedicos" :key="especialidad.id">
                            <option x-bind:value="especialidad.medico" x-text="especialidad.medico"></option>
                        </template>
                    </select>
                </div>
                @error('medico') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>

            <button class="bryena-bg-blue uppercase flex items-center w-full rounded-xl p-4 py-3 text-white breyna-text-bold tracking-widest justify-center disabled:opacity-50 transition-opacity duration-150 ease-in-out">
                <svg wire:loading wire:target="store" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                <span>ENVIAR</span>
            </button>
            @endif
        </form>
    </section>