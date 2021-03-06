@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src= "/storage/{{$user->profile->image}}" class="rounded-circle" style="width: 150px;">
        </div>
        <!-- {$user->profile->image} -->
        <div class="col-9 pt-5">
            <div class = "d-flex justify-content-between align-items-baseline">
                <div class = "d-flex align-items-center pb-3">
                    <div class="h4 pe-4 pt-1">{{ $user->username }}</div>
                    
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            @endcan
            
            <div class="d-flex">
                <div><strong>{{ $postsCount }}</strong> posts</div>
                <div class="ps-2"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="ps-2"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
