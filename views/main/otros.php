<?php include_once __DIR__ . '/../templates/header.php'; ?>

<div class="contenedor">
    <div class="apartado">
        <h3>Otros datos de interes</h3>
        <ul>
            <li>
                <p><span>Carnet de conducir en vigor, tipo B</span></p>
            </li>
            <li>
                <p><span>Vehículo mixto propio</span></p>
            </li>
            <li>
                <p><span>Nivel básico de Inglés</span></p>
            </li>
            <picture>
                <source srcset="/build/img/puzzle.avif" type="image/avif">
                <source srcset="/build/img/puzzle.webp" type="image/webp">
                <img class="imagen" loading="lazy" title="Puzzle de 9000 piezas hecho en 2020" src="/build/img/puzzle.jpg" alt="Puzzle de 9000 piezas">
            </picture>
            <!-- <img src="/build/img/puzzle.webp" class="imagen" alt="Affición puzzles" title="Puzzle de 9000 piezas acabado en el año 2020"> -->
            <li>
                <p><span>Titulo Monitor de Ocio y tiempo libre</span></p>
            </li>
            <li>
                <p><span>Titulo Entrenador de baloncesto nivel 1</span></p>
            </li>
            <li>
                <p><span>Aficciones:</span> Cine, Padel, Literatura, Baloncesto, Puzzles</p>
            </li>
        </ul>

        <div class="navegacion">
            <a href="/"><button class="boton">Principal</button></a>
            <a href="javascript:history.back()"><button class="boton" id="volver">Volver</button></a>
            
        </div>
    </div>
</div>



<?php include_once __DIR__ . '/../templates/footer.php'; ?>

<?php
    $script .='

        <script src="/build/js/mostrar.js"></script>'
     
        ;

    // <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
?>