@extends('layouts.app')
@section('header'){!!  $post->title !!}@endsection

@section('content')
    <article>
        {{ Form::open(array('url' => 'post/' . $post->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-warning']) }}
        {{ link_to_route('post.edit', 'Edit', ['id' => $post->id], ['class' => 'btn btn-info ']) }}
        {{ Form::close() }}
        <p>{!! $post->content !!}</p>
        <p>Published: {{ $post->published_at }}</p>
    </article>
@endsection
