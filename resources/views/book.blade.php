<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Kefcuts - Book Appointment</title>
    <link href="test/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- <link href="test/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" > -->
    <!-- <link href="test/plugins.css" rel="stylesheet" type="text/css" > -->
    <link href="{{ asset('test/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('test/coloring.css') }}" rel="stylesheet" type="text/css" >
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    @notifyCss
    <!-- color scheme -->
    <link id="colors" href="{{ asset('test/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" >
</head>
<body class="dark-scheme" style="margin-top: 100px;">
  <!-- Navigation -->
    
    <section id="section-form" class="no-top">
      <div class="arrow-back">
        <a href="/">
          <i class="fa-solid fa-arrow-left"></i>
        </a>
      </div>
        <div class="container">
        <div class="row">

            <div class="col-md-10 offset-md-1">
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <h3>{{ $error }}</h3>   
                    @endforeach
                @endif
                {{-- action="{{ route('booking.store') }}" --}}
                <form name="contactForm"  id='contact_form' class="form-border" method="post">
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>
                                    @php
                                        connectify('error','error occured',$error)
                                    @endphp
                                    </div>
                            @endforeach
                        @endif
                    <div id="step-1" class="row">
                        <h3 class="s2">Choose Services</h3>

                        <div class="row">
                        @if(!empty($categories))
                            @foreach ($categories as $category)
                                <div class="col-xl-6 col-lg-6">
                                <div class="sc-group">
                                    <h5>{{ $category->name }}</h5>
                                    @foreach ($category->services as $service)
                                        <div class="form-group">
                                        <div>
                                            <input type="checkbox" data-price="{{ $service->price }}" name="service_types" id="s_a1" value="{{ $service->id }}">
                                            <label for="s_a1">{{ $service->name }}</label>
                                        </div>
                                        <p>{{ $service->price }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>

                        <div class="spacer-single"></div>

                        <!-- step 2 -->

                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="s2">Select Date</h3>
                                <input type="date" name="date" id="date" class="form-control" required />
                                <div class="spacer-single"></div>
                                <h3 class="s2">Select Time</h3>
                                <div class="custom_radio" id="time-container">
                                @if(!empty($times))
                                    @foreach ($times as $time)
                                        <div class="radio-opt">
                                            <input type="radio" id="{{ $time['time'] }}"  value="{{ $time['id'] }}" name="selecttime"><label for="{{ $time['time'] }}">{{ $time['time'] }}</label>
                                        </div>
                                    @endforeach
                                @endif                                                                                                                              
                                </div>
                            </div>  
                        </div>

                        <div class="spacer-single"></div>

                        <div class="row">
                            <h3 class="s2">Your details</h3>


                            <div class="col-lg-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div class="mb25">
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div class="mb25">
                                    <input type='email' name='email' id='email' class="form-control" placeholder="Your Email">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div class="mb25">
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6" align="center"></div>
                                <p id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Submit Form' class="btn-main">
                                </p>
                            </div>
                        </div>

                    </div>
                    
                </form>

                <div id="success_message" class='success'>
                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                </div>
                <div id="error_message" class='error'>
                    Sorry there was an error sending your form.
                </div>

            </div>

        </div>
    </div>
</section>
<!-- <script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
<script src='../../../www.google.com/recaptcha/api.js' async defer></script>
<script src="form.js"></script>

<script type="text/javascript">     
    jQuery(function($){     
        $( '.g-recaptcha' ).attr( 'data-theme', 'dark' );     
    });     
</script> -->
<x-notify::notify />
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/payment.js') }}"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/form.js') }}"></script>
@notifyJs
</body>
</html>