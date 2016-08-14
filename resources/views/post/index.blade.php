@extends('layouts.app')
@section('header')Статьи@endsection

@section('content')
    @foreach($posts as $post)
        <div class="media">
            <div class="media-left media-middle">
                <a href="{{ route('post.show', ['id' => $post->id]) }}">
                    <img class="media-object" src="http://www.brcreativo.com/clientes/++finaxion/img/64.svg" alt="">
                </a>
            </div>
            <div class="media-body">
                <h2 class="media-heading">{!!  $post->title !!} <span class="badge">{{ $post->published_at }}</span></h2>

                <p>{!! $post->excerpt !!}</p>
                {!! link_to_route('post.show', 'Подробнее', ['id' => $post->id], ['class' => '']) !!}

            </div>
        </div>
    @endforeach
@endsection
