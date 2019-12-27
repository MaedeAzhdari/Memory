@extends ('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>


@section ('content')
<div class="container">
<div class="col-top">
<img class="" src="/Images/diary-book.png" style="width:200px; display:block;direction:rtl;"/>
</div>
    <div class="row justify-content-center">
             <h3 class="blu-p pb-5 pt-3">{{$memory->subject}}</h3>

    </div>
    <div class="row cntnt">
            <p style="text-align:justify"> 
            {{$memory->description}}
            </p>
        </div>
                <div class="row justify-content-center">
                <button class="btn btn-primary">بازگشت</button>
                </div>
        </div>
</div>
@endsection