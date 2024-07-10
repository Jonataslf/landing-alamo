// Pré-carregar imagens de fundo
const imagensDeFundo = [
    'img/fundolaranja.png',
];

imagensDeFundo.forEach(imagem => {
    const img = new Image();
    img.src = imagem;
});