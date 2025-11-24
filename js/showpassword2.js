function versenha2() {
    const senha2 = document.getElementById("senha2");
    const img2   = document.getElementById("img_senha2");

    if (senha2.type === "password") {
        senha2.type = "text";
        img2.src = "../img/eye.png"
    } else {
        senha2.type = "password";
        img2.src = "../img/hidden.png"
    } 
}