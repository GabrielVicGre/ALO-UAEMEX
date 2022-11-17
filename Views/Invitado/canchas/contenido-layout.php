        
        
<div style="background-image: url('../../../Assets/Images/tapiz.png'); background-size: 100%; border-radius: 5px;">
<div class="col-12 col-lg-8 text-center" style="margin: auto;">
    <div class="p-3">
    <div class="card border-0">
    <div class="card-header text-center fw-bold" style="background-color:   #17a589; margin: auto; color: #fff; width: 100%;">
        <spam class="h6" style="font-size: 20px;">Canchas registradas</spam>
    </div>
    <div class="p-1 table-responsive">
        <table id="tabla-equipos" class="align-middle table table-striped table-bordered nowrap" style="width:100%">
            <thead class="text-white" style="background-color:#16A085;">
                <th class="text-center"> Nombre </th>
                <th class="text-center"> Dirección </th>
                <th class="text-center"> Mapa</th>
            </thead>
            <?php
                $canchas = $canchasController->listaCanchas();
                foreach ($canchas as $reg) {
                ?>
                   <tr>
                        <form action="Views/Administrador/canchas/index.php" method="GET">
                            <td class="text-left">
                            <img width="25px" style="border-radius: 2px;" src="https://cdn-icons-png.flaticon.com/512/3461/3461128.png" class="img-fluid mx-1" alt="...">
                            <?php echo $reg->nombre ?>
                                </td>
                                   <td class="text-center" width="45%"><?php echo $reg->direccion ?></td>
                                   <td class="text-center">
                                    <a href="<?php echo $reg->url ?>" target="_blank">
                                        <img width="25px" style="border-radius: 20px;" src="https://cdn-icons-png.flaticon.com/512/854/854901.png" class="img-fluid mx-1" alt="...">
                                    </a>
                                </td>
                        </form>
                        </tr>
                <?php
                }
            ?>
        </table>
    </div>
</div>
   