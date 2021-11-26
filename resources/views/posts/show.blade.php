@extends('layouts.app')

@section('content')


<div class="px-6 pt-16 w-full max-w-screen-xl mx-auto flex gap-x-8 gap-y-12">
    <div class="w-4/6">
        <img src="/storage/{{ $post->image }}" alt="">
    </div>
    <div class="w-2/6">
        <h3 class="text-xl font-semibold">{{ $post->user->username }}</h3>
        <p>{{ $post->caption }}</p>
    </div>
</div>



@endsection
