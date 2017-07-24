<div id="fh5co-blog">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Comuniquese con Nosotros</h2>

            </div>
        </div>
    </div>
</div>

<div id="fh5co-consult">
    <div class="video fh5co-video" style="background-image: url(<?php echo base_url(); ?>asset/images/contacto.jpg);">
        <div class="overlay"></div>                    
    </div>
    <div class="choose animate-box">

        <form method="post" id="frmmail">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre" required>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese Teléfono" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese E-mail" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Ingrese Asunto" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Ingrese Mensaje" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar Mensaje" class="btn btn-success">
            </div>
            <div id="respuesta">
            </div>

        </form>	
    </div>
</div>
<!-- mapa#######################################################-->

<!-- mapa#######################################################-->
<script>
    $('form#frmmail').submit(function (e) {

        event.preventDefault();
        $.ajax({
            cache: false,
            type: 'post',
            url: '<?php echo base_url() ?>sendmail',
            data: $('#frmmail').serialize(),
            beforeSend: function () {
                alert('enviandoooo');
            },
            complete: function () {

                alert('completo');
            },
            success: function (response) {
                $('#respuesta').html(response);
            }
        });
    });
</script>