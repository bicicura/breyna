window.solicitarTurnoForm = {

    showTurnoForm: false,

    neurologia: [
        { id: 1, medico: 'Dr. Conrado Estol' },
        { id: 2, medico: 'Dra. María Florencia Angellotti' },
        { id: 3, medico: 'Dra. Analía De Navarrete' },
        { id: 4, medico: 'Dra. Constanza García Méndez' },
        { id: 5, medico: 'Dra. Romina Taboada' }

    ],
    cardiologia: [
        { id: 1, medico: 'Dr. Fernando Botto' },
        { id: 2, medico: 'Dra. Patricia González Colaso' },
        { id: 3, medico: 'Dr. Augusto Lavalle Cobo' },
        { id: 4, medico: 'Dra. Guadalupe Romero' },
        { id: 5, medico: 'Dr. Martín Koretzky' },
        { id: 6, medico: 'Dra. Eliane Sasovsky' },
    ],
    clinica: [
        { id: 1, medico: 'Dra. Florencia Cordeu' },
    ],
    nutricion: [
        { id: 1, medico: 'Dra. Nadia Mariana Sauane' },
        { id: 2, medico: 'Lic. Valeria Brunetta' },
    ],
    endocrinologia: [
        { id: 1, medico: 'Dr. Lucas Gutnisky' },
    ],
    deportologia: [
        { id: 1, medico: 'Dr. Osvaldo Jarast' },
    ],
    terapista: [
        { id: 1, medico: 'Josefina Rattagan M.' },
    ],
    psicologia: [
        { id: 1, medico: 'Lic. Josefina González Aguilar' },
        { id: 2, medico: 'Lic. Leticia Gil' },
    ],
    fonoaudiologia: [
        { id: 1, medico: 'Lic. María Florencia Guarriello' },
        { id: 2, medico: 'Lic. Agustina Davancens' }, 
    ],
    kinesiologia: [
        { id: 1, medico: 'Lic. Julia Bisheimer' },
        { id: 2, medico: 'Lic. Claudia Graiz' },
        { id: 3, medico: 'Lic. María Carla Rourich' },
        { id: 4, medico: 'Lic. Barbara Solari' }, 
        { id: 5, medico: 'Lic. María José Scalone' },
    ],

    filter: '',

   

}

function nav() {

    return {

        ...solicitarTurnoForm,

        showNav: true,
        serviciosMedicos: false,
        showSearch: false,
        ensayos: false,
        drestol: false,
        open: false,
        especialidadSelected: '',
        selected:null,
        showSpinnerTurnoForm: false,
        est: '',
        navMob: true,
        
        get filteredMedicos() {
            return {
                neurologia: this.neurologia,
                cardiologia: this.cardiologia,
                clinica: this.clinica,
                nutricion : this.nutricion,
                endocrinologia : this.endocrinologia,
                deportologia : this.deportologia,
                terapista : this.terapista,
                psicologia : this.psicologia,
                fonoaudiologia : this.fonoaudiologia,
                kinesiologia : this.kinesiologia,
            }[this.filter]
        },
        
        toggleSearch() {
            this.showNav = !this.showNav
            this.showSearch = !this.showSearch
        },

        toggleSearchMob() {
            this.navMob = !this.navMob
            this.showSearch = !this.showSearch
        },

        closeAll() {
            this.showSearch = false
            this.showTurnoForm = false
            this.showNav = true
        },

        openNavs() {
            this.showNav = true
            this.navMob = true
            this.showSearch = false
        },

        get filteredMedicos() {
            return {
                neurologia: this.neurologia,
                cardiologia: this.cardiologia,
                clinica: this.clinica,
                nutricion : this.nutricion,
                endocrinologia : this.endocrinologia,
                deportologia : this.deportologia,
                terapista : this.terapista,
                psicologia : this.psicologia,
                fonoaudiologia : this.fonoaudiologia,
                kinesiologia : this.kinesiologia,
            }[this.filter]
        },

        updateMedicos() {
            this.filter = this.especialidadSelected
        }

    }
}

function footer() {
    return {

        est: '',

        ...solicitarTurnoForm,

        especialidadSelected: '',

        closeAll() {
            this.showTurnoForm = false
        },

        showTurnoForm: false,
        filter: '',

        get filteredMedicos() {
            return {
                neurologia: this.neurologia,
                cardiologia: this.cardiologia,
                clinica: this.clinica,
                nutricion : this.nutricion,
                endocrinologia : this.endocrinologia,
                deportologia : this.deportologia,
                terapista : this.terapista,
                psicologia : this.psicologia,
                fonoaudiologia : this.fonoaudiologia,
                kinesiologia : this.kinesiologia,
            }[this.filter]
        },

    }
}

