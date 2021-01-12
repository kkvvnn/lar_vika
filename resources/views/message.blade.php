@extends('layouts.layout')

@section('content')

    @section('sidebar')
    

    @endsection

    <section class="two">
        <!-- <p>{{ $name }}</p> -->
        <!-- <p>{{ $email }}</p>
        <p>{{ $message }}</p> -->

        <h1>{{ $name }} , Ваше сообщение принято!</h1>

        <a href="{{ route('welcome') }}" class="button">Ok</a>

    </section>

@endsection