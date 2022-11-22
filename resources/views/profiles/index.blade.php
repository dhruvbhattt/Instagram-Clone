@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 pt-3 pe-5 ps-5 ">
            <img src="{{ $user->profile->profileImage() }}" style="max-height: 210px;" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-3 ps-0">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can ('update', $user->profile)
                <a class="btn btn-primary" href="/p/create">Add New Post</a>
                @endcan

            </div>

            @can ('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pe-5 "><strong>{{ $user->posts->count() }}</strong> posts </div>
                <div class="pe-5 "><strong>{{ $user->profile->followers->count() }}</strong> followers </div>
                <div class="pe-5 "><strong>{{ $user->following->count() }}</strong> following </div>
            </div>
            <div class="pt-3 fw-bold">{{$user->profile->title}}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <hr>
    <div class="row pt-3">
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