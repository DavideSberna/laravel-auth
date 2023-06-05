@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="mt-5"> 
            <h3>tabella Post</h3>
        </div>
        <div class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($postTable->first()->getAttributes() as $post => $value)
                        <th>{{ $post }}</th>
                        @endforeach
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($postTable as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                           <div class="overflow-auto max-height">{{ $post->article }}</div>
                        </td>
                        <td>{{ $post->image }}</td>
                        <td>{{ $post->vote }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <span class="badge text-bg-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="">Add new</a></span>
                            <span class="badge text-bg-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.edit' , $post->id) }}">Edit</a></span>
                            <span class="badge text-bg-danger"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="">Delete</a></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
