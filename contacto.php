    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once "includes/head.php" ?>
        <title>Formulario De Contacto</title>
    </head>

    <body>
        <?php 
        $page = 'contacto';
        require_once "includes/encabezado.php"; 
        ?>

        <section class="formulario-contacto py-5">
            <div class="container pt-5 pb-3 shadow-sm">

                <div class="text-center pb-3">
                    <h1>Formulario De Contacto</h1>
                </div>

                <div class="pb-3 text-center">
                    <svg width="20%" height="2">
                        <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
                    </svg>
                </div>

                <div class="container">
                    <form action="#" method="post" class="py-4">
                        <fieldset>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label>Nombre y Apellido *</label>
                                            <input type="text" name="nombre" required class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label for="email">Email *</label>
                                            <input type="email" id="email" name="email" required class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label>Área de la empresa *</label>
                                            <input type="text" name="AreaDeLaEmpresa" required class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-2">
                                            <label for="phone">Teléfono</label>
                                            <input type="tel" id="phone" name="phone" placeholder="15-4545-4545" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Mensaje *</label>
                                                <textarea class="form-control" name="comentario" required rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-2 p-2 ml-auto">
                                            <input class="text-white btn btn-md btn-block text-center newsletter-btn" type="submit" value="Enviar" name="submit">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php 
                            if(!empty($_POST['AreaDeLaEmpresa'])){
                                $para = $_POST['AreaDeLaEmpresa']. '@delfostour.com';
                                $titulo = 'Consulta de '. $_POST['nombre'];
                                $mensaje = $_POST['comentario'];
                                $cabeceras = 'From: '. $_POST['email'] . "\r\n" .
                                    'Reply-To: '. $_POST['email'] . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
    
                                mail($para, $titulo, $mensaje, $cabeceras); 
                            }
                            ?>

                        </fieldset>
                    </form>
                </div>

            </div>
        </section>
        <section class="py-4">
            <div class="google-maps">
                <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3406.427909631637!2d-64.23182658431362!3d-31.374762601380407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94329928a3f7afe1%3A0x249417de894bdded!2sDelfos%20Tour!5e0!3m2!1sen!2sar!4v1587933716198!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>

        <?php 
        require_once "includes/linkinteresesyherramientas.php";
        require_once "includes/footer.php"; 
        ?>

    </body>

    </html>