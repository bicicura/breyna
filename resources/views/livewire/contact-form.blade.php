<header x-data="nav()">
    <nav x-show="navMob" style="display: none" class="lg:hidden fixed flex w-full justify-between">
        <header style="z-index: 100; background-color: rgba(1, 68, 148, .3)" class="px-10 h-24 w-full flex items-center justify-between text-black backdrop-blur-md">
            <button
                    x-on:click="open = !open"
                    class="flex items-center space-x-2 focus:outline-none">
              
              <div class="w-10 flex items-center justify-center relative">
                <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-3'"
                      class="transform transition w-full h-1 bg-current absolute"></span>
                
                <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'"
                      class="transform transition w-full h-1 bg-current absolute"></span>
                
                <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-3'"
                      class="transform transition w-full h-1 bg-current absolute"></span>
              </div>
            </button>
            <a href="/">
                <svg  class="breyna-svg-logo" viewBox="35 0 100 40"><path class="breyna-heart" fill="#FFF" d="M27.3 0c4.2 0 8.4 3.8 8.9 8.7.4 3.5-.7 6.4-3.1 8.9C27.9 23 22.7 28.5 17.5 34c-.5.6-.8 1.1-.5 1.9.3.6.8.8 1.4.7.7-.1 1.4-1.1 1.1-1.7l-.2-.5 1.7-1.6c.3.4.6.8.8 1.3.3.8.3 1.7-.1 2.5-.3.8-.9 1.5-1.7 1.9-.8.4-1.6.6-2.5.5s-1.7-.6-2.2-1.2c-1.2-1.4-1.2-3.4-.1-4.8.4-.5 1.1-1.4 1.1-1.4s-.7-.9-1.1-1.3c-3.8-4.1-7.5-8-11.2-11.8-1.9-1.9-3.4-4-3.8-6.8C-.6 7.5 1.6 3 5.5 1c3.5-1.9 8-1.1 11 1.9l.6.6-1.8 1.6-.6-.6c-1.9-2-4.3-2.7-7-1.8-2.9.9-4.5 3-5.1 5.9-.5 2.7.2 5 2.1 7 4.3 4.6 8.7 9.1 13 13.6l.5.5s.2-.2.5-.4c4.5-4.7 9.1-9.4 13.5-14.2 2.2-2.4 2.4-5.4 1-8.4-1.3-2.8-3.6-4.3-6.7-4.3-.9 0-1.8.2-2.6.5-.8.4-1.6.9-2.2 1.6-.6.6-1.8 2.1-1.8 2.1s1.2 1 1.7 1.6c.9 1 1.8 2 2.2 3.4.3 1.3.2 2.6-.3 3.8s-1.5 2.2-2.6 2.8c-2.4 1.2-5.4.7-7.1-1.3-1.8-2.1-2-5.2-.2-7.3 2.2-2.5 4.5-5 6.9-7.2C22.2.7 24.3 0 27.3 0zm-5.8 13c0-.6-.1-1.2-.5-1.7-.8-1.1-1.7-1.9-2.6-2.9l-.3-.3s-.1.2-.2.3c-.8.8-1.6 1.6-2.3 2.5-1 1.2-1 2.8-.1 4.1.4.6 1 1 1.7 1.3s1.4.2 2.1 0 1.3-.7 1.7-1.3c.4-.6.6-1.3.5-2z"/><g fill="#FFF"><path class="logo-text" d="M116.1 22c-1.8 1.8-3.8 2.3-6 2-3.4-.5-5.3-2.6-5.4-6-.1-1.9 0-6.3 0-6.3h3.1V14c0 1.4-.1 2.8.1 4.2.4 2.1 1.7 3.3 3.9 3.2 2.3 0 3.8-1.4 4.1-3.5.2-1.7.2-6.2.2-6.2h3.1s0 8.1-.1 11c0 2-.3 4-1.7 5.6-1.4 1.7-3.4 2.2-5.5 2.3-2.1.1-4.2-.4-6-1.6-.3-.2-.6-.4-.8-.7l1.2-2.2 1.2.7c1.6.9 3.4 1.2 5.2.9 1.6-.2 2.8-1.3 3.1-3 .2-.8.2-1.6.3-2.7zM58.8 19.6c1.8.8 2.8 2.2 2.7 4.1 0 2.2-1.6 3.9-4.2 4.2-3.3.4-10.3.2-10.3.2V11.8s6.6-.2 9.6.2c.8.1 1.5.4 2.2.8.5.3 1 .8 1.3 1.3s.5 1.1.6 1.8c.1.6 0 1.3-.3 1.9-.2.6-.6 1.1-1.1 1.5-.1-.1-.3.1-.5.3zm-5.5 6h2.6c.9-.1 1.7-.3 2.2-1.1 1-1.4 0-3.2-1.9-3.5s-6.1 0-6.1 0v4.5l3.2.1zm-.5-7.1c.8 0 1.6.1 2.4 0 1.5-.1 2.3-1 2.3-2.3 0-1.1-.9-2-2.3-2-1.5-.1-5.1 0-5.1 0v4.3h2.7zM137.4 11.6h3.1v16.3h-2.3s-5.9-6.8-8.3-9.8c-.2-.3-.8-1.1-.8-1.1v11h-3V11.6h2.4s.8.9 1.2 1.5c2.4 3.1 7.7 9.5 7.7 9.5v-11zM81.4 28h-3.2s-1.2-1.7-1.7-2.3c-.8-1.2-1.2-2.4-5.4-2.4h-.5V28h-3.1V11.6s5.9-.1 8.4.2c5.3.8 6.1 5.7 4.4 8.7-.5.8-2.6 2.2-2.6 2.2s2.1 3.2 3 4.4c.3.3.5.6.7.9zM70.5 17.6v3.2s3.2.1 4.5-.1c1.8-.1 2.8-1.3 2.9-2.9.1-1.9-.7-3-2.6-3.3-1.5-.3-4.9-.1-4.9-.1s.1 2.3.1 3.2zM87.2 19.9v-8.2h11.9v2.5l-8.9.1v4.3h8V21h-8v4.3h9.2V28l-12.3.1s.1-5.8.1-8.2zM145.4 28l7.2-16.3h3l7.4 16.4h-3l-1.8-3.8h-8l-1.8 3.8h-3V28zm8.7-13.2c-1 2.3-2.9 6.9-2.9 6.9h6c-.1 0-2.1-4.5-3.1-6.9z"/></g></svg>
            </a>
            <div style="background: #305F96" class="w-12 h-12 rounded-full flex items-center justify-center cursor-pointer" @click="toggleSearchMob()">
                <img style="max-width: 48%" src="/imgs/index/icon-lupa.svg" alt="">
            </div>
        </header>
        <div x-show="open"
        x-transition:enter.duration.300ms
        x-transition:leave.duration.200ms
        class="min-h-screen fixed breyna-bg-blue w-full bryena-bg-blue px-10 py-40">
            <div class="trama-mob"></div>
            <ul class="text-3xl space-y-8">
                <li class="text-white">
                    <a href="/institucional">Institucional</a>
                </li>
                <li class="relative">
                    <button type="button" class="w-full text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="w-full flex items-center gap-4 rounded-lg transition-all text-white">
                            <a href="/servicios">Servicios Médicos</a>
                            <p class="text-2xl" x-text="selected !== 1 ? '+' : '-'"></p>
                        </div>
                    </button>
  
                    <div class="relative overflow-hidden transition-all text-white max-h-0 duration-700 text-black rounded-lg" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <ul class="h-fit py-4 list-disc ml-12 text-3xl text-white space-y-4">
                            <li>
                                <a href="/neurologia">Neurología</a>
                            </li>
                            <li>
                                <a href="/cardiologia">Cardiología</a>
                            </li>
                            <li>
                                <a href="/prevencion-enfermedad-vascular">Prevención de Enfermedad Vascular</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="text-white">
                    <a href="/grupo-medico">Grupo médico</a>
                </li>
                <li class="relative">
                    <button type="button" class="w-full text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                        <div class="w-full flex items-center gap-4 rounded-lg transition-all text-white">
                            <a href="/dr-estol">Dr. Estol</a>
                            <p class="text-2xl" x-text="selected !== 2 ? '+' : '-'"></p>
                        </div>
                    </button>
  
                    <div class="relative overflow-hidden transition-all text-white max-h-0 duration-700 text-black rounded-lg" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                        <ul class="h-fit py-4 list-disc ml-12 text-3xl space-y-4">
                            <li>
                                <a href="/dr-estol/acv">ACV</a>
                            </li>
                            <li>
                                <a href="/dr-estol/neurologia">Neurología</a>
                            </li>
                            <li>
                                <a href="/dr-estol/menciones">Menciones</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="relative">
                    <button type="button" class="w-full text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                        <div class="w-full flex items-center gap-4 rounded-lg transition-all text-white">
                            <a href="/ensayos-clinicos">Ensayos clínicos</a>
                            <span class="text-2xl" x-text="selected !== 3 ? '+' : '-'"></span>
                        </div>
                    </button>
  
                    <div class="relative overflow-hidden transition-all text-white max-h-0 duration-700 text-black rounded-lg" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                        <ul class="h-fit py-4 list-disc ml-12 text-3xl space-y-4">
                            <li>
                                <a href="/areas-de-desarrollo">Áreas de desarrollo</a>
                            </li>
                            <li>
                                <a href="/nuestro-staff">Nuestro Staff</a>
                            </li>
                            <li>
                                <a href="/infraestructura">Infraestructura</a>
                            </li>
                            <li>
                                <a href="/sponsors">Sponsors</a>
                            </li>
                            <li>
                                <a href="/contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <nav x-show="showNav" style="display: none" class="hidden lg:flex w-full px-20 items-center absolute">
            <a href="/">
                <svg  class="breyna-svg-logo" viewBox="35 0 100 40"><path class="breyna-heart" fill="#FFF" d="M27.3 0c4.2 0 8.4 3.8 8.9 8.7.4 3.5-.7 6.4-3.1 8.9C27.9 23 22.7 28.5 17.5 34c-.5.6-.8 1.1-.5 1.9.3.6.8.8 1.4.7.7-.1 1.4-1.1 1.1-1.7l-.2-.5 1.7-1.6c.3.4.6.8.8 1.3.3.8.3 1.7-.1 2.5-.3.8-.9 1.5-1.7 1.9-.8.4-1.6.6-2.5.5s-1.7-.6-2.2-1.2c-1.2-1.4-1.2-3.4-.1-4.8.4-.5 1.1-1.4 1.1-1.4s-.7-.9-1.1-1.3c-3.8-4.1-7.5-8-11.2-11.8-1.9-1.9-3.4-4-3.8-6.8C-.6 7.5 1.6 3 5.5 1c3.5-1.9 8-1.1 11 1.9l.6.6-1.8 1.6-.6-.6c-1.9-2-4.3-2.7-7-1.8-2.9.9-4.5 3-5.1 5.9-.5 2.7.2 5 2.1 7 4.3 4.6 8.7 9.1 13 13.6l.5.5s.2-.2.5-.4c4.5-4.7 9.1-9.4 13.5-14.2 2.2-2.4 2.4-5.4 1-8.4-1.3-2.8-3.6-4.3-6.7-4.3-.9 0-1.8.2-2.6.5-.8.4-1.6.9-2.2 1.6-.6.6-1.8 2.1-1.8 2.1s1.2 1 1.7 1.6c.9 1 1.8 2 2.2 3.4.3 1.3.2 2.6-.3 3.8s-1.5 2.2-2.6 2.8c-2.4 1.2-5.4.7-7.1-1.3-1.8-2.1-2-5.2-.2-7.3 2.2-2.5 4.5-5 6.9-7.2C22.2.7 24.3 0 27.3 0zm-5.8 13c0-.6-.1-1.2-.5-1.7-.8-1.1-1.7-1.9-2.6-2.9l-.3-.3s-.1.2-.2.3c-.8.8-1.6 1.6-2.3 2.5-1 1.2-1 2.8-.1 4.1.4.6 1 1 1.7 1.3s1.4.2 2.1 0 1.3-.7 1.7-1.3c.4-.6.6-1.3.5-2z"/><g fill="#FFF"><path class="logo-text" d="M116.1 22c-1.8 1.8-3.8 2.3-6 2-3.4-.5-5.3-2.6-5.4-6-.1-1.9 0-6.3 0-6.3h3.1V14c0 1.4-.1 2.8.1 4.2.4 2.1 1.7 3.3 3.9 3.2 2.3 0 3.8-1.4 4.1-3.5.2-1.7.2-6.2.2-6.2h3.1s0 8.1-.1 11c0 2-.3 4-1.7 5.6-1.4 1.7-3.4 2.2-5.5 2.3-2.1.1-4.2-.4-6-1.6-.3-.2-.6-.4-.8-.7l1.2-2.2 1.2.7c1.6.9 3.4 1.2 5.2.9 1.6-.2 2.8-1.3 3.1-3 .2-.8.2-1.6.3-2.7zM58.8 19.6c1.8.8 2.8 2.2 2.7 4.1 0 2.2-1.6 3.9-4.2 4.2-3.3.4-10.3.2-10.3.2V11.8s6.6-.2 9.6.2c.8.1 1.5.4 2.2.8.5.3 1 .8 1.3 1.3s.5 1.1.6 1.8c.1.6 0 1.3-.3 1.9-.2.6-.6 1.1-1.1 1.5-.1-.1-.3.1-.5.3zm-5.5 6h2.6c.9-.1 1.7-.3 2.2-1.1 1-1.4 0-3.2-1.9-3.5s-6.1 0-6.1 0v4.5l3.2.1zm-.5-7.1c.8 0 1.6.1 2.4 0 1.5-.1 2.3-1 2.3-2.3 0-1.1-.9-2-2.3-2-1.5-.1-5.1 0-5.1 0v4.3h2.7zM137.4 11.6h3.1v16.3h-2.3s-5.9-6.8-8.3-9.8c-.2-.3-.8-1.1-.8-1.1v11h-3V11.6h2.4s.8.9 1.2 1.5c2.4 3.1 7.7 9.5 7.7 9.5v-11zM81.4 28h-3.2s-1.2-1.7-1.7-2.3c-.8-1.2-1.2-2.4-5.4-2.4h-.5V28h-3.1V11.6s5.9-.1 8.4.2c5.3.8 6.1 5.7 4.4 8.7-.5.8-2.6 2.2-2.6 2.2s2.1 3.2 3 4.4c.3.3.5.6.7.9zM70.5 17.6v3.2s3.2.1 4.5-.1c1.8-.1 2.8-1.3 2.9-2.9.1-1.9-.7-3-2.6-3.3-1.5-.3-4.9-.1-4.9-.1s.1 2.3.1 3.2zM87.2 19.9v-8.2h11.9v2.5l-8.9.1v4.3h8V21h-8v4.3h9.2V28l-12.3.1s.1-5.8.1-8.2zM145.4 28l7.2-16.3h3l7.4 16.4h-3l-1.8-3.8h-8l-1.8 3.8h-3V28zm8.7-13.2c-1 2.3-2.9 6.9-2.9 6.9h6c-.1 0-2.1-4.5-3.1-6.9z"/></g></svg>
            </a>

            <ul class="flex ml-20">
                <li class="cursor-pointer breyna-text-blue py-9 inst-li px-4"><a href="/institucional">Institucional</a></li>
                <li
                class="relative cursor-pointer py-9 px-4 serv-li nav-ul-cont transition-all"
                x-on:mouseover="serviciosMedicos = true"
                x-on:mouseout="serviciosMedicos = false"
                >
                    <a class="flex items-center" href="/servicios">
                        <p class="breyna-text-blue">Servicios médicos <i style="margin-bottom: 2px" class="arrow down ml-2"></i></p>
                    </a>
                    <ul x-show="serviciosMedicos"
                        style="background: rgba(255, 255, 255, .3); display: none"
                        class="absolute w-full mt-8 backdrop-blur-md shadow-md nav-dropdown left-0 nav-ul"
                        x-transition:enter.duration.300ms
                        x-transition:leave.duration.200ms
                        >
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/neurologia">Neurología</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/cardiologia">Cardiología</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue" style="width: 21ch;"><a href="/prevencion-enfermedad-vascular">Prevención de enfermedad vascular</a></li>
                    </ul>
                </li>
                <li class="cursor-pointer breyna-text-blue py-9 grupo-medico-li px-4"> <a href="/grupo-medico">Grupo médico</a></li>
                <li
                class="relative cursor-pointer py-9 px-4 drestol-li nav-ul-cont transition-all"
                x-on:mouseover="drestol = true"
                x-on:mouseout="drestol = false"
                >
                    <a class="flex items-center" href="/dr-estol">
                        <p class="breyna-text-blue">Dr. Estol<i style="margin-bottom: 2px" class="arrow down ml-2"></i></p>
                    </a>
                    <ul x-show="drestol"
                        style="background: rgba(255, 255, 255, .3); display: none"
                        class="absolute w-full mt-8 backdrop-blur-md shadow-md nav-dropdown left-0 nav-ul"
                        x-transition:enter.duration.300ms
                        x-transition:leave.duration.200ms
                        >
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/dr-estol/acv">ACV</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/dr-estol/neurologia">Neurología</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue" style="width: 21ch;"><a href="/dr-estol/menciones">Menciones</a></li>
                    </ul>
                </li>
                <li
                class="relative cursor-pointer py-9 px-4 ensayo-li nav-ul-cont transition-all"
                x-on:mouseover="ensayos = true"
                x-on:mouseout="ensayos = false"
                >
                    <a class="flex items-center" href="/ensayos-clinicos">
                        <p class="breyna-text-blue">Ensayos clínicos <i style="margin-bottom: 2px" class="arrow down ml-2"></i></p>
                    </a>
                    <ul x-show="ensayos"
                        style="background: rgba(255, 255, 255, .5); display: none"
                        class="absolute w-full mt-8 backdrop-blur-md  shadow-md nav-dropdown left-0 nav-ul"
                        x-transition:enter.duration.300ms
                        x-transition:leave.duration.200ms
                        >
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/areas-de-desarrollo">Áreas de desarrollo</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/nuestro-staff">Nuestro Staff</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue" style="width: 21ch;"><a href="/infraestructura">Infraestructura</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue" style="width: 21ch;"><a href="/sponsors">Sponsors</a></li>
                        <li class="px-4 py-6 w-full breyna-text-blue"><a class="w-full" href="/contacto">Contacto</a></li>
                    </ul>
                </li>
                
            </ul>

            <div class="flex gap-8 ml-auto py-6">
                <div style="background: #305F96" class="w-12 h-12 rounded-full flex items-center justify-center cursor-pointer" @click="toggleSearch()">
                    <img style="max-width: 48%" src="/imgs/index/icon-lupa.svg" alt="">
                </div>
                <button @click="showTurnoForm = true" class="bryena-bg-blue uppercase h-fit text-white my-auto py-3 px-6 rounded-lg tracking-widest breyna-text-bold {{$ensayos? 'hidden' : ''}}">Solicitar turno</button>
                <a href="/contacto" class="bryena-bg-blue uppercase h-fit text-white my-auto py-3 px-6 rounded-lg tracking-widest breyna-text-bold {{$ensayos? '' : 'hidden'}}">Contacto</a>
            </div>
        </div>
    </nav>
    
    @livewire('solicitar-turno-form')

    <section 
    style="z-index: 779; display: none;"
    x-show="showSearch"
    @keydown.escape.window = "closeAll()"
    class="w-full fixed flex flex-col">
        <div 
        style="z-index: 2; background-color: rgba(255, 255, 255, 0.3)"
        class="w-full mx-auto flex items-center shadow-2xl justify-center gap-32">
            <div class="flex items-center py-5">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img style="max-width: 48%" src="/imgs/index/icon-lupa.svg" alt="">
                </div>
                <input id="search-breyna" class="py-4 px-2 bg-transparent text-white lg:text-base text-2xl" value="" wire:model="search" type="search" placeholder="Buscar en Breyna">
            </div>
            <span @click="openNavs()" class="icon-custom close-svg cursor-pointer"></span>
        </div>
        <div 
        style="z-index: 1;"
        class="absolute w-full min-h-screen inset-0 bg-black opacity-70"
        x-show="showSearch"
        @click="closeAll()"
        x-transition:enter.duration.300ms 
        x-transition:leave.duration.150ms></div>

        <div style="z-index: 999;  min-height: 30rem;" class="bg-white w-full max-w-2xl mx-4 lg:mx-auto lg:px-20 px-10 py-12 mt-12 rounded-xl shadow-md">
            <h2 class="lg:text-2xl text-3xl mb-6"><b>Resultados Relevantes:</b></h2>
            <ul class="text-black space-y-6">
                @foreach ($resultados as $resultado)
                    <li>
                        <div class="items-center flex gap-4 lg:text-base text-xl">
                            <a href="/{{strtolower($resultado['categoria'])}}">
                                <div
                                class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 rounded-full bg-white text-gray-700 border"
                                >
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-hard-drive mr-2"
                                >
                                <line x1="22" y1="12" x2="2" y2="12"></line>
                                <path
                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"
                                ></path>
                                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                </svg>
                                {{$resultado['categoria']}}
                                
                            </div>    
                            </a>
                            <a href="/servicios/{{$resultado['ruta']}}" class="breyna-text-blue underline">{{$resultado['titulo']}}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

</header>