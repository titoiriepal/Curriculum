
<?php include_once __DIR__ . '/../templates/header.php'; ?>

<div class="contenedor">
    <div class="apartado">
        <h3>Objetivos</h3>
        <p>Desarrollador de aplicacione informáticas con aptitud para el trabajo en equipo. Además 10 años de trabajo por cuenta propia de cara al público denotan capacidad de gestión de trabajo y tiempo, así como de resolución de problemas</p>
        <p>Educación, proactividad y compromiso con el trabajo, la empresa y los clientes han sido los pilaes fundamentales en otros puestos de trabajo. Tengo predisposición para el aprendizaje, tanto si es necesario para la empresa como por mi bien particular, para aumentar mis capacidades y conocimientos</p>
        <picture>
            <source srcset="/build/img/objetivos_laborales.avif" type="image/avif">
            <source srcset="/build/img/objetivos_laborales.webp" type="image/webp">
            <img class="imagen" loading="lazy" src="/build/img/objetivos_laborales.jpg" alt="Objetivos laborales">
        </picture>
        <!-- <img src="/build/img/objetivos_laborales.webp" class="imagen" alt="Objetivos Laborales"> -->
        <p>Aspiro a conseguir un puesto de programador Junior para poder avanzar, tanto en conocimientos como en experiencia laboral, para poder asentar una carrera profesional en el sector del desarrollo de aplicaciones informáticas</p>
        <p>Espero poder aportar capacidad de sacrificio y aprendizaje, así como colaborar en un buen ambiente laboral a través de mis experiencias anteriores</p>

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