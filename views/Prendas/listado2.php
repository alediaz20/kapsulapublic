
<div class="container">
    <?php
    require_once(DIR_MODEL . "class.prendas.php");
    $cPrendas = new cPrendas();
    $prendas = $cPrendas->getPrendas();
    $costo = $cPrendas->calcularCostos();

    foreach ($prendas as $key => $value) {
        foreach ($costo as $costokey => $costovalue) {
            if ($value->nombre == $costokey) {
                $costoprenda = $costovalue['precio'];
            }
        }
        $costoTotal = $costoprenda + COSTO_VINILO + COSTO_CONFECCION;
        $preciopublico = $costoTotal * 1.4;
        $preciopublico = round($preciopublico / 1000, 1);
        $preciopublico = $preciopublico * 1000;

        if ($value->nombre == "Medias K") { ?>
            <div class="flip-card">
                <div class="flip-card-inner p-3">
                    <div class="flip-card-front">
                        <img class="" src="imgs/prendas/<?php echo $value->id . ".png" ?>" alt="portada" width="250rem" height="300rem">
                        <h3 class="text-kuality"><?php echo $value->nombre ?></h3>
                        <h3 class="bg-kuality"> $1700 </h3>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="flip-card">
                <div class="flip-card-inner p-3">
                    <div class="flip-card-front">
                        <img class="" src="imgs/prendas/<?php echo $value->id . ".png" ?>" alt="portada" width="250rem" height="300rem">
                        <h4 class="text-kuality"><?php echo $value->nombre ?></h4>
                        <h3 class="bg-kuality"><?php echo "$" . $preciopublico ?></h3>
                    </div>
                    <div class="flip-card-back bg-white">
                        <img class="" src="imgs/prendasReales/<?php echo $value->id . ".png" ?>" alt="portada" width="250rem" height="300rem">
                        <h4 class="text-kuality"><?php echo $value->nombre ?></h4>
                        <h3 class="bg-kuality"><?php echo "$" . $preciopublico ?></h3>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>

<link rel="stylesheet" href="css/listado2.css">
<link rel="stylesheet" href="css/custom.css">
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  