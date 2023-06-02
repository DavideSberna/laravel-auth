@extends('layouts.app')
@section('content')

 


<section class="container">
    <div class="row mt-5">
        @foreach($contents as $content)
        <div class="col">
            <div class="card p-3">
                <h3>{{ $content->title }}</h3>
                <p>{{ $content->description}}</p>
                <a class="btn btn-primary" href="{{ route('admin.edit', ['post' => $content->id]) }}" role="button">update</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection