<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver costos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
    

    <div class="container">

        <p>Pago caseta: <?=$costos[0]->pago_caseta ?> </p>
        <p>Pago gasolina: <?=$costos[0]->pago_gasolina ?> </p>
        <p>Pago trasporte: <?=$costos[0]->pago_trasporte ?> </p>
        <p>Pago empleado: <?=$costos[0]->pago_empleado ?> </p>
        <p>Pago objeto pequeño: <?=$costos[0]->pago_objeto_pequeno ?> </p>
        <p>Pago objeto mediano: <?=$costos[0]->pago_objeto_mediano ?> </p>
        <p>Pago objeto grande:: <?=$costos[0]->pago_objeto_grande ?> </p>
        <p>Pago total: <?=$costos[0]->pago_total ?> </p>
    


    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>