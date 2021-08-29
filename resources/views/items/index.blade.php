@extends('layouts.app')

@section('content')
    <script src="https://kit.fontawesome.com/0bedb6a2ab.js" crossorigin="anonymous"></script>
    <h1 class="title"> Menu </h1>
    <div class="menu">
    
    @if(count(array($menuItems)) > 0 )
        @foreach($menuItems as $menuItem)
        <div class="menuItem">
            <h4 class="menuItem_name"> {{$menuItem->name}} </h3>
            <img class="menuItem_img" src="{{$menuItem->img}}" alt="{{$menuItem->name}}"/>
            <p class="menuItem_description"> {{$menuItem->description}} </p>
            <p class="menuItem_price"> price: LKR {{$menuItem->price}}.00 </p>
        </div>
        @endforeach
    @else
        <p> No items found </p>
    @endif
    </div>
    <div class="place_your_order">
        <i class="fas fa-phone-alt"></i>
        Contact us to place your order: +94 112 729 729
    </div> 
@endsection