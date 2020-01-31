@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cree un post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group">
                            <label for="Caption">Caption</label>
                            <input id="Caption" type="text" class="form-control @error('Caption') is-invalid @enderror" name="Caption" value="{{ old('Caption') }}"  autocomplete="Caption" autofocus>
                            @error('Caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name='image' class="custom-file-input  @error('image') is-invalid @enderror" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choisir une image...</label>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Cree mon post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
