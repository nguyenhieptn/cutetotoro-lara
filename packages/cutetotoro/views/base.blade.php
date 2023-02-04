<!-- Home page -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- boostrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/5bf87cd97a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{asset('vendor/shop/themes/cutetotoro/best-seller.css')}}">

	{{-- flicktiky --}}
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<title>Cute Totoro</title>
</head>
<body>
	<!-- body page -->

	<!-- slide bar -->

	<!-- end slide bar -->

	{{-- best seller --}}
	
	{{-- end best seller --}}

	<!-- content -->
	{{-- <div class="container-fluid" style="width: 1440px; height: 80px; background: #d9d9d9">
		<div>
			<img src="{{asset('FrontEnd/Image/bar.png')}}" alt="bar_tool" style="width: 28.81px; height: 20.8px; left: 96.04px; top: 32px;">
			<p>Mug</p>
			<p>T-shirt</p>
			<p>Sticker</p>
			<p>Poster</p>
			<p>Bag</p>
			<p>Other</p>
			<img src="{{asset('FrontEnd/Image/logo_totoro.png')}}" width="146px" height="54px">
		</div>
	</div> --}}
	<!-- end content -->
	<div>
		@include('components.best-seller')
	</div>
	<div>
		@include('components.about')
	</div>
	<div>
		@include('components.footer')
	</div>

	<!-- grid product -->

	<!-- end grid product -->
</body>
<footer>
	<!-- footer page -->

	<!-- script -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</footer>
</html>