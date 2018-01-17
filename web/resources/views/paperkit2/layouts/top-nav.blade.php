<nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="150">
    <div class="container">
		<div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-bar"></span>
				<span class="navbar-toggler-bar"></span>
				<span class="navbar-toggler-bar"></span>
            </button>
            <a class="navbar-brand" href="https://k2inno.com">K2inno</a>
		</div>
		<div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">

            	@php
            	/*
                <li class="nav-item">
                    <a href="{{ asset('themes/paperkit2/index.html') }}" class="nav-link"><i class="nc-icon nc-layout-11"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('themes/paperkit2/documentation/tutorial-components.html') }}" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>  Documentation</a>
                </li>
                */
                @endphp

				<li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow me on Twitter" data-placement="bottom" href="{{ config('socialmedia.twitter') }}" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow me on Facebook" data-placement="bottom" href="{{ config('socialmedia.facebook') }}" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow me on Instagram" data-placement="bottom" href="{{ config('socialmedia.instagram') }}" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none">Instagram</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Public GitHub" data-placement="bottom" href="{{ config('socialmedia.github') }}" target="_blank">
                        <i class="fa fa-github"></i>
                        <p class="d-lg-none">GitHub</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="LinkedIn Profile" data-placement="bottom" href="{{ config('socialmedia.linkedin') }}" target="_blank">
                        <i class="fa fa-linkedin"></i>
                        <p class="d-lg-none">LinkedIn</p>
                    </a>
                </li>
            </ul>
        </div>
	</div>
</nav>