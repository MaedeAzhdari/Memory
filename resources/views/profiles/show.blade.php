

@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>

@section('content')
<div class="container">
 
            <div class="col-top">
                 <img class="" src="/Images/diary-book.png" style="width:200px; display:block;direction:rtl;"/>
            <div class="row justify-content-center pt-5">
            <a href="{{ url('/m/create') }}">
                <div class="btn-submit-diary d-flex">
                ثبت خاطره جدید
                </div>
                </a>
             </div>
             <div class="row  pt-5">
        @foreach ($user->memories as $memory)
        <div class="col-6">
             <div class="d-flex"><p class="pb-2">{{$memory->subject}}</p>
             <div style="direction:ltr" class="d1">{{$memory->created_at}}</div>
          </div>
             
        <div class="row">
        <a class="custom-link" href="/m/{{$memory->id}}">
        نمایش </a>
        <a class="custom-link" href="/m/{{$memory->id}}">
        ویرایش </a>
        <a class="custom-link" href="/m/{{$memory->id}}">
        حذف </a>
        </div>
        </div>
        
        @endforeach
</div>
</div>
</div>
@endsection
