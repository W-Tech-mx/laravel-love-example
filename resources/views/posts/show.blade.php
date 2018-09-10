@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        {{ $post->body }}
                    </div>

                    <div class="card-footer">
                        @if (! $post->liked)
                            <a href="{{ route('posts.like', $post) }}" class="btn btn-primary btn-sm">({{ $post->likesCount }}) Me gusta</a>
                        @else
                            <a href="{{ route('posts.unlike', $post) }}" class="btn btn-primary btn-sm">({{ $post->likesCount }}) Te gusta</a>
                        @endif

                        @if (! $post->disliked)
                            <a href="{{ route('posts.dislike', $post) }}" class="btn btn-secondary btn-sm">({{ $post->dislikesCount }}) No me gusta</a>
                        @else
                            <a href="{{ route('posts.undislike', $post) }}" class="btn btn-secondary btn-sm">({{ $post->dislikesCount }}) Te disgusta</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
