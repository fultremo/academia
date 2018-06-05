@extends('layouts.layout')

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="{{ route('pages.home') }}">Home</a></li>
                    <li>Contacto</li>
                </ul>
                <h1 class="white-text">@lang('auth.get')</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

@section('contact')
<!-- Contact -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- contact form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h4>@lang('auth.send')</h4>
                    <form action="{{ route('contacts.store', '#create') }}" method="POST">
                            {{ csrf_field() }}
                        <input class="input" type="text" name="first_name" placeholder="@lang('auth.fname')">
                        <input class="input" type="text" name="last_name" placeholder="@lang('auth.lname')">
                        <input class="input" type="email" name="email" placeholder="@lang('auth.address')">
                        <input class="input" type="text" name="subject" placeholder="@lang('auth.subject')">
                        <textarea class="input" name="message" placeholder="@lang('auth.enter')"></textarea>
                        <button class="main-button icon-button pull-right">@lang('auth.send')</button>
                    </form>
                </div>
            </div>
            <!-- /contact form -->

            <!-- contact information -->
            <div class="col-md-5 col-md-offset-1">
                <h4>@lang('auth.contact')</h4>
                <ul class="contact-details">
                    <li><i class="fa fa-envelope"></i>Educate@email.com</li>
                    <li><i class="fa fa-phone"></i>122-547-223-45</li>
                    <li><i class="fa fa-map-marker"></i>4476 Clement Street</li>
                </ul>

                <!-- contact map -->
                <div id="contact-map"></div>
                <!-- /contact map -->

            </div>
            <!-- contact information -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Contact -->
@endsection


