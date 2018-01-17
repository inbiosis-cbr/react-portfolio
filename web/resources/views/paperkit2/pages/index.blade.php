@extends('paperkit2.layouts.master')

@section('content')

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

	                <li class="nav-item">
	                    <a href="{{ asset('themes/paperkit2/index.html') }}" class="nav-link"><i class="nc-icon nc-layout-11"></i>Components</a>
	                </li>
	                <li class="nav-item">
	                    <a href="{{ asset('themes/paperkit2/documentation/tutorial-components.html') }}" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>  Documentation</a>
	                </li>

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

    <div class="wrapper">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('{{ asset('img/banner1-2.jpg') }}');">
			<div class="filter"></div>
		</div>
        <div class="section profile-content">
            <div class="container">
                <div class="owner">
                    <div class="avatar">
                        <img src="{{ asset('img/profile-square.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="name">
                        <h4 class="title">Loke Kok Keong<br /></h4>
						<h6 class="description">Fullstack Web Developer cum Computational Biologist</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <p>A guy who likes to develop web platforms, cook and swim. Grateful to assist others into simplify their daily business and working tasks via web and computing adoptation.</p>
                        <br />
                    </div>
                </div>
                <br/>
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist" id="infoTab-nav">
                            <li class="nav-item">
                                <a class="nav-link infoTab-link active" data-toggle="tab" href="#personalDetails" role="tab">Personal Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link infoTab-link" data-toggle="tab" href="#academics" role="tab">Academics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link infoTab-link" data-toggle="tab" href="#portfolio" role="tab">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link infoTab-link" data-toggle="tab" href="#publications" role="tab">Publications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link infoTab-link" data-toggle="tab" href="#feeds" role="tab">Feeds</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content following">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 col-12">
                            	
                            	@include('paperkit2.partials.index.card', [
                            		'content' => [
                            			'iconClass' => 'd-none',
                            			'title' => 'Name',
                            			'subtitle' => '',
                            			'fulltext' => 'Loke Kok Keong',
                            		]
                            	])

                            	@include('paperkit2.partials.index.card', [
                            		'content' => [
                            			'iconClass' => 'd-none',
                            			'title' => 'Age',
                            			'subtitle' => '',
                            			'fulltext' => '32 years',
                            		]
                            	])

                            	@include('paperkit2.partials.index.card', [
                            		'content' => [
                            			'iconClass' => 'd-none',
                            			'title' => 'Email',
                            			'subtitle' => '',
                            			'fulltext' => 'kkloke86@k2inno.com',
                            		]
                            	])


                            </div>
                            <div class="col-md-6 col-12">

                            	@include('paperkit2.partials.index.card', [
                            		'content' => [
                            			'iconClass' => 'fa fa-birthday-cake',
                            			'title' => 'Date of Birth',
                            			'subtitle' => '',
                            			'fulltext' => '10 October 1986',
                            		]
                            	])

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="academics" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#academics
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="portfolio" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#portfolio
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="publications" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#publications
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="feeds" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#feeds
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<footer class="footer section-dark">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul class="d-none">
                        <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
                        <li><a href="http://blog.creative-tim.com">Blog</a></li>
                        <li><a href="https://www.creative-tim.com/license">Licenses</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>, customize with <i class="fa fa-heart heart"></i> from Creative Tim
                    </span>
                </div>
            </div>
        </div>
    </footer>

@endsection

@push('custom-js')
<script>
    $(".infoTab-link").each(function(){
        $(this).click(function(){
            setTimeout(function(){
                updateNav();    
            }, 200);
        });
    });

    function updateNav(){
        $(".infoTab-link").each(function(){
            let href = $(this).attr('href');
            if($(href).get(0) && $(href).hasClass('active')){
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    }
</script>
@endpush