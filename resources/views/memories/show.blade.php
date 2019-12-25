@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
         <div class="col-8">
             <p>{{$memory->subject}}</p>
        </div>
        <div class="col-4">
            <p>
            {{$memory->description}}
            </p>
        </div>
    </div>
</div>
@endsection