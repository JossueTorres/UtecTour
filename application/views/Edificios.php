<div class="main animar-entrada-up">
    <center>
        <div class="titulo-Listado">Listado de Edificios</div>
        <div class="menu ">
            <?php if (!empty($lstEdificios)) {
                foreach ($lstEdificios as $ed) { ?>
                    <a  href="<?php echo base_url('/Lugares');?>" ><div class="boton"><img src="<?php echo base_url('/img/'.$ed->edf_imagen);  ?>"><label><?php echo $ed->edf_nombre ?></label></div></a>
                <?php }
        }    ?>
        </div>
    </center>
</div>
<script>


</script>