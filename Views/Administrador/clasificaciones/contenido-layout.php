<?php

?>

<div class="container py-4" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; border-radius: 5px;">
    <div class="col-12 col-lg-10" style="margin: auto;">
        <div class="card border-0">
            <div class="card-header text-center" style="background-color:#16A085; margin: auto; color: #fff; width: 100%;">
                <spam style="font-size: 14px;">Tabla General</spam>
            </div>
            <div class="table-responsive p-2">



                <table id="" class="align-middle table table-striped table-bordered nowrap" style="width:100%">
                    <thead class="text-white" style="background-color:#16A085;">
                        <th class="text-center"> Po. </th>
                        <th class="text-center"> Equipo </th>
                        <th class="text-center"> PJ </th>
                        <th class="text-center"> PG </th>
                        <th class="text-center"> PE </th>
                        <th class="text-center"> PP </th>
                        <th class="text-center"> Puntos </th>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $clas = $clasificaciones_Controller->calculaClasificacion();
                        for ($i = 0; $i < count($clas); $i++) {
                        ?>
                            <tr>
                                <td> <?php echo $i + 1 ?> </td>
                                <td> <?php echo $clas[$i]['nombre'] ?> </td>
                                <td> <?php echo $clas[$i]['pj'] ?> </td>
                                <td> <?php echo $clas[$i]['pg'] ?> </td>
                                <td> <?php echo $clas[$i]['pe'] ?> </td>
                                <td> <?php echo $clas[$i]['pp'] ?> </td>
                                <td> <?php echo $clas[$i]['puntos'] ?> </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>