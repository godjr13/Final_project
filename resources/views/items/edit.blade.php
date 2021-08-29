@extends('layouts.app')

@section('content')
    <br/><br/><br/>
    <h3 class="title"> Edit Item </h3>
    <div class="container">
    {!! Form::open(['action' => 'App\Http\Controllers\ItemsController@update', $items->id , 'method' => 'POST']) !!}
        <div class="form-group">
            {{form::label('name', 'Name')}}
            {{form::text('name', '$item->name', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{form::label('description', 'Description')}}
            {{form::textarea('description', '$item->description', ['class' => 'form-control', 'placeholder' => 'Describe the item.'])}}
        </div>
        <div class="form-group">
            {{form::label('price', 'Price')}}
            {{form::number('price', '$item->price', ['class' => 'form-control', 'placeholder' => 'Price in LKR'])}}
        </div>
        <div class="form-group">
            {{form::label('img', 'Image URL')}}
            {{form::text('img', '$item->img', ['class' => 'form-control', 'placeholder' => 'Add the image url.'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Add', ['class'=>'btn btn-primary'])}}   
    {!! Form::close() !!}
    

@endsection