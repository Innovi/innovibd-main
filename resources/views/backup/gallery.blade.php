@extends('master')
@section('content')
<div id="work">
	<div class="logo"></div>
	<div class="parallax-section">
		<div class="parallax-work"></div>
		<div class="just_pattern"></div>
		<div class="container z-index-pages">
			<div class="sixteen columns" data-scrollreveal="enter top and move 250px over 3s">
				<h1>Gallery</h1>
			</div>
			<div class="sixteen columns">
				<div class="text-line-pages"></div>
			</div>
			<div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 3s">
				<ul class="flippy">
					<li>
						<div class="small-text-pages">We have a solid vision of lifting our clients to stand out.</div>
					</li>
					<li>
						<div class="small-text-pages">Our design is a blend of classic and modern elements.</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="navbar">
		<a href="/gallery/design">Design</a>
		<a href="/gallery/wedding">Wedding Cards</a>
		<a href="/gallery/membership">Membership Cards</a>
	</div>
	<div class="work-grid-container">
		<section class="grid-wrap">
			<ul class="grid swipe-rotate" id="grid">
				@for ($i = 1; $i <= 10; $i++)
				 <li><a class="" title=""><img src="images/portfolio/{{$i}}.jpg" alt="Example Site"></a></li>
				@endfor
			</ul>
		</section>
	</div>
</div>

@endsection