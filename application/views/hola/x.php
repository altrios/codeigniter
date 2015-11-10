<!DOCTYPE html>
<html>
<body>
<h2>Vista de Cursos</h2>
<?php foreach($cursos->result() as $curso ){?>
	<ul>
		<li><?php echo "Curso: ", $curso->nombre;
		echo  "  Videos: ",$curso->videos;?> </li>
	</ul>

<?php }
?> <br>
<a href="nuevo">Crear Curso</a>

</body>
</html>