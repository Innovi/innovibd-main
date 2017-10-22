@extends('master')
@section('content')
	<div id="contact">
		<div class="logo"></div>
		<div class="parallax-section">
			<div class="parallax-contact"></div>
			<div class="just_pattern"></div>
			<div class="container z-index-pages">
				<div class="sixteen columns" data-scrollreveal="enter top and move 250px over 3s">
					<h1>contact</h1>
				</div>
				<div class="sixteen columns">
					<div class="text-line-pages"></div>
				</div>
				<div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 3s">
					<ul class="flippy">
						<li>
							<div class="small-text-pages">GRAPHICS DESIGN</div>
						</li>
						<li>
							<div class="small-text-pages">BRANDING AND ADVERTISING</div>
						</li>
						<li>
							<div class="small-text-pages">PRINTING SERVICES</div>
						</li>
						<li>
							<div class="small-text-pages">EVENTS SUPPORT</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="top-section">
			<div class="container">
				<div class="sixteen columns" data-scrollreveal="enter top and move 250px over 3s">
					<P>WE DESIGN OUR PLANS WITH A BLEND OF CLASSIC AND MODERN ELEMENTS IN A WAY THAT IS ADMIRABLY INNOVATIVE.</P>
				</div>
				<div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 3s">
					<div class="sections-link-pages"><div class="cl-effect-11"><a class="scroll" href="#directions" data-hover="Find us">Find Us</a></div></div>
				</div>
			</div>
		</div>
		<div class="send-mess">
			<div class="container">
				<div class="sixteen columns" data-scrollreveal="enter top and move 250px over 1.5s">
					<h4>Send Us Your Message</h4>
					<div class="uper-text">
						<p>Let us fabricate to tailor our range of services in accordance with the your exact specifications. </p>
					</div>
				</div>
				<div class="sixteen columns">
					<form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
						<label for="name">Name: *
							<span class="error" id="err-name">please enter name</span>
						</label>
						<input name="name" id="name" type="text" />
						<label for="email">E-Mail: *
							<span class="error" id="err-email">please enter e-mail</span>
							<span class="error" id="err-emailvld">e-mail is not a valid format</span>
						</label>
						<input name="email" id="email" type="text" />
						<label for="message">Message:</label>
						<textarea name="message" id="message"></textarea>
						<button class="send_message" id="send">Submit</button>
						<div class="error" id="err-form">There was a problem validating the form please check!</div>
						<div class="error" id="err-timedout">The connection to the server timed out!</div>
						<div class="error" id="err-state"></div>
					</form>
					<div id="ajaxsuccess">Successfully sent to Innovi London!</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-section" id="directions">
		<div class="parallax-contact-down"></div>
		<div class="just_pattern"></div>
		<div class="video-play-section">
			<div class="container z-index-pages">
				<div class="sixteen columns" data-scrollreveal="enter top and move 250px over 1.5s">
					<div class="logo-contact"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="work-together-section">
		<div class="container">
			<div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
				<div class="sections-link-pages"><div class="cl-effect-11"><a href="work.html" data-hover="our work">our work</a></div></div>
			</div>
		</div>
	</div>
@endsection