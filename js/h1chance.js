const nome  = document.getElementById("nome");
const hello = document.getElementById("Hello");
const icon  = document.getElementById("title-final");

nome.addEventListener('focus', function() {
    if (icon.textContent === " ") {
        icon.textContent = "_";
    }
})

nome.addEventListener('input', function() {
    if (nome.value.length >= 10) {
        icon.textContent = "...";
        icon.className = "";
    } else {
        hello.textContent = nome.value;
        icon.textContent = "_";
        icon.className = "underline";
    }
});

nome.addEventListener('blur', function() {
    if (icon.textContent === "_") {
        icon.textContent = " ";
    }
})
