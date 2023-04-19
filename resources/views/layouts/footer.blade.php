<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Repairs R Us') }}</title>

    <!-- Fonts -->


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<div class='footer'>
    <hr>
<div class='container mx-0 bg-danger'>
    <div class='row d-flex justify-content-center'>
    <div class='row row-cols-1 row-cols-md-4 bg-danger '>
        <div class='col'>
            <p class='h4 mx-4'>Our Commitment</p>
                <ul class='mx-4 px-0'>
                    <li><a href='#' class='text-white text-decoration-none'>About Us</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>International Repairs</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>FAQ</a></li>
                    <li><a href="{{ route('placeholder') }}" class='text-white text-decoration-none'>Book an appointment</a></li>
                </ul>
        </div>
        <div class='col'>
            <p class='h4 mx-4'>Our Values</p>
                <ul class='mx-4 px-0'>
                    <li><a href='#' class='text-white text-decoration-none'>Environment</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>Privacy</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>Supplier Responsibility</a></li>
                </ul>
        </div>
        <div class='col'>
            <p class='h4 mx-4'>Legal</p>
                <ul class='mx-4 px-0'>
                    <li><a href='#' class='text-white text-decoration-none'>About Us</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>International Repairs</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>FAQ</a></li>
                    <li><a href='#' class='text-white text-decoration-none'>Video Tutorials</a></li>
                </ul>
        </div>
        <div class='col'>
            <p class='h4 mx-4'>More from us</p>
            <div class='d-inline-flex'>
            <embed src="storage/icons/linkedin.svg">
            <embed src="storage/icons/twitter.svg">
            <embed src="storage/icons/facebook.svg">
            <embed src="storage/icons/youtube.svg">
            <embed src="storage/icons/instagram.svg">
            </div>

        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
