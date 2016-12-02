<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Text Counter</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
		.container{
			width: 500px;
			margin-top: 100px;
			font-style: 18px;	
		}
	</style>
</head>

<body>
	<div class="container">
		<form action="">
			<div class="form-group">
				<label for="">Count Up</label>
				<textarea name="" id="" rows="5" class="form-control" onkeyup="count_up(this);"></textarea>
				<span class="text-muted pull-right" id="count1">8</span>
			</div>
			<br><br>
			<div class="form-group">
				<label for="">Count Down</label>
				<textarea name="" id="ta_down" rows="5" class="form-control" onkeyup="count_down(this);"></textarea>
				<span class="text-muted pull-right" id="count2">30</span>
			</div>
		</form>
	</div>


	<script>
	//	¿Como Abrir la consola?
	// -Press Ctrl+Shift+J (Windows / Linux) or Cmd+Opt+J (Mac).
	// -If DevTools is already open, press the Console button.
	
	//Contador Arriba
	function count_up(obj){
		//Obtenemos la cadena
		var str = obj.value
		//Separamos por espacio y contamos
		var num = str.split(' ').length;
		//Imprimimos en consola
		console.log(num);
		
		//Asignamos en el textArea
		document.getElementById('count1').innerHTML = num;
	}
	function count_down(obj){
		var element = document.getElementById('count2');

		//Numero maximo de palabras permitidas
		var max = 30;
		//Obtenemos la cadena
		var str = obj.value
		//Separamos espacios y contamos palabras
		var num = str.split(' ').length;

		var dif = max - num;

		//Imprimimos en consola
		console.log(dif);
		
		//Asignamos en el textArea
		document.getElementById('count2').innerHTML = dif;

		if(dif < 8){
			element.style.color = 'red';
			if (dif < 1){
				document.getElementById('ta_down').disabled = true;

			}

		} else {
			element.style.color = 'grey';
		}
	}
	</script>

</body>
</html>