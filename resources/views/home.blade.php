@extends('layouts.app')

@section('content')

<div class="container-fluid ">
          <!-- Nav pills -->
            <ul class="nav nav-pills justify-content-center mt-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#home"><i class="fa fa-square" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2"><i class="fa fa-th" aria-hidden="true"></i></a>
                </li>
            </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home" class="container-fluid tab-pane active "><br>
                    <div class="row justify-content-center">

                            @foreach($posts as $post)

                            <div class="card mx-auto custom-card mb-5" id="prova">
                                <div class="row post-header col-12 py-2 px-3">
                                    <div class="col-6 float-left "><h4>{{$post->title}}</h4></div>
                                        <div class="col-6 float-right ">
                                            <a href="{{route('profile.show',$post->User->id)}}">
                                                <h4 class="text-right">{{$post->User->name}}</h4>
                                           </a>
                                        </div>
                                </div>
                                    <img class="card-img" src="{{asset('upload-img/'.$post->img)}}" alt="Card image cap" style="width: 600px">
                                        <div class="card-body px-3">
                                            @if (! $post->liked)
                                                <a href="{{ route('posts.like', $post) }}" class="btn btn-light btn-sm">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                                <p class="">{{ $post->likesCount }} Likes</p>
                                            @else
                                                <a href="{{ route('posts.unlike', $post) }}" class="btn btn-danger btn-sm">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                                <p class="">{{ $post->likesCount }} Likes</p>
                                            @endif

        {{--                                    @if (! $post->disliked)--}}
        {{--                                        <a href="{{ route('posts.dislike', $post) }}" class="btn btn-secondary btn-sm">({{ $post->dislikesCount }}) No me gusta</a>--}}
        {{--                                    @else--}}
        {{--                                        <a href="{{ route('posts.undislike', $post) }}" class="btn btn-secondary btn-sm">({{ $post->dislikesCount }}) Te disgusta</a>--}}
        {{--                                    @endif--}}
                                        </div>
                                 <div class="row post-header px-2 pb-2">
                                    <div class="col-10 float-left text-left">{{$post->description}}</div>
                                </div>
                            </div>
                            @endforeach

                    </div>
                </div>

                <div id="menu2" class="container-fluid tab-pane fade"><br>
                    <div class="row ">
                    @foreach($posts2 as $post)
                        <div class="col-md-4 col-sm-6 px-1 my-1 ">
                            <div class="card mx-auto custom-card mb-5" id="prova">
                                <div class="row post-header col-12 py-2 px-3">
                                    <div class="col-6 float-left "><h4>{{$post->title}}</h4></div>
                                        <div class="col-6 float-right ">
                                            <a href="{{route('profile.show',$post->User->id)}}">
                                                <h4 class="text-right">{{$post->User->name}}</h4>
                                           </a>
                                        </div>
                                </div>
                                    <img class="card-img" src="{{asset('upload-img/'.$post->img)}}" >
                                        <div class="card-body px-3">
                                            @if (! $post->liked)
                                                <a href="{{ route('posts.like', $post) }}" class="btn btn-light btn-sm">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                               <p class="">{{ $post->likesCount }} Likes</p>
                                            @else
                                                <a href="{{ route('posts.unlike', $post) }}" class="btn btn-danger btn-sm">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                               <p class="">{{ $post->likesCount }} Likes</p>
                                            @endif

        {{--                                    @if (! $post->disliked)--}}
        {{--                                        <a href="{{ route('posts.dislike', $post) }}" class="btn btn-secondary btn-sm">({{ $post->dislikesCount }}) No me gusta</a>--}}
        {{--                                    @else--}}
        {{--                                        <a href="{{ route('posts.undislike', $post) }}" class="btn btn-secondary btn-sm">({{ $post->dislikesCount }}) Te disgusta</a>--}}
        {{--                                    @endif--}}
                                        </div>
                                 <div class="row post-header px-2 pb-2">
                                    <div class="col-10 float-left text-left">{{$post->description}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
</div>

@endsection
