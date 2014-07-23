<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order!</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="//http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<h1>You would like to order this product: </h1>
	<h3>{{ $product->title }}</h3>
	<p>{{ $product->description }}</p>
	<p>{{ $product->price }}</p>
	<h3>Your Total is: {{ $product->price }}</h3>
	<a href="{{ URL::to('/order/' . $product->id . '/confirm') }}"><button class="btn-success">Confirm Your Order</button></a>
</body>
</html>