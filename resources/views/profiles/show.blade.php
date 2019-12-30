

@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>


@section('content')
<div class="container">
 
            <div class="col-top">
                 <img class="" src="/Images/diary-book.png" style="width:200px; display:block;direction:rtl;"/>
            <div class="row justify-content-center pt-5">
            <a href="{{ url('/m/create') }}">
                <div class="btn-submit-diary">
                <img src="/Images/add.png"/> ثبت خاطره جدید
                </div>
                </a>
             </div>
             <div class="row  pt-5">
        @foreach ($user->memories as $memory)
        <div class="col-6">
             <div class="d-flex blu-p"><p class="pb-2">{{$memory->subject}}</p>
             <div style="direction:ltr blu-p" class="d1">{{$memory->created_at}}</div>
          </div>
             
        <div class="row">
        <a class="custom-link" href="/m/{{$memory->id}}"> <img src="/Images/eye.png"/> نمایش</a>
        <a class="custom-link" href="/m/{{$memory->id}}/edit"><img src="/Images/edit.png"/> ویرایش</a>
        <a class="custom-link" href="/m/{{$memory->id}}/delete"> <img src="/Images/delete.png"/> حذف</a>
        </div>
        </div>
        
        @endforeach
</div>
</div>
</div>
@endsection
