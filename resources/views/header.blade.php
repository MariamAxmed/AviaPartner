@section('header')
    <a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>

    <section id="header" class="header">
        <div id="video-section">
            <video autoplay muted loop id="myVideo">
                <source src="plane.mp4" type="video/mp4">
            </video>
            <div class="starting">
                <div class="language-switcher lang">
                    <select id="language" onchange="changeLanguage(this.value)">
                        <option value="az" {{ app()->getLocale() == 'az' ? 'selected' : '' }}>az</option>
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>en</option>
                        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>ru</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <header>
                            <a href="#" id="logo">
                                <img src="img/l1.png" alt="AVIA PARTNER Logo">
                            </a>
                        </header>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-text">
                            <h2 class="animation-box wow bounceIn animated">
                                <strong class="strong">{{ __('messages.title') }}</strong>
                            </h2>
                            <p>{{ __('messages.description') }}</p>
                        </div> <!-- /.banner-text -->
                    </div>
                </div>
                <div class="wa-link">
                    <a href="https://wa.me/994705980598" target="_blank" class="whatsapp-link">
                        <i class="fa fa-whatsapp"></i> {{ __('messages.be_our_partner') }}
                    </a>
                </div>
                <div class="row partners">
                    <div class="col-md-3">
                        <div class="logo-container">
                            <a href="https://www.flydubai.com/en-az/" target="_balnk"><img src="img/flydubai.png" alt="Fly Dubai Logo"></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo-container">
                            <a href="https://voyager.group/" target="_balnk"><img src="img/voyager.png" style="margin-top: 63px !important" alt="Voyager Logo"></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo-container">
                            <a href="https://www.fcctravels.com/" target="_balnk"><img src="img/fcc-travel.png" style="width: 120px !important" alt="FccTravel Logo"></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo-container">
                            <a href="https://www.flypgs.com/en" target="_balnk"><img src="img/pegasus.png" alt="Pegasus Logo"></a>
                        </div>
                    </div>
{{--                    <div class="col-md-3">--}}
{{--                        <div class="logo-container">--}}
{{--                            <a href="https://georgianwings.com/" target="_balnk"><img src="img/fcc-travel.svg" alt="FccTravel Logo"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="top-bar">
            <div class="container">
                <div class="navigation" id="navigation-scroll">
                    <div class="row">
                        <div class="col-md-11 col-xs-10">
                            <a href="#" id="logo">
                                <img src="img/l1.png" alt="AVIA PARTNER Logo">
                            </a>
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <p class="nav-button">
                                <button id="trigger-overlay" type="button">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

        </div>
    </section>
@endsection


<script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    function changeLanguage(language) {
        window.location.href = '/' + language;
    }


    // Open the Modal
    function openModal(imgElement) {
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalImg");
        modal.style.display = "block";
        modalImg.src = imgElement.src;
    }

    // Close the Modal
    function closeModal() {
        var modal = document.getElementById("imageModal");
        modal.style.display = "none";
    }

</script>
