var arribaSvg = document.querySelectorAll('.arriba-svg')
var chicasArriba = document.querySelector('#chicasArriba_1_')
var chicasAbajo = document.querySelector('#chicasAbajo_1_')

const observer = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return
            }
            entry.target.classList.add('show')
            if (entry.target.classList.contains('svg-cardio')) {
                chicasArriba.style.animation = "dashSvg 8s ease-in-out forwards";
                chicasAbajo.style.animation = "asd 3s ease-in-out forwards";
                arribaSvg.forEach(svg => {
                    svg.classList.add('delay');
                    svg.style.animation = "textosArriba .5s ease-in-out forwards";
                })
                observer.unobserve(entry.target);
            }
        })
    },
    {
        threshold: 0.3
    }
)

let svgCardio = document.querySelector('.svg-cardio')

observer.observe(svgCardio)