{{-- Hier verwijs je naar de layouts pagina app.blade, zodat die opmaak wordt meegenomen --}}



@extends('layouts.app')

@section('content')
<h1>Lijstjes</h1>
@if(count($lijstjes) > 0)
@foreach($lijstjes as $lijstje)

<ul class="list-group" style="margin-top: 5px";>
<li class ="list-group-item">Lijstje van: {{$lijstje->name}}</li>
<li class ="list-group-item">Sinterklaaslijst: {{$lijstje->message}}</li>
@if(!Auth::guest())
@if(Auth::user()->id == $lijstje->user_id)
{{-- <a href="/lijst/{{$lijstje->id}}/edit" class="btn btn-default">Edit</a>  --}}

    {!!Form::open(['action' => ['LijstjesController@destroy', $lijstje->id], 'method' => 'POST', 'class' => 'float-right'])!!}
       {{Form::hidden('_method','DELETE')}}
       {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

 @endif
@endif
</ul>

@endforeach
@endif



@endsection

@section('sidebar')
 @parent
 <p>This is appended to the sidebar</p>
@endsection