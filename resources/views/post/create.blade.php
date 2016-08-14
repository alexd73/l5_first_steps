@extends('layouts/app')
@section('header') Создать статью @endsection
@section('content')
    {!! Form::open(['route' => 'post.store']) !!}
        @include('post._form')
    {!! Form::close() !!}
@endsection