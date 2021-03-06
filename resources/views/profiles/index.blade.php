@extends('layouts.app')

@section('content')


<div class="px-6 pt-16 w-full max-w-screen-lg mx-auto grid grid-cols-6 gap-8">
    <div class="col-span-1 bg-green-800 relative w-full h-0 overflow-hidden rounded-full" style="padding-bottom: 100%;"><img src="/images/flame.svg" class="absolute inset-0 p-8 w-full h-full object-contain"></div>
    <div class="col-span-5 text-sm space-y-5">
        <div class="flex justify-between items-baseline">
            <h1 class="text-3xl -mb-4">{{ $user->username }}</h1>

            @can('update', $user->profile)
            <a href="/p/create">Add New Post</a>
            @endcan
            
        </div>
        
        <div class="">

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="-mt-3 block mb-6 link">Edit Profile</a>
            @endcan

            <div class="flex gap-6">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div><strong>23k</strong> followers</div>
                <div><strong>212</strong> following</div>
            </div>
        </div>
        <div>
            <h3 class="font-bold">{{ $user->profile->title }}</h3>
            <p class="max-w-lg">{{ $user->profile->description }}</p>
            <a href="https://freecodecamp.com" class="link">{{ $user->profile->url ?? 'N/A' }}</a>
        </div>
    </div>

</div>

<div class="px-6 py-16 w-full max-w-screen-lg mx-auto grid grid-cols-3 gap-8">

    @foreach($user->posts as $post)

        <div class="fixed-image-container">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="fixed-image object-cover" />
            </a>
        </div>
        
    @endforeach

    </div>



@endsection
