<?php

?>

<div class="container p-3" style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; border-radius: 5px;">
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
        <tbody style="background-color:#FFF;" class="text-center">
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