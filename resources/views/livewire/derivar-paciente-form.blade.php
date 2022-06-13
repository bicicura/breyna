    <div 
    x-show="showDerivar"
    @keydown.escape.window = "showDerivar = false"
    class="top-0 left-0 w-full min-h-screen fixed flex justify-center items-center realtive cursor-default px-10 lg:px-0"
    style="z-index: 778; display:none">
        <div class="absolute inset-0 m-auto bg-black opacity-70"
        x-show="showDerivar"
        x-transition:enter.duration.300ms 
        x-transition:leave.duration.150ms
        ></div>
        <form
        x-show="showDerivar"
        wire:submit.prevent="enviarFormDerivar"
        x-transition:enter.duration.500ms
        x-transition:enter.scale.80
        x-transition:leave.duration.300ms
        x-transition.delay.100ms
        class="relative bg-white flex flex-col w-full lg:w-7/12 max-w-2xl mx-auto py-8 px-8 gap-6 opacity-100 rounded-xl shadow-md" @click.away="showDerivar = false">
            <div class="absolute -right-8 -top-8 cursor-pointer z-100    bg-gray-100 p-4 cursor-pointer z-100 rounded-full shadow-md" x-on:click="showDerivar = false">
                <span class="icon-custom close-gray-svg"></span>
            </div>
            @if ($flagDerivar)
            <div class="w-40 h-70 mx-auto">
                <img src="/imgs/icons/formContactoExito.png" alt="">
            </div>
            <div x-init="loading = false" class="text-center">
                <h2 class="breyna-text-blue text-3xl">¡Listo!</h2>
                <h3 class="breyna-text-blue text-2xl">Tus datos fueron enviados</h3>
                <p class="w-7/12 mx-auto mt-4">Pronto nos pondremos en contacto para terminar la derivación del paciente.</p>
            </div>
            @else
            <h2 class="text-center text-3xl breyna-text-blue">Derivar paciente</h2>
            <div>
                <input wire:model="nombreDerivar" class="w-full border-2 border-gray-300 py-3 px-6 rounded-xl" placeholder="Nombre de médico derivador" type="text" class="email">
                @error('nombreDerivar') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model="emailDerivar" class="w-full border-2 border-gray-300 py-3 px-6 rounded-xl" type="email" placeholder="E-mail de contacto">
                @error('emailDerivar') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model="telDerivar" class="w-full border-2 border-gray-300 py-3 px-6 rounded-xl" placeholder="Teléfono de contacto" type="tel" name="" id="">
                @error('telDerivar') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model="patologiaDerivar" class="w-full border-2 border-gray-300 py-3 px-6 rounded-xl" placeholder="Patología" type="text" class="email">
                @error('patologiaDerivar') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div>
                <input wire:model="mensajeDerivar" class="w-full border-2 border-gray-300 py-3 px-6 rounded-xl" placeholder="Mensaje" type="text" class="email">
                @error('mensajeDerivar') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <button @click="loading = true" class="bryena-bg-blue uppercase flex items-center w-full rounded-xl p-4 py-3 text-white breyna-text-bold tracking-widest justify-center disabled:opacity-50 transition-opacity duration-150 ease-in-out">
                <svg wire:loading wire:target="enviarFormDerivar" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                <span>ENVIAR</span>
            </button>
            <div>
                <p class="text-center lg:text-sm text-lg">Para obtener mayor información contactarse a</p>
                <div class="flex lg:gap-12 justify-between lg:justify-around mt-6">
                    <div class="w-max flex items-center gap-4">
                        <div class="w-10">
                            <img src="imgs/icons/phone.svg" alt="">
                        </div>
                        <div>
                            <p class="lg:text-sm text-lg">E-MAIL</p>
                            <p class="lg:text-sm text-lg breyna-text-blue w-max"><b>info@stat–research.com</b></p>
                        </div>
                    </div>
                    <div class="w-max flex items-center gap-4 lg:gap-0">
                        <div class="w-10">
                            <img src="imgs/icons/message.svg" alt="">
                        </div>
                        <div>
                            <p class="lg:text-sm text-lg">TELEFONO</p>
                            <p class="lg:text-sm text-lg breyna-text-blue w-max"><b>+54 11 4816-6733</b></p>
                            <p class="lg:text-sm text-lg breyna-text-blue w-max"><b>+54 911 5332-3196</b></p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </form>
    </div>