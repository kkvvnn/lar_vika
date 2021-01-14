@extends('layouts.layout')

@section('sidebar')

    <li><a href="{{ route('welcome') }}" id="top-link" class="active"><span class="icon solid fa-home">Главная</span></a></li>
    
@endsection

@section('content')

    <section class="two">
        <!-- <p>{{ $name }}</p> -->
        <!-- <p>{{ $email }}</p>
        <p>{{ $message }}</p> -->

        <h1>{{ $name }} , Ваше сообщение принято!</h1>

        <a href="{{ route('welcome') }}" class="button">Ok</a>

    </section>

@endsection