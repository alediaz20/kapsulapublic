<?php require_once("../../ajax/config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Kapsula</title>
    <link rel="icon" type="image/png" href="../../imgs/mainlogo.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/listado2.css">
    <!-- <link rel="stylesheet" href="../../css/carousel.css"> -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/af-2.4.0/b-2.2.3/b-html5-2.2.3/date-1.1.2/r-2.3.0/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/af-2.4.0/b-2.2.3/b-html5-2.2.3/date-1.1.2/r-2.3.0/datatables.min.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>


</head>


<body style="font-family: 'Jost', sans-serif;">
<section>
        <div class="d-flex justify-content-around p-4 bg-kuality">
            <img src="../../imgs/mainlogo.png" alt="" height="60rem" width="60rem">
            <h1 class="titulo" height="20rem" width="100rem">TABLA DE TALLES</h1>
            <img src="../../imgs/cavila.png" alt="" height="60rem" width="100rem">
        </div>
        <div class="p-4">
            <div class="card">
                <div class="card-header">
                    <tittle>Las medidas se expresan en centímetros</tittle>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>    </th>
                                <th class="text-center">Contorno de pecho</th>
                                <th class="text-center">Contorno de cintura</th>
                                <th class="text-center">Contorno de cadera</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-bold" style="font-size: large;">4</td>
                                <td class="text-center">64</td>
                                <td class="text-center">58</td>
                                <td class="text-center">68</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">6</td>
                                <td class="text-center">68</td>
                                <td class="text-center">59</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">8</td>
                                <td class="text-center">72</td>
                                <td class="text-center">60</td>
                                <td class="text-center">76</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">10</td>
                                <td class="text-center">76</td>
                                <td class="text-center">62</td>
                                <td class="text-center">80</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">12</td>
                                <td class="text-center">80</td>
                                <td class="text-center">64</td>
                                <td class="text-center">84</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">14</td>
                                <td class="text-center">84</td>
                                <td class="text-center">66</td>
                                <td class="text-center">88</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">16</td>
                                <td class="text-center">88</td>
                                <td class="text-center">68</td>
                                <td class="text-center">92</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">S</td>
                                <td class="text-center">88</td>
                                <td class="text-center">64</td>
                                <td class="text-center">92</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">M</td>
                                <td class="text-center">96</td>
                                <td class="text-center">72</td>
                                <td class="text-center">100</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">L</td>
                                <td class="text-center">104</td>
                                <td class="text-center">80</td>
                                <td class="text-center">108</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">XL</td>
                                <td class="text-center">110</td>
                                <td class="text-center">90</td>
                                <td class="text-center">116</td>
                            </tr>
                            <tr>
                                <td class="text-bold" style="font-size: large;">XXL</td>
                                <td class="text-center">114</td>
                                <td class="text-center">94</td>
                                <td class="text-center">120</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p >*Las medidas presentadas corresponden al cuerpo, NO a la prenda. Cada prenda se confecciona en relación a la medida del cuerpo, con su correspondiente holgura.</p>
                    <p >*Seleccioná el talle que más se adecúe a tus medidas.</p>
                </div>
            </div>
        </div>
        </section>
    </body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>