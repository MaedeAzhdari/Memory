@extends ('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>

@section ('content')
<div class="container">
    <form action="/m" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row"> 
        <div class="col-top">
<img class="" src="/Images/diary-book.png" style="width:200px; display:block;direction:rtl;"/>
</div>
        <div class="col-8 offset-2">
            <div class="row justify-content-center p-2">
           <h3 class="blu-p">ثبت خاطره جدید </h3>
            </div>
        <div class="form-group row">
             <input placeholder="عنوان خاطره" id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}"  autocomplete="subject" autofocus>
         </div>
                <div class="form-group row">
                <textarea placeholder="متن خاطره" rows="12" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-8 offset-md-4">
                        <button class="btn btn-primary">ثبت</button>
                        <input class="btn btn-primary" type="button" onClick="history.back()" value="بازگشت">
                    </div>
                </div>
        </div>
    </div>
    </form>
</div>
@endsection