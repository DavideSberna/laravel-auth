@extends('layouts.app')
@section('content')



 
  
 <div class="container">
        <div class="mt-5 d-flex align-items-center"> 
            <h3 class="m-0 me-3">Tabella Post</h3>
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary icon" href="{{ route('admin.posts.create') }}"><i class="fa-solid fa-circle-plus"></i></a>
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
                        <td><img class="post-img-size" src="{{ $post->image }}" alt="{{ $post->title }}"></td>
                        <td>{{ $post->difficulty }}</td>
                        <td>
                            <div class="overflow-auto max-height">{{ $post->description }}</div>
                        </td>
                        <td>{{ $post->programming_language }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>
                            <div>
                                <span class="badge text-bg-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.posts.show', $post->slug ) }}">Show</a></span>
                            </div>
                            <div>
                                <span class="badge text-bg-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.posts.edit', $post->slug) }}">Edit</a></span>
                            </div>
                            <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button btn btn-danger text-white"
                                    data-item-title="{{ $post->slug }}"> <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{$postTable->links('pagination::bootstrap-4')}}
            </div>
        </div>
        @include('partials.modal-delete')
    </div>
@endsection