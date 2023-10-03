<!DOCTYPE html>
<html>
<head>
    <title>Segmentação de imagem</title>
</head>
<body>
    <div id="image-slider">
        <img src="{{ asset('img/Imagem3.png') }}" alt="">
        <img src="{{ asset('img/projeto2.jpg') }}" alt="Projeto 2">
        <img src="{{ asset('img/projeto3.jpg') }}" alt="Projeto 3">
        <img src="{{ asset('img/projeto4.jpg') }}" alt="Projeto 4">
        <img src="{{ asset('img/projeto5.jpg') }}" alt="Projeto 5">
        <img src="{{ asset('img/projeto6.jpg') }}" alt="Projeto 6">
        <img src="{{ asset('img/projeto7.jpg') }}" alt="Projeto 7">
    </div>
    <style>
        /* Estilos para o container do slider */
#image-slider {
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow-x: auto;
    width: 100%;
    max-width: 1920px; /* Largura máxima do slider */
}

/* Estilos para cada imagem do slider */
#image-slider img {
    width: 1920px; /* Largura da imagem */
    height: 1080px; /* Altura da imagem */
    object-fit: cover; /* Redimensionar a imagem para preencher o espaço */
    margin-right: 10px; /* Espaçamento entre as imagens */
}

    </style>
</body>
</html>
