@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{URL('/images/delivery-guy.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{URL('/images/dining-table.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{URL('/images/food-image.jpg')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <br/><br/>

    <div class="our_services">
        <h1 class="services_title"> Our Services </h1>
        <div class="services_row">
            <div class="services_container"><img alt="delvery icon" src="{{URL('/images/delivery-service.png')}}"/><h3 class="services_title"> Delivery </h3> </div>
            <div class="services_container"><img alt="dining icon" src="{{URL('/images/services-dining-icon.png')}}"/><h3 class="services_title"> Dining </h3> </div>
        </div>
    </div>
@endsection