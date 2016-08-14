@extends('layouts/app')
@section('header') Изменить статью @endsection;
@section('content')
    {!! Form::model($post, [
        'route' => ['post.update', $post->id],
        'method' => 'PUT'
        ])
    !!}
        @include('post._form')
    {!! Form::close() !!}
@endsection