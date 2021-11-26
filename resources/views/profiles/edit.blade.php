@extends('layouts.app')

@section('content')


<div class="px-6 pt-16 w-full max-w-screen-xl mx-auto">

    <h1 class="text-4xl pb-16 mb-16 border-b border-gray-200">Edit Profile</h1>


    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="grid grid-cols-6 gap-6 items-baseline">

            

            <label for="title" class="col-span-2">Title</label>
            
            <div class="col-span-4">
                <input  id="title" 
                        type="text"
                        class="w-full py-2 px-3 @error('title') is-invalid @enderror"
                        value="{{ old('title') ?? $user->profile->title }}"
                        name="title"
                        autofocus>

                @error('title')
                        <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>
            
            
            <label for="description" class="col-span-2">Description</label>
            
            <div class="col-span-4">
                <input  id="description" 
                        type="text"
                        class="w-full py-2 px-3 @error('description') is-invalid @enderror"
                        value="{{ old('description') ?? $user->profile->description }}"
                        name="description"
                        autofocus>

                @error('description')
                        <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>
            
            
            <label for="url" class="col-span-2">URL</label>
            
            <div class="col-span-4">
                <input  id="url" 
                        type="text"
                        class="w-full py-2 px-3 @error('url') is-invalid @enderror"
                        value="{{ old('url') ?? $user->profile->url }}"
                        name="url"
                        autofocus>

                @error('url')
                        <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>


            <label for="image" class="col-span-2">Profile Caption</label>

            <div class="col-span-4">
                <input type="file" 
                        id="image"
                        name="image"
                class="w-full py-2">

                @error('image')
                    <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>

            <div class="col-span-2">&nbsp;</div>

            <div class="col-span-4">
                <button class="btn btn-primary">
                Save Profile
                </button>
            </div>
        
        </div>


    </form>

</div>



@endsection
