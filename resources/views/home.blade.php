@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://camo.githubusercontent.com/03adfa4cac70588a30717c515df0c1e8976bcc339e00848ac214502637544e93/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f66726565636f646563616d702f637572726963756c756d2d6469616772616d2d66756c6c2e6a7067" class="rounded-circle" style="width: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div><strong>153</strong> posts</div>
                <div class="ps-2"><strong>23k</strong> followers</div>
                <div class="ps-2"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>freeCodeCamp.org</strong></div>
            <div>
                We're a global community of millions of people learning to code together. LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/
            </div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
</div>
@endsection
