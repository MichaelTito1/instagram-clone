@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div class="ps-2"> 
                        <strong> 
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark"> 
                                    {{ $post->user->username }} 
                                </span> 
                            </a> 
                            <a href="#" class="ps-4">Follow</a>
                        </strong>  
                    </div>
                </div>
                <hr>
                <p> 
                    <span class="ps-2">
                        <strong>
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">
                                    {{ $post->user->username }}
                                </span>
                            </a> 
                        </strong>
                    </span> 
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
