function versenha() {
    const senha = document.getElementById("senha");
    const img   = document.getElementById("img_senha");

    if (senha.type === "password") {
        senha.type = "text";
        img.src = "../img/eye.png"
    } else {
        senha.type = "password";
        img.src = "../img/hidden.png"
    } 
}