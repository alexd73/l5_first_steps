@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Статьи</div>
                    <ul class="nav nav-tabs">
                        <li>{!! link_to_route('post', 'Published') !!}</li>
                        <li>{!! link_to_route('post.unpublished', 'UnPublished') !!}</li>
                    </ul>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <article>
                                <h2>{!!  $post->title !!}</h2>
                                <p>{!! $post->excerpt !!}</p>
                                <p>Published: {{ $post->published_at }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
