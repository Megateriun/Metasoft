@extends('layouts.home')

@section('title', 'Perfil')

@section('css')
@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection


@section('content')
<ul>
    <li>{{auth()->user()->role}}</li>
    <li>{{auth()->user()->name}}</li>
    <li>{{auth()->user()->document}}</li>
    <li>{{auth()->user()->email}}</li>
</ul>


@endsection

@section('script')
@endsection