@extends('layouts.app')
@section('header'){!!  $post->title !!}@endsection

@section('content')
        <article>
            <ul class="nav nav-tabs nav-justified">
                <li>{{ link_to_route('post.edit', 'Edit', ['id' => $post->id]) }}</li>
                <li>{{ link_to_route('post.destroy', 'Delete', ['id' => $post->id]) }}</li>
            </ul>
            <p>{!! $post->content !!}</p>
            <p>Published: {{ $post->published_at }}</p>
        </article>
@endsection
