window.thumbnail = function () {

    let neurologia = [{id: 1, titulo: 'HIPERCOLESTEROLEMIA'}, {id: 2, titulo: 'TAQUICARDIA PAROXÍSTICA SUPRAVENTRICULAR'}, {id: 3, titulo: 'LIPOPROTEÍNA A ELEVADA Y FACTOR DE RIESGO CARDIOVASCULAR'}];

    return {

        show: false,
        nombre: '',
        img: '',
        especialidad: '',
        id: null,

        modalPatologia: false,
        tituloEspecialidad: '',
        patologias: '',

        showPatologias(patologia) {
            this.modalPatologia = true;
            if (patologia == 'neurologia') {
                this.patologias = neurologia;
            }
        },

        change(direction) {
            let nextId
            (direction === "next") ? nextId = this.id + 1 : nextId = this.id -1       
            let medico = document.getElementById(nextId.toString())
            this.id = parseInt(medico.id)
            console.log(medico.children[1].children['nombre'].textContent)
            this.nombre = medico.children[1].children['nombre'].textContent
            this.especialidad = medico.children[1].children['especialidad'].textContent
            this.img = medico.children['medico-img'].children[0].src
        },

        // agregar/borrar un modelx del LS
        showModal(target) {
            this.show = true;

            let container = target.children

            this.nombre = container[1].children['nombre'].textContent,
            this.especialidad = container[1].children['especialidad'].textContent
            this.img = container['medico-img'].children[0].src
            this.id = parseInt(target.id)

            if (container['medico-img'].children[0].src == undefined) {
                this.img = 'linear-gradient(to top, var(--tw-gradient-stops));'
            }
        },

    }
}

