<?php
$id = $_REQUEST['id'];

include("conexion.php");

$objCone = new conexion;
$objCone->conexionPDO();
$consulta = "SELECT titulo, descripcion, imguno FROM post WHERE id = $id";
$resultado = $objCone->consultar($consulta);

?>



<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #FFE8CB;">
            <div class="col text-right">
                <button class="btn"><b>X</b></button>
            </div>
            <div class="container pb-5 pr-5 pl-5">
                <?php foreach ($resultado as $post) { ?>
                    <div class="row">
                        <div class="col">
                            <img class="imagenes" src="<?php echo $post['imguno']; ?>">

                        </div>
                        <div class="col text-center">
                            <h4><?php echo $post['titulo']; ?></h4>
                            <p class="mb-5"><?php echo $post['descripcion']; ?></p>
                            <button class="btn mt-5" style="background-color: #FFCBDC">ADOPTAR</button>
                        </div>
                    </div>
                <?php   } ?>
            </div>
        </div>
    </div>
</div>