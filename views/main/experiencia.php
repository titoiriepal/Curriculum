
<?php include_once __DIR__ . '/../templates/header.php'; ?>

<div class="contenedor">
    <div class="apartado">
        <h3>Experiencia</h3>
        <ul>
            <li>
                <h5>Auxiliar Administrativo</h5>
                <p><span>GRANDPADEL S.L.</span><span class="fecha"> 2021 - Actualidad</span></p>
                <p>Desarrollo de la actividad de auxiliar administrativo, recepción de clientes y gestión de cobro. En la actualidad estoy desarrollando una <span>Api Web con HTML, CSS, Javascript y PHP</span> para la gestión de alumnos en la escuela deportiva, el cobro de la parcela de hostelería de la empresa y de la tienda de productos deportivos</p>
            </li>

            <li>
                <h5>Proyecto Web</h5>
                <p><span class="fecha">Actualidad</span></p>
                <p>En la actualidad me encuentro desarrollando una página web de información de caracter público con galería fotográfica, blogs y control de usuarios completamente interactiva</p>
            </li>

            <li>
                <h5>Autónomo Hostelería</h5>
                <p><span>Bar Cervecería Tito's</span><span class="fecha"> 2010 - 2021</span></p>
                <p>Desarrolle este trabajo por cuenta propia durante más de diez años. Gracias a él puedo aportar conocimiento en la gestión tanto de material, como de personal, además de trato con el cliente. Una experiencia que me hace valorar más tanto el trabajo propio, como la gestión de una Empresa y la complejidad de la misma</p>
            </li>

            <picture>
                <source srcset="/build/img/experiencia.avif" type="image/avif">
                <source srcset="/build/img/experiencia.webp" type="image/webp">
                <img loading="lazy" class="imagen" src="/build/img/experiencia.jpg" width="600px" height="400px" alt="Experiencia Laboral">
            </picture>
            <!-- <img src="/build/img/experiencia.webp" class="imagen" alt="Experiencia Laboral"> -->
            <li>
                <h5>Información clientes - Reponedor</h5>
                <p><span>Hipercor</span><span class="fecha"> 2007 - 2008</span></p>
                <p>Trabajo para una gran empresa desempeñando una función tanto cara al público, a la hora de guiar a los clientes dentro de la superficie comercial, como de auxiliar de reponedor en los momentos de menor carga laboral en la primera ocupación del puesto</p>
            </li>

            <li>
                <h5>Operario de linea - impresión</h5>
                <p><span>D.W. Plastics</span><span class="fecha"> 2003 - 2004</span></p>
                <p>Trabajo en una linea de producción, a turnos rotativos de mañana, tarde y noche, primero como operario de linea general, y luego como operario de una máquina de impresión</p>
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