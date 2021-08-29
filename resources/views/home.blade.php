@extends('layouts.app')

@section('content')
<br/>
<div style="text-align: right; padding: 10px;" class="align_right"><a href="{{ url('/logout') }}"><button class="btn btn-primary"> Logout </button></a></div>
<br/><br/>
@if(auth()->user()->id !== 2)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="dashboard">
        <h3 class="title"> Dashboard </h3>
        <table class="table ">
            <tr><td colspan="5"><a href="{{ url('/items/create') }}"> <button class="btn btn-info"> Add Item </button></a></td></tr>
        @foreach($menuItems as $menuItem)
            <tr> <td>{{$menuItem->name}}</td>
            <td>{{$menuItem->description}}</td>
            <td>{{$menuItem->price}}.00</td>
        @endforeach
        </table>
    </div>
@endif

@endsection
