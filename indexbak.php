<!DOCTYPE html>
<html lang="es">

<head>
    <title>Diario El Faro</title>
    <meta charset="UTF-8">
    <script src="fechahora.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="./style.css" rel="stylesheet" type="text/css">
</head>

<body onload="reloj()">
   
    <header>
        <a href="./index.html">
            <img src="header_faro.png" alt="El Faro" style="width:30% ;" >
          </a>
    </header>
        
    <nav>
        <a href="./inicio.html">Inicio</a>
        <a href="./deporte.html">Deporte</a>
        <a href="./negocios.html">Negocios</a>
        <a href="./contacto.html">Contacto</a>
    </nav>

    <form onsubmit="article();reset(); return false;">
        <textarea id="noticia" rows="1" placeholder="Noticia"></textarea>
        <button type="submit">Enviar Noticia</button>
    </form>
   
   
    <div class="grid" id="grid">
        
        <div>
            <a href="./noticia1.html">
            Servel informa suspensión del plebiscito del 4-S en Haití por "seguridad de comunidad chilena residente"
            </a>
        </div>
        
        <div>
            <a href="./notdeporte1.html">
            <h2>Conmebol solicitará a la FIFA mantener formato "todos contra todos" en Mundial de Norteamérica 2026</h2>
            </a>
        </div>
        
        <div>
            <a href="./notnegocios1.html">
            <h2>FMI aprueba una línea de crédito de 18.500 millones de dólares para Chile</h2>
            </a>
        </div>

        <div>
            <a href="./noticiavideo.html">
            <h2>Video: Caos en Bagdad tras la dimisión de Al Sadr al no poder formar gobierno</h2>
            </a>
        </div>
    
    
    </div>



</body>

<footer>
    <p>Copyright Sebastian Caques 2022</p>
</footer>

</html>