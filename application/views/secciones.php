<div class="main animar-entrada-up">
      <center>
        <div class="titulo-Listado">Listado de Secciones</div>
      <div class="menu ">
            <?php if (!empty($lstSecciones)) {
              echo $lstSecciones;
                foreach ($lstSecciones as $sc) { ?>
                    <div class="boton"><img src="<?php echo base_url('/UtecTour/img/default.png');  ?>"><label><?php echo $sc->sec_nombre; ?></label></div>     
                <?php }
        }    ?>
      </div>
      </center>
    </div>