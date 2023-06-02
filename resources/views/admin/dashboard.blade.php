@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

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

        </div>
    </div>
</div>
@endsection
