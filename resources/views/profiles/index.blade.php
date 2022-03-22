@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://camo.githubusercontent.com/03adfa4cac70588a30717c515df0c1e8976bcc339e00848ac214502637544e93/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f66726565636f646563616d702f637572726963756c756d2d6469616772616d2d66756c6c2e6a7067" class="rounded-circle" style="width: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class = "d-flex justify-content-between align-items-baseline">
                <div><h1>{{ $user->username }}</h1></div>
                <a href="/p/create">Add new post</a>
            </div>
            
            <div class="d-flex">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="ps-2"><strong>23k</strong> followers</div>
                <div class="ps-2"><strong>212</strong> following</div>
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
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
    </div>
</div>
@endsection
