@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3 pb-2">

        <img src="{{ $post->user->profile->profileImage() }}"class="rounded-circle w-100" style="max-width: 30px;">

        <a href="/profile/{{ $post->user->id }}" style="text-decoration:none; font-weight:bold;">
                    <span class="text-dark">{{ $post->user->username }}</span>
                    </a>

        </div>
        <div class="col-6 offset-3">
       <a href="/profile/{{ $post->user->id }}">
       <img src="/storage/{{ $post->image }}" class="w-100">
       </a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
               <div class="d-flex align-items-center">
                   <div class="pe-2 pt-2 pb-3">
                       <img src="{{ $post->user->profile->profileImage() }}"class="rounded-circle w-100" style="max-width: 30px;">
                   </div>
                <p><span>
                    <a href="/profile/{{ $post->user->id }}" style="text-decoration:none; font-weight:bold;">
                    <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                    </span> {{ $post->caption }}</p>
            </div>
            <hr>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12  d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
