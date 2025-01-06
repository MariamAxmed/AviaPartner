<!--        Contact Us        -->
<section id="contact" class="wrapper">
    <div  class="container">
        <div class="row">
            <div class="col-md-4 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                <i class="fa fa-map-marker"></i>
                <h3>{{ __('messages.address') }}</h3>
                <p class="contact">
                    {{ __('messages.address_info') }}
                </p>
            </div>
            <div class="col-md-4 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                <i class="fa fa-phone"></i>
                <h3>{{ __('messages.phone') }}</h3>
                <p class="contact">
                    (+994 12) 598 05 98 <br>
                    (+994 10) 255 39 09
                </p>
            </div>
{{--            <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">--}}
{{--                <i class="fa fa-print"></i>--}}
{{--                <h3>Email</h3>--}}
{{--                <p class="contact">--}}
{{--                     <br>--}}
{{--                </p>--}}
{{--            </div>--}}
            <div class="col-md-4 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">
                <i class="fa fa-envelope"></i>
                <h3>{{ __('messages.email_address') }}</h3>
                <p class="contact">
                    <a href="mailto:info@aviapartner.az">info@aviapartner.az</a> <br>
                </p>
            </div>
        </div> <!-- /.row -->
        <form class="row form wrapper">
            <h3>{{ __('messages.contact_title') }}</h3>
            <div class="col-sm-4 col-xs-12 form-group">
                <label class="sr-only">Name</label>
                <input name="name" class="form-control" type="text" placeholder="{{ __('messages.first_name') }}">
            </div> <!-- /.form-group -->
            <div class="col-sm-4 col-xs-12 form-group">
                <label class="sr-only">Email</label>
                <input name="email" class="form-control" type="email" placeholder="{{ __('messages.email_address') }}">
            </div> <!-- /.form-group -->
            <div class="row">
                <div class="col-md-12 col-xs-12 form-group">
                    <label class="sr-only">Message</label>
                    <textarea class="message form-control" placeholder="{{ __('messages.write_message') }}"></textarea>
                </div> <!-- /.form-group -->
                <input class="btn btn-sub" type="submit" value="{{ __('messages.send_message') }}">
            </div>
        </form> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /#contact -->
