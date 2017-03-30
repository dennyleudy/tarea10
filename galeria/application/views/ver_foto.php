<?php

  plantilla::inicio();

  $CI =& get_instance();
  $sql = "select *from imagenes where id = ?";
  $rs = $CI->db->query($sql, array($cod));

  $rs = $rs->result();
    if(count($rs) == 0){
      redirect('web');
    }
    $imagen = $rs[0];

 ?>
<di class="txt-center">
  <h1><?php echo $imagen->nombre ?></h1>
  <img class="img=responsive" src="<?php echo base_url("fotos/{$imagen->id}.jpg")?>"/>
<div class="row text-center">
<h1><i>Informacion</i></h1>
  <h3>

    <h2>Peso:</h2><?php echo $imagen->peso; ?></br>
    <h2>Color:</h2><?php echo $imagen->color; ?></br>
    <h2>Comentario:</h2><?php echo $imagen->comentario; ?></br>
    <h2>Tipo:</h2><?php echo $imagen->tipo; ?></br>


  </h3>
</div>
</div>
