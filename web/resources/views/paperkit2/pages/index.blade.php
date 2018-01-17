@extends('paperkit2.layouts.master')

@section('content')

	@include('paperkit2.layouts.top-nav')

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
                            			'title' => 'Email',
                            			'subtitle' => '',
                            			'fulltext' => 'kkloke86@k2inno.com',
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
                            	@include('paperkit2.partials.index.timeline', [
                            		'contents' => $academicContents
                            	])
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="portfolio" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#portfolio pending populate
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="publications" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#publications pending populate
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="feeds" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                            	#feeds pending populate
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
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script>, customize with <i class="fa fa-heart heart"></i> from Creative Tim
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