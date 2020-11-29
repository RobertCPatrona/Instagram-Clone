@extends('layouts.app')

@section('content')
<div class="container">
    @if($posts->count() == 0)
        <h3>Home feed empty. Please follow users to see their posts.</h3>
    @endif

    @foreach($posts as $post)
    <div class="col-6 offset-3 mb-3"
         style="border: 0.1px solid #9f9f9f; box-shadow: 1px 1px 1px #acacac; background-color: white">
        <div>
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100 pt-2">
            </a>
        </div>

        <div class="pt-2 pb-3 mt-1" style="font-size: 17px">
            <div class="mb-2">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="{{ $post->user->profile->profileImage() }}"
                         class="rounded-circle w-100 mr-2"
                         style="max-width: 40px">

                    <span class="font-weight-bold text-dark">
                        {{ $post->user->username }}
                    </span>
                </a>
            </div>
            <div>
                {{ $post->caption }}
            </div>
        </div>
    </div>

    @endforeach

    <div class="row d-flex">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>
@endsection
