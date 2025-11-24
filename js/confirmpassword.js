const pass = document.getElementById("senha");
const confirm_pass = document.getElementById("senha2");
const create = document.getElementById("create");

pass.addEventListener("input", function() {
    if ( (pass.value === confirm_pass.value) && (pass.value !== "") ) {
        create.disabled = false;
    } else {
        create.disabled = true;
    }
    console.log(confirm_pass.value);
    console.log(confirm_pass.value === pass.value);
})

confirm_pass.addEventListener("input", function() {
    if ( (pass.value === confirm_pass.value) && (pass.value !== "") ) {
        create.disabled = false;
        confirm_pass.style.border = "1px solid green";
    } else {
        create.disabled = true;
        confirm_pass.style.border = "1px solid red";
    }
    console.log(confirm_pass.value);
    console.log(confirm_pass.value === pass.value);
})