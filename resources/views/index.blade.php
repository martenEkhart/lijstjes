@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum explicabo mollitia dolorum veritatis sint animi, possimus esse corporis odio. Doloremque distinctio laboriosam est atque quibusdam debitis sunt fugit illum harum.</p>
@endsection

@section('sidebar')
 @parent
 <p>This is appended to the sidebar</p>
@endsection
