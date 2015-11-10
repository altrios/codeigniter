<?php
form_open("hola/actualizar ".$id)
?>
<?php
$nombre=array(
	'name'=>'nombre',
	'placeholder'='escribe',
	'value'=>$curso->result()[0]->nombre);
$videos=array(
	'name'=>'videos',
	'placeholder'='escribe',
	'value'=>$curso->result()[0]->videos);
?>
<?= form_label('Nombre: ', 'nombre')?>
<?= form_input($nombre)?>
<br>
<?= form_label('Videos: ', 'videos')?>
<?= form_input($videos)?>
<br>
<?= formsubmit('','Actializar')?>
<?= form_close()?>
</body>
</html>