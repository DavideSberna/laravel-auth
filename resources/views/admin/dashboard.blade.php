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
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tabella</th>
                            <th>Numero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="link-underline-light" href="{{ route('admin.posts') }}">Posts</a></td>
                            <td>{{ $postCount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tabella</th>
                            <th>Numero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="link-underline-light" href="{{ route('admin.categories') }}">Categories</a></td>
                            <td>{{ $categoryCount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tabella</th>
                            <th>Numero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="link-underline-light" href="{{ route('admin.users') }}">Users</a></td>
                            <td>{{ $userCount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
