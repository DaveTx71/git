<?php
include "header.php";
?>


<main>
    <div class="row justify-content-center mt-5">
        <h1>Registrarse</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <form id="registrar" class="w-40 m-auto" action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex justify-content-center bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <a href="iniciarSesion.php" class="btn btn-secondary"><i
                                class="fas fa-arrow-left"></i>Regresar</a>
                    </div>
                </div>
                <div class="col-auto my-3">
                    <label for="id" class="col-form-label">Cedula</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="id" id="id" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="clave" class="col-form-label">Contraseña</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="clave" id="clave" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="nombre" class="col-form-label">Nombre</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="apellido1" class="col-form-label">Apellido1</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="apellido2" class="col-form-label">Apellido2/label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3col-auto">
                    <label for="correo" class="col-form-label">Correo Electronico</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="correo" id="correo" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="fechaNacimiento" class="col-form-label">Fecha de nacimiento</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control"
                        placeholder="placa" aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="telefono" class="col-form-label">Telefono</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="email" class="col-form-label">Email</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="email" id="email" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto my-3">
                    <label for="whatsapp" class="col-form-label">Whatsapp</label>
                </div>
                <div class="col-auto my-3">
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="placa"
                        aria-labelledby="passwordHelpInline">
                </div>
                <div class="col-auto mb-3">
                    <button id="btnRegistrarse" type="button" class="btn btn-outline-dark">Guardar</button>
                    <button id="cancelarDatos" type="reset" class="btn btn-outline-dark">Cancelar</button>
                </div>
            </form>

        </div>

</main>

<script src="js/registrarse.js"></script>

<?php

    include 'footer.php';
?>