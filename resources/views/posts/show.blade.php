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
                   <div class="pe-2">
                       <img src="{{ $post->user->profile->profileImage() }}"class="rounded-circle w-100" style="max-width: 40px;">
                   </div>
                   <div>
                       <div>
                           <a href="/profile/{{ $post->user->id }}" style="text-decoration:none; font-weight:bold;">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        </div>
                   </div>
               </div>
               <hr>
                <p><span>
                    <a href="/profile/{{ $post->user->id }}" style="text-decoration:none; font-weight:bold;">
                    <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                    </span> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
