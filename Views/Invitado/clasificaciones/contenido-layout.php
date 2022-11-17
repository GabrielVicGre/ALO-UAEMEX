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
            <th class="text-center"> GF </th>
            <th class="text-center"> GC</th>
            <th class="text-center"> Puntos </th>
        </thead>

        <?php
        $clas = $clasificaciones_Controller->calculaClasificacion();

        foreach ($clas as $reg) {
        ?>
            <tr>
                <td class="text-center text-white"> <?php echo $reg->nombre ?> </td>

            </tr>
        <?php
        }
        ?>
    </table>


</div>