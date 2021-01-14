@extends('layouts.layout')

@section('sidebar')

    <li><a href="{{ route('welcome') }}" id="top-link" class="active"><span class="icon solid fa-home">Главная</span></a></li>
    
@endsection

@section('content')

    <section class="two">
    @foreach ($messages as $message) 
        <p>{{ $message->name }}</p>  
        <p>{{ $message->email }}</p> 
        <p>{{ $message->message }}</p> 
        <p>{{ $message->created_at }}</p>
        <hr>
    @endforeach

    </section>

@endsection