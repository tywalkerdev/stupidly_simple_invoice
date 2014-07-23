<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="//http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<h1>This is a test</h1>

	<div class="col-lg-offset-2 pull-left">@foreach ($products as $product)
		<h1>{{ $product->title }}</h1>
		<p>{{ $product->description }}</p>
		<p>{{ $product->price }}</p>
		<a href="{{ '/order/' . $product->id }}">Order Now!</a>
	@endforeach</div>

	<div class="col-lg-2 pull-right">{{ Form::open() }}
		<div class="form-group">
			{{ Form::label('title', 'Title: ') }}
			<br>
			{{ Form::text('title') }}
		</div>	
		<div class="form-group">
			{{ Form::label('description', 'Description: ') }}
			<br>
			{{ Form::text('description') }}
		</div>
		<div class="form-group">
			{{ Form::label('price', 'Price') }}
			<br>
			{{ Form::text('price') }}
		</div>
			{{ Form::submit('Create New Product')}}
	{{ Form::close() }}
</div>
</body>
</html>