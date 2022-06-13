<section class="pb-12 lg:px-20 px-10" x-data="thumbnail()" >

    <div class="mt-32 mb-24">
        <h2 @click="showPatologias('neurologia')" class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Neurología</b></h2>
         <div class="flex lg:flex-row flex-col gap-8 justify-center">
            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="0" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/conrado.jfif" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Conrado J. Estol</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Neurología y Enfermedad Cerebrovascular</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="1" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/angelotti.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. María Florencia Angellotti</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Neurología y Medicina del Sueño</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="2" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/navarrete.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Analía de Navarrete</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Neurología</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="3" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/garcia.jfif" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Constanza García Méndez</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Neurología</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="4" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/taboada.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Romina Taboada</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Neurología</p>
                </div>
            </div>

         </div>
    </div>

    <div class="mt-32 mb-24">
        <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Cardiología</b></h2>
        <div class="flex lg:grid lg:grid-cols-6 flex-col gap-8 justify-center">
            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="5" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/botto.jfif" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Fernando Botto</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Cardiología</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="6" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/colaso.jfif" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Patricia González Colaso</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Cardiología</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="7" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/cobo.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Augusto Lavalle Cobo</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Cardiología y Lípidos</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="8" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/romero.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Guadalupe Romero</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Cardiología</p>
                </div>
            </div>

            <div  class="grupo-medico-container shadow-md  overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="9" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/koretzky.jpeg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre"><b>Dr. Martín Koretzky</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Cardiología</p>
                </div>
            </div>

            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="10" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden bg-gray-300 rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/eliane.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Eliane Sasovsky</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Cardiología</p>
                </div>
            </div>
            
         </div>
    </div>

    <div class="mt-32 mb-24">
         <div class="lg:flex justify-between lg:gap-6">  

            {{-- REORDENAR ESTA SECUENCIA --}}
            <div class="mt-32 lg:mt-0 flex-stretch">
                <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Clínica Médica</b></h2>
                <div class="height-mio grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="11" @click="showModal($event.target)">
                    <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                        <img class="h-full object-cover" src="imgs/grupo-medico/cordeu2.jpg" alt="">
                    </div>
                    <div>
                        <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Florencia Cordeu</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Clínica Médica</p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Nutrición</b></h2>
                <div class="flex gap-8 flex-col lg:flex-row">
                    <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="12" @click="showModal($event.target)">
                        <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/sauane.jpg" alt="">
                        </div>
                        <div>
                            <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dra. Nadia Mariana Sauane</b></h4>
                            <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Medicina Familiar y Nutrición</p>
                        </div>
                    </div>

                    <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="13" @click="showModal($event.target)">
                        <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/brunetta.jpg" alt="">
                        </div>
                        <div>
                            <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Valeria Brunetta</b></h4>
                            <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Nutrición</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex gap-8 flex-col lg:flex-row ">

                <div class="mt-32 lg:mt-0">
                    <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Endocrinología</b></h2>
                    <div class="height-mio grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="14" @click="showModal($event.target)">
                        <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/gut-medico.jpg" alt="">
                        </div>
                        <div>
                            <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Lucas Gutnisky</b></h4>
                            <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Endocrinología</p>
                        </div>
                    </div>
                </div>

                <div class="mt-32 lg:mt-0">
                    <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Deportología</b></h2>
                    <div class="height-mio grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="15" @click="showModal($event.target)">
                        <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                            <img class="h-full object-cover" src="imgs/grupo-medico/jarast.jpg" alt="">
                        </div>
                        <div>
                            <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Dr. Osvaldo Jarast</b></h4>
                            <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Medico Cardiólogo y Deportologo</p>
                        </div>
                    </div>
                </div>
    
            </div>

         </div>
    </div>

    <div class="mt-32 mb-24">
        <div class="lg:flex justify-between">  
           <div>
               <h2 class="text-2xl text-center mx-auto breyna-text-water mb-8"><b>Psicología</b></h2>
               <div class="flex gap-8 flex-col lg:flex-row">
                   <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="16" @click="showModal($event.target)">
                       <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                           <img class="h-full object-cover" src="imgs/grupo-medico/aguilar.jpg" alt="">
                       </div>
                       <div>
                           <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Josefina González Aguilar</b></h4>
                           <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Psicología</p>
                       </div>
                   </div>

                   <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="17" @click="showModal($event.target)">
                       <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                           <img class="h-full object-cover" src="imgs/grupo-medico/gil.jpg" alt="">
                       </div>
                       <div>
                           <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Leticia Gil</b></h4>
                           <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Psicología</p>
                       </div>
                   </div>
               </div>
           </div>

           <div class="mt-32 lg:mt-0 lg:flex lg:flex-col lg:items-stretch">
            <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Terapia Ocupacional</b></h2>
            <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12 h-full" id="18" @click="showModal($event.target)">
                <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                    <img class="h-full object-cover" src="imgs/grupo-medico/rattagan.jfif" alt="">
                </div>
                <div>
                    <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Josefina Rattagan M.</b></h4>
                    <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Terapista ocupacional</p>
                </div>
            </div>
        </div>
           
           <div class="mt-32 lg:mt-0">
            <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Fonoaudiología</b></h2>
            <div class="flex gap-8 flex-col lg:flex-row">
                <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="19" @click="showModal($event.target)">
                    <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                        <img class="h-full object-cover" src="imgs/grupo-medico/guarriello.jfif" alt="">
                    </div>
                    <div>
                        <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>María Florencia Guarriello</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Fonoaudiología</p>
                    </div>
                </div>

                <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="20" @click="showModal($event.target)">
                    <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                        <img class="h-full object-cover" src="imgs/grupo-medico/davancens.jpg" alt="">
                    </div>
                    <div>
                        <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Agustina Davancens</b></h4>
                        <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Fonoaudiología</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
   </div>

   <div class="mt-32 mb-24">
    <h2 class="lg:text-2xl text-3xl text-center mx-auto breyna-text-water mb-8"><b>Kinesiología</b></h2>
     <div class="flex lg:flex-row flex-col gap-8 justify-center">
        <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="21" @click="showModal($event.target)">
            <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                <img class="h-full object-cover" src="imgs/grupo-medico/bisheimer.jfif" alt="">
            </div>
            <div>
                <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Julia Bisheimer</b></h4>
                <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Kinesiología y Fisiatría</p>
            </div>
        </div>

        <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="22" @click="showModal($event.target)">
            <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                <img class="h-full object-cover" src="imgs/grupo-medico/graiz.jpg" alt="">
            </div>
            <div>
                <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Claudia Graiz</b></h4>
                <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Kinesiología y Fisiatría</p>
            </div>
        </div>

        <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="23" @click="showModal($event.target)">
            <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                <img class="h-full object-cover" src="imgs/grupo-medico/rourich.jpg" alt="">
            </div>
            <div>
                <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>María Carla Rourich</b></h4>
                <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Kinesiología y Fisiatría</p>
            </div>
        </div>

        <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="24" @click="showModal($event.target)">
            <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                <img class="h-full object-cover" src="imgs/grupo-medico/solari.jpg" alt="">
            </div>
            <div>
                <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>Barbara Solari</b></h4>
                <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Licenciada en Kinesiología y Fisiatría</p>
            </div>
        </div>

        <div class="grupo-medico-container shadow-md overflow-hidden lg:p-6 p-4 border-2 border-gray-200 rounded-2xl cursor-pointer medico-container-desktop flex lg:block items-center gap-12" id="25" @click="showModal($event.target)">
            <div class="lg:mb-4 overflow-hidden rounded-2xl w-4/12 lg:w-full lg: h-60" id="medico-img">
                <img class="object-cover" src="imgs/grupo-medico/scalone.jpg" alt="">
            </div>
            <div>
                <h4 class="text-3xl lg:text-lg leading-tight" id="nombre" style="max-width: 18ch"><b>María José Scalone</b></h4>
                <p style="max-width: 24ch" id="especialidad" class="text-2xl mt-4 lg:mt-0 lg:text-sm breyna-text-gray">Especialista en Neurología</p>
            </div>
        </div>

     </div>
