@extends('layouts.app')

@section('content')


<div class="container">
        <div class="mt-5"> 
            <h3>tabella User</h3>
        </div>
        <div class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($userTable->first()->getAttributes() as $user => $value)
                        <th>{{ $user }}</th>
                        @endforeach
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userTable as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <span class="badge text-bg-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="">Add new</a></span>
                            <span class="badge text-bg-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="">Edit</a></span>
                            <span class="badge text-bg-danger"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="">Delete</a></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection
