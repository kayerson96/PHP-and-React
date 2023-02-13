@extends('template')
@section('content')

@php
use App\Models\Post;
    $post= Post::get();
    foreach ($post as $post) {

    }
@endphp

<h1>hola</h1>
<a href="https://platzi.com/cursos/api-profesional/?notification_id=2517395">Hola</a>

@endsection
