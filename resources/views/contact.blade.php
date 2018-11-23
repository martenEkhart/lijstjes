{{-- Hier verwijs je naar de layouts pagina app.blade, zodat die opmaak wordt meegenomen --}}

@extends('layouts.app')

{{-- Als je een form wil maken moet je wel altijd de dependecie downloaden bij laravel-collective --}}

@section('content')
<h1>Je Sinterklaas Lijstje</h1>

{{-- Hier ga je met action naar =>(verwijst naar een Associative-Array) LijstjesController@store --}}

{!! Form::open(['action' => 'LijstjesController@store']) !!}
    <div class="form-group">
            {{Form::label('name', 'Naam')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    <div class="form-group">
            {{Form::label('message', 'Lijst')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Hier Je Lijstje'])}}
    </div> 
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg'])}}
    </div>      
{!! Form::close() !!}

@endsection