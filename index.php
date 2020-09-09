<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>QR Code</title>
</head>

<body>

    <div class='container'>
        <h1>Generar códigos QR con PHP usando la librería ENDROID</h1>
        <form method='post' id="generador">
            <div class='row'>
                <div class='col-md-6'>
                    <div class="form-group">
                        <input type="text" class="form-control m-2" id="names" placeholder="Nombres">
                        <input type="text" class="form-control m-2" id="lastnames" placeholder="Apellidos">
                        <input type="text" class="form-control m-2" id="celular" placeholder="Número celular">
                        <input type="text" class="form-control m-2" id="empresa" placeholder="Empresa">
                        <input type="text" class="form-control m-2" id="cargo" placeholder="Cargo">
                        <input type="text" class="form-control m-2" id="id" placeholder="Cédula / Passaporte">

                        <label for="textqr" class="m-2">Tamaño</label>
                        <select class='form-control m-2' id='sizeqr'>
						<option value='100' selected>100 px</option>
						<option value='200'>200 px</option>
						<option value='300'>300 px</option>
						<option value='400'>400 px</option>
						<option value='500'>500 px</option>
						</select>

                        <button type="submit" class="m-2 btn btn-primary">Generar</button>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='result'>

                    </div>
                </div>
            </div>

    </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $("#generador").submit(function(event) {
            var names = $("#names").val();
            var lastnames = $("#lastnames").val();
            var celular = $("#celular").val();
            var empresa = $("#empresa").val();
            var cargo = $("#cargo").val();
            var id = $("#id").val();
            var sizeqr = $("#sizeqr").val();

            parametros = {
                "name": names,
                "lastname": lastnames,
                "celular": celular,
                "empresa": empresa,
                "cargo": cargo,
                "id": id,
                "sizeqr": sizeqr
            };
            $.ajax({
                type: "POST",
                url: "qr.php",
                data: parametros,
                success: function(datos) {
                    $(".result").html(datos);
                }

            })

            event.preventDefault();
        });
    </script>
</body>

</html>