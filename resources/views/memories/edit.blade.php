@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>

@section('content')
<div class="container">
    <form action="/m/{{$memory->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="row justify-content-center pt-5 pb-3">
            <h3 class="blu-p cntnt">ویرایش خاطره "{{$memory->subject}}"</h3>
            </div>
        <div class="form-group row">
            <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') ?? $memory->subject }}"  autocomplete="subject" autofocus>   
            @error('subject')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
        </div>

        <div class="form-group row">
        <textarea rows="12" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus>{{ old('description') ?? $memory->description }} </textarea>
            @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
        </div>
        <div class="form-group row mb-0">
                    <div class="col-8 offset-md-4">
                        <button class="btn btn-primary">ثبت</button>
                    </div>
                </div>
    </div>
    </form>
</div>
@endsection