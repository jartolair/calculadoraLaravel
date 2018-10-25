<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de {{$nombre}}</title>
	 <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/>
	 
</head>
<body>
	<h1>Calculadora de {{$nombre}}</h1>
	<form action="/calculadoraController/calcular" method="get">
		<input type="text" name="nombre" value="{{$nombre}}" hidden>
		Numero 1:
		<input type="number" name="n1" value="{{isset($n1)?$n1:0}}">
		<br>
		Numero 2:
		<input type="number" name="n2" value="{{isset($n2) ? $n2: 0}}">
		<br>
		<input type="submit" name="c" value="Sumar">
		<input type="submit" name="c" value="Restar">
		<input type="submit" name="c" value="Multiplicar">
		<input type="submit" name="c" value="Dividir">
		<input type="submit" name="c" value="Elevar">
	</form>
@if(isset($resultado))
	
	<h2>Resultado</h2>
	<h3>{{$resultado}}</h3>
	@if($error!=null)
	
		<p style="color:red;">{{$error}}</p>

	@endif

@endif
<script src="{{url('assets/js/components/bootstrap.js')}}"></script>
</body>
</html>