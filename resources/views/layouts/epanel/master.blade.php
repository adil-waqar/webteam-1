<!DOCTYPE html>
<head>

	<meta charset="UTF-8" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
	<title>GIKI ePanel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="author" content="The GIKI Webteam" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	

	@yield('head')
</head>
<body>
	<div class="row">
		<div class="container">
			<!-- E-Panel top bar -->
			<div class="codrops-top">
				<a href="/">
					<strong>&laquo; Back to The GIKI website</strong>
				</a>
				<span class="right">
					<a href="mailto:webteam@giki.edu.pk">
						<strong>Contact Webteam</strong>
					</a>
				</span>
				<div class="clr"></div>
			</div><!--/ E-Panel top bar -->


			<header>
				<h1>The GIKI Webteam </h1>
				<h1><span><a href="/ePanel">e-Panel</a></span></h1>
				<h1><span>Welcome, admin</span></h1>
			</header>
			<section>
				<div id="container_demo" >

					<a class="hiddenanchor" id="toregister"></a>
					<a class="hiddenanchor" id="tologin"></a>
					<div id="wrapper"><div id="login" class="animate form" style="width: 440px;">
						<h1>{{$heading}}</h1>
						@include('partials.alerts')
						@include('partials.errors')
						
						
						@yield('content')

					</div>

					<h1 class="logout"><a href="/ePanel/Logout">Logout</a></h1>
				</div>
			</div>
		</section>
	</div>

</div>
</body>
</html>
