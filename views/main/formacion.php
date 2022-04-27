
<?php include_once __DIR__ . '/../templates/header.php'; ?>

<div class="contenedor">
    <div class="apartado">

        <h3>Formación y conocimientos</h3>
        <div class="formacion">
        <ul>
            <li>
                <h4>Técnico superior de desarrollo de aplicaciones informáticas</h4>
                <p class="descripcion">
                    Módulo de grado superior que capacita a sus alumnos para Utilizar sitemas informáticos aislados e interconectados en red; realizar el análisis y diseño detallado de aplicaciones informáticas de gestión; elaborar, adaptar y probar programas en lenguajes de programación estructurados y de cuarta generación, y diseñar y realizar servicios de presentación que faciliten la explotación de aplicaciones.
                </p>
                    <a href="http://briandademendoza.es/" target="_blank"><p><span>I.E.S. Brianda de Mendoza, Guadalajara. 2000 - 2002</span></p></a>
                
            </li>
            <li>
                <h4>IFCT 06-09 Programación de sistemas informáticos</h4>
                <p class="descripcion">
                    Certificado de profesionalidad para desarrollar componentes software a partir de unas especificaciones concretas, proporcionando funciones de administración y supervisión del sistema operativo, para la gestión de los recursos de un sistema informático y la interacción con otros sistemas utilizando tecnologías de desarrollo orientadas a objetos y componentes
                </p>
                    <a href="http://www.tecdifor.info/contacto.htm" target="_blank"><p><span>Centro de estudios Kronos, Guadalajara. 2021</span></a></p>
            </li>
        </ul>
        </div>
        <img src="/build/img/formacion.webp" class="imagen" alt="Formacion">
        <div class="conocimientos">
            <h4>Conocimientos</h4>
            <ul class="lista-conocimientos">
                
                <li>
                    <p>HTML 5</p>
                </li>
                <li>
                    <p title="Flex, Block, Grid, Mixins...">CSS 3</p>
                </li>
                <li>
                    <p>PHP</p>
                </li>
                <li>
                    <p>Javascript</p>
                </li>
                <li>
                    <p>SASS</p>
                </li>
                <li>
                    <p>Gulp</p>
                </li>
                <li>
                    <p>Python</p>
                </li>
                <li>
                    <p>Flask</p>
                </li>
                <li>
                    <p>C++</p>
                </li>
                <li>
                    <p>C#</p>
                </li>
                <li>
                    <p>Visual Studio</p>
                </li>
                <li>
                    <p>Visual Studio Code</p>
                </li>
                <li>
                    <p>SQL / MySQL</p>
                </li>
                <li>                   
                    <p>Programación orientada a objetos</p>
                </li>
                <li>
                    <p>Virtual DOM</p>
                </li>
                <li>
                    <p>Github</p>
                </li>
                <li>
                    <p>Arquitectura Active Record</p>
                </li>
                <li>
                    <p>Arquitectura por Capas</p>
                </li>
                <li>
                    <p>Modelo Vista Controlador</p>
                </li>
                <li>
                    <p>Scrum</p>
                </li>

                
            </ul>
        </div>


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