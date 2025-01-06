@section('footer')

<section id="footer" class="wrapper">
    <div class="container text-center">
        <div class="footer-logo">
            <h1 class="text-center animation-box wow bounceIn animated">AVIA PARTNER</h1>
        </div>
        <div class="footer-logos">
            <div class="logo-container">
                <a href="https://www.flydubai.com/en-az/" target="_balnk"><img src="img/flydubai.png" alt="Fly Dubai Logo"></a>
            </div>
            <div class="logo-container">
                <a href="https://www.flypgs.com/" target="_balnk"><img src="img/georgian_wings.png" alt="Georgian Wings Logo"></a>
            </div>
            <div class="logo-container">
                <a href="https://georgianwings.com/" target="_balnk"><img src="img/pegasus.png" alt="Pegasus Logo"></a>
            </div>
        </div>
        <ul class="social-icons text-center">
            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="wow animated fadeInRight twitter"><a href="#"><i class="fa fa-twitter"></i></a>
            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>

        <div class="copyright">
            <div class="credits">
                {{ __('messages.made_by') }}<a href="https://www.maryamahmadova.com/az" target="_blank">M.A</a>
            </div>
            <div>©2025 {{ __('messages.all_rights_reserved') }}</div>
        </div>
    </div><!-- container -->
</section>
<!--       Open/Close       -->
<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close">Close</button>
    <nav>
        <ul>
            <li class="hideit"><a href="#header">{{ __('messages.home') }}</a></li>
            <li class="hideit"><a href="#about">{{ __('messages.about') }}</a></li>
            <li class="hideit"><a href="#features">{{ __('messages.mob_menu_services') }}</a></li>
            <li class="hideit"><a href="#contact">{{ __('messages.contact') }}</a></li>
        </ul>
    </nav>
</div>

@endsection
