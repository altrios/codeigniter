<h2> crear curso</h2>
<?PHP

$this->load->model('hola_model');?>
<?= form_open("http://localhost:8080/codeigniter/index.php/hola/enviar")?>
<?php

	$nombre = array(
		'name'=>'nombre',
		'placeholder'=>'escribe tu nombre'
		);
	$videos = array(
		'name'=>'videos',
		'placeholder'=>'cantidad de videos'
		);
?>

	<?php echo form_input($nombre)?><?= form_label('Nombre', 'nombre')?>


<br>
<?= form_input($videos) ?><?php echo form_label('numero videos','videos')?> <br>

<?= form_submit('','enviar')?>
<?php form_close()?>
</body>
</html>