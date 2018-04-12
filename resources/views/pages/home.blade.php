@extends('layouts.layout')

@section('home')
    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text">Academia Edusite Free Online Training Courses</h1>
                        <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant, eu pro alii error homero.</p>
                        <a class="main-button icon-button" href="#">Get Started!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

    <div class="section">
        <div class="container">
            <h1>Home</h1>
            <h2>Tu estas en la vista: application/view/home/index.php (everything in the box comes from this file)</h2>
            <p>Esta es la página principal.</p>
            <p><h1>POR FIN HE LLEGADO!!!!!</h1></p>
            <p>@yield('meta-title', config('app.name'))</p>
        </div>
    </div>

@endsection