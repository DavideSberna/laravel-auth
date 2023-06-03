@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('admin.update', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}">
    <br>
    <label for="description">Descrizione</label>
    <input type="text" name="description" id="description" value="{{ $post->description }}">

    <input type="submit" value="invia">

</form>
     
</div>
@endsection
