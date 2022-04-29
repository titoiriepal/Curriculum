<?php include_once __DIR__ . '/../templates/header.php'; ?>

<div class="contenedor">
    <div class="apartado" id="objetivos">
        <h3>Objetivos</h3>
        <img src="/build/img/goal.webp" class="icono-principal objetivos"  alt="Icono objetivos"> 
        <p>
            Soy una persona activa, con muchas ganas de trabajar en el sector de la programación y diseño de aplicaciones informáticas. 
            Tengo aptitud para el trabajo en equipo y la resolución de problemas.
            Estoy dispuesto a formarme desde cualquier nivel para conseguir
            mis objetivos y los de la empresa
        </p>
        <a href="/objetivos" class="boton">Ver más</a>
    </div>

    <div class="apartado" id="formacion">
        <h3>Formación y conocimientos</h3>
        <img src="/build/img/knowledge.webp" class="icono-principal conocimientos"  alt="Icono Conocimiento">
        <p>
            <span>Técnico superior de desarrollo de aplicaciones informáticas</span><br>
            I.E.S Brianda de Mendoza 2000-2002<br>
            <span>IFCT 06-09 Programación de sistemas informáticos</span><br>
            600 horas con prácticas
            Centro de estudios Kronos, Guadalajara
        </p>
        <a href="/formacion"><button class="boton">Ver más</button></a>
    </div>

    <div class="apartado" id ="experiencia">
        <h3>Experiencia</h3>
        <img src="/build/img/experiencie.webp" class="icono-principal experiencia" alt="Icono Experiencia">
        <ul>
            <li>
                <span class="fecha">2021-Actualidad</span> Auxiliar Administrativo <span>GRANDPADEL S.L.</span> 
            </li>
            <li>
                <span class="fecha">2010 -2021</span> Autónomo Hostelería
            </li>
            <li>
                <span class="fecha">2007-2008</span> <span>Hipercor S.L</span> 
            </li>
            <li>
                <span class="fecha">2003-2004</span> Operario impresión <span>D.W.Plastics</span>
            </li>
        </ul>

        <a href="/experiencia"><button class="boton">Ver más</button></a>
    </div>

    <div class="apartado" id="otros">
        <h3>Otros datos de interes</h3>
        <img src="/build/img/menu_vertical.webp" class="icono-principal otros" alt="Icono Otros Datos">
        <ul>
            <li>
                Carnet de conducir
            </li>
            <li>
                Vehículo propio
            </li>
        </ul>
        <a href="/otros-datos"><button class="boton">Ver más</button></a>
    </div>
</div>

<?php include_once __DIR__ . '/../templates/footer.php'; ?>
<?php
    $script .='

        <script src="/build/js/mostrar.js"></script>'
     
        ;

    // <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
?>


