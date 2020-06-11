@extends('index')
@section('title', 'Create Post')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1>Create a new post</h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">Enter appropriate information</h5>
            <form action="{{ route('post') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" placeholder="Sapiens" name="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="title">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-lg btn-primary" type="submit">
                        Submit 
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
