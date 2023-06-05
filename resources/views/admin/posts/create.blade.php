@extends('layouts.app')
@section('content')



  
 <div class="container">
    <div class="row mt-5">
        <div class="mb-4 icon">
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-circle-chevron-left text-secondary"></i></a> 
        </div>
        <div class="mb-3">
            <h3>Aggiungi nuovi progetti</h3>
        </div>
        <div class="col-6">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
        
        
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" aria-describedby="emailHelp" value="">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name/Title</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"  value="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description"  value="">
                </div>
                <div class="mb-3">
                    <label for="programming_language" class="form-label">Programming language</label>
                    <input type="text" class="form-control" id="programming_language"  value="">
                </div>
                <div class="mb-3">
                    <label for="difficulty" class="form-label">Difficulty</label>
                    <input type="text" class="form-control" id="difficulty"  value="">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>


@endsection