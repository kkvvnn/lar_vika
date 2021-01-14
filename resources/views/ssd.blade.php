@extends('layouts.layout')

@section('content')

    @section('sidebar')
    

    @endsection

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