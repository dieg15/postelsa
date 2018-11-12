<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
<h1>Clientes</h1>

@foreach ($clientes as $cliente)
	<li>{{$cliente->nombre}}</li>
@endforeach	

</body>
</html>