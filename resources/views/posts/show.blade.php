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
                        <img src="{{ $post->user->profile->profileImage() }}"
                             class="rounded-circle w-100"
                        style="max-width: 40px">
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="font-weight-bold text-dark">
                                {{ $post->user->username }}
                            </span>
                        </a>

                        <follow-button user-id="{{ $post->user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                </div>

                <hr>

                <p>
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="font-weight-bold text-dark">
                            {{ $post->user->username }}
                        </span>
                    </a>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
