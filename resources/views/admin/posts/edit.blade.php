@extends('layouts.app')
@section('content')



  
 <div class="container">
    <div class="row mt-5">
        <div class="mb-4 icon">
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-circle-chevron-left text-secondary"></i></a> 
        </div>
        <div class="mb-3">
            <h3>Modifica progetti</h3>
        </div>
        <div class="col-6">
            <form action="{{ route('admin.posts.update',  $post->slug) }}" method="POST">
                @csrf
        
                @method('PUT')
        
                <div class="mb-3">
                    <label for="title" class="form-label">Name/Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp"  value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="image" aria-describedby="emailHelp" value="{{ $post->image }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description"  value="{{ $post->description }}">
                </div>
                <div class="mb-3">
                    <label for="programming_language" class="form-label">Programming language</label>
                    <input type="text" class="form-control" name="programming_language" id="programming_language"  value="{{ $post->programming_language }}">
                </div>
                <div class="mb-3">
                    <label for="difficulty" class="form-label">Difficulty</label>
                    <input type="text" class="form-control" name="difficulty" id="difficulty"  value="{{ $post->difficulty }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>


@endsection