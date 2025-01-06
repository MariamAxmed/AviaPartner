<div id="video" class="wrapper">
    <div class="container" id="about">
        <h2 class="animation-box wow bounceIn animated"><strong class="strong">{{ __('messages.about_company') }}</strong></h2>
        <h3>{{ __('messages.official_representative') }}</h3>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <img src="img/about.jpg" alt="feature" class="video img-responsive animation-box wow animated bounceInDown">
        <p>
            {{ __('messages.content_about') }}
        </p>
    </div> <!-- /.container -->
</div> <!-- /#video -->

    <!--         Features          -->
{{--    <section id="features" class="wrapper features">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-sm-6 wow animated fadeInLeft">--}}
{{--                    <img src="img/mb2.png" alt="" class="pull-right left-img">--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-sm-6 wow animated fadeInRight">--}}
{{--                    <div class="features-list">--}}
{{--                        <h3>OUR SERVICES</h3>--}}
{{--                        <p>--}}
{{--                            Your project looks great on any device. Content can be easily read and a user understands freely what you wanted.--}}
{{--                        </p>--}}
{{--                        <ul class="right">--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> Photo Filters x 15</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> Photo Frames x 3</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> Time Lapse</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> Photo Editor</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> Photo Gallery</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> Touch to Focus</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> White Balance</li>--}}
{{--                            <li class="li"><i class="fa fa-chevron-right"></i> ISO Levels</li>--}}
{{--                        </ul>--}}
{{--                    </div> <!-- .features-list -->--}}
{{--                </div>--}}
{{--            </div> <!-- /.row -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-sm-6 wow animated fadeInLeft">--}}
{{--                    <div class="features-list-left">--}}
{{--                        <h3>PREMIUM FEATURES</h3>--}}
{{--                        <p>--}}
{{--                            Your project looks great on any device. Content can be easily read and a user understands freely what you wanted.--}}
{{--                        </p>--}}
{{--                        <ul class="left">--}}
{{--                            <li class="li">Photo Filters x 15 <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">Photo Frames x 3 <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">Time Lapse <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">Photo Editor <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">Photo Gallery <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">Touch to Focus <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">White Balance <i class="fa fa-chevron-left"></i></li>--}}
{{--                            <li class="li">ISO Levels <i class="fa fa-chevron-left"></i></li>--}}
{{--                        </ul>--}}
{{--                    </div> <!-- .features-list -->--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-sm-6 wow animated fadeInRight">--}}
{{--                    <img src="img/mb2v.png" alt="" class="pull-left right-img">--}}
{{--                </div>--}}
{{--            </div> <!-- /.row -->--}}
{{--        </div> <!-- /.container -->--}}
{{--    </section> <!-- /#features -->--}}
<section id="features" class="wrapper features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 wow animated fadeInLeft">
                <img src="img/w2.jpg" alt="" class="pull-right left-img" style="width: 330px">
            </div>
            <div class="col-md-6 col-sm-6 wow animated fadeInRight">
                <div class="features-list">
                    <h3>{{ __('messages.our_services') }}</h3>
                    <p>
                        {{ __('messages.content_service') }}
                    </p>
                    <ul class="right">
                        <li class="li" onclick="toggleContent(this)">
                            <i class="fa fa-chevron-right"></i> {{ __('messages.tickets') }}
                            <div class="hidden-content">
                                {{ __('messages.content_tickets') }}
                            </div>
                        </li>
                        <li class="li" onclick="toggleContent(this)">
                            <i class="fa fa-chevron-right"></i> {{ __('messages.tours') }}
                            <div class="hidden-content">
                                {{ __('messages.content_tours') }}
                            </div>
                        </li>
                        <li class="li" onclick="toggleContent(this)">
                            <i class="fa fa-chevron-right"></i> {{ __('messages.visa_support') }}
                            <div class="hidden-content">
                                {{ __('messages.content_visa') }}
                            </div>
                        </li>
                        <li class="li" onclick="toggleContent(this)">
                            <i class="fa fa-chevron-right"></i> {{ __('messages.cargo_transfer') }}
                            <div class="hidden-content">
                                {{ __('messages.content_cargo') }}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



