
const left_button  = document.getElementById("left-button");
const right_button = document.getElementById("right-button");
const slider_img   = document.getElementById("slider");

let slide_atual = 0;

const imagens   = [
    "../img/sapato1.jpg",
    "../img/sapato2.jpg",
    "../img/sapato3.jpg"
];

function mudarSlide(index) {
    if (index > imagens.length - 1) {
        index = 0;
    } else if (index < 0) {
        index = imagens.length - 1;
    }

    slide_atual    = index;
    slider_img.src = imagens[index];
}

left_button.addEventListener( "click", () => mudarSlide(slide_atual - 1));
right_button.addEventListener("click", () => mudarSlide(slide_atual + 1));