@extends('layouts.app')

@section('content')
<div>
    
    
    <div class="container">
        <div class="mt-5"> 
            <h3>tabella cateogrie</h3>
        </div>
        <div class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($categoryTable->first()->getAttributes() as $category => $value)
                        <th>{{ $category }}</th>
                        @endforeach
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoryTable as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
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
</div>

@endsection