</div>

<div 
style="z-index: 1000" 

@keydown.escape.window = "show = false">
    <div style="display: none;" x-transition:enter.duration.300ms x-transition:leave.duration.150ms x-show="show" class="fixed inset-0 flex items-center mix-blend-multiply breyna-bg-gray">
        <div style=" z-index: 100" class="flex w-full justify-between items-center text-2xl text-white px-12 mt- lg:mt-0">
            <div class="bg-white w-8 h-8 rounded-full flex justify-center items-center cursor-pointer" @click="change('previous')">
                <span class="icon-custom flechita-atras-svg p-2"></span>
            </div>
            <div class="bg-white w-8 h-8 rounded-full flex justify-center items-center cursor-pointer" @click="change('next')">
                <span class="icon-custom flechita-svg p-2"></span>
            </div>
        </div>
    </div>

    <div style="display: none" x-show="show" x-transition:enter.duration.500ms x-transition:enter.scale.80 x-transition:leave.duration.300ms x-transition.delay.100ms 
    class="bg-white shadow-md max-w-3xl h-fit rounded-md fixed -top-96 lg:top-0 bottom-0 left-0 right-0 m-auto mx-10 lg:mx-auto lg-mx-0 rounded-2xl ">
        <span class="absolute right-8 top-8 text-xl cursor-pointer text-white icon-custom close-svg" @click="show = false"></span>
        <div class="flex flex-col h-full justify-between rounded-md">
            <div class="w-full py-48 bg-no-repeat bg-cover bg-center rounded-md " :style="{ 'background-image': 'url(' + img + ')' }">
            </div>
            <div class=" bg-white w-full p-6">
                <p class="mb-6 text-2xl breyna-text-blue"><b x-text="nombre"></b></p>
                <ul class="flex flex-col justify-between gap-2">
                    <li class="flex items-start gap-4">
                        <img class="w-4 mt-2" src="/imgs/icons/list-tick.svg" alt="">
                        <p x-text="especialidad">Médico especialista en Neurología y Enfermedad Cerebrovascular Certificado por el Consejo de Psiquiatría y Neurología de los EE.UU.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div style="display: none" x-show="modalPatologia" x-transition:enter.duration.500ms x-transition:enter.scale.80 x-transition:leave.duration.300ms x-transition.delay.100ms 
    class="bg-white shadow-md max-w-3xl h-fit rounded-md fixed -top-96 lg:top-0 bottom-0 left-0 right-0 m-auto mx-10 lg:mx-auto lg-mx-0 rounded-2xl ">
        <span class="absolute right-8 top-8 text-xl cursor-pointer text-white icon-custom close-svg" @click="showPatologia = false"></span>
        <div class="flex flex-col h-full justify-between rounded-md">
            <div class=" bg-white w-full p-6">
                <p class="mb-6 text-2xl breyna-text-blue"><b x-text="tituloEspecialidad"></b></p>
                <ul class="flex flex-col justify-between gap-2">
                    <template  x-for="patologia in patologias" :key="patologia.id">
                        <li x-text="patologia.titulo"></li>
                    </template>
                </ul>

            </div>
        </div>
    </div>

</div>
    
</section>