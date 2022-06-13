<form
x-data="{ loading: false }"
wire:submit.prevent="enviarFormMap"
style="z-index: 3" :class="contacto? '' : 'lg:absolute lg:top-12 lg:right-12 my-24'" class="w-full lg:w-max p-8 shadow-md flex rounded-xl bg-white flex-col gap-6 lg:mt-0">
    <div>
        <input wire:model="nombreMap" class="w-full border-2 border-gray-300 p-3 rounded-xl" type="text" placeholder="Nombre y apellido">
        @error('nombreMap') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>
    <div class="w-full">
        <input wire:model="emailMap" class="w-full border-2 border-gray-300 p-3 rounded-xl" type="e-mail" name="" id="" placeholder="E-mail">
        @error('emailMap') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>
    <div class="w-full">
        <input wire:model="telMap" class="w-full border-2 border-gray-300 p-3 rounded-xl" type="tel" name="" id="" placeholder="Teléfono">
        @error('telMap') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>
    <div class="w-full">
        <textarea wire:model="textareaMap" class="w-full border-2 border-gray-300 p-3 h-28 rounded-xl" name="" id="" cols="30" rows="10" placeholder="Escriba su mensaje aquí"></textarea>
        @error('textareaMap') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>
    
    <button @click="loading = true" class="bryena-bg-blue flex items-center w-full rounded-xl p-4 py-3 text-white breyna-text-bold tracking-widest justify-center disabled:opacity-50 transition-opacity duration-150 ease-in-out">
        <svg wire:loading wire:target="enviarFormMap" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
        <span>Enviar</span>
    </button>


    @if ($flagMap)
            <span class="text-green-500 text-center" x-init="loading = false"><b>¡Mensaje Enviado, nos pondremos en contacto!</b></span>
    @endif
    <div>
        <p class="text-center lg:text-sm text-lg">Para obtener mayor información contactarse a</p>
        <div class="flex lg:gap-8 justify-between mt-6">
            <div class="w-max lg:w-full flex items-center gap-4">
                <div class="w-10">
                    <img src="imgs/icons/phone.svg" alt="">
                </div>
                <div>
                    <p class="lg:text-sm text-lg">E-MAIL</p>
                    <p class="lg:text-sm text-lg breyna-text-blue w-max"><b>{{$email}}</b></p>
                </div>
            </div>
            <div class="w-max lg:w-full flex items-center gap-4 lg:gap-0">
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
</form>

