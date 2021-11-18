function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}
let root = document.getElementById("root");

comentario.addEventListener('click', () => {
    enviarComentario.classList.toggle('animar');
});

usercomentario.addEventListener('click', () =>{
    userbtn.classList.toggle('ativar');
});





