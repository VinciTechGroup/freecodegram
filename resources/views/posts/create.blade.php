@extends('layouts.app')

@section('content')


<div class="px-6 pt-16 w-full max-w-screen-md mx-auto space-y-4">

        <h1 class="text-4xl pb-16 mb-16 border-b border-gray-200">Add New Post</h1>


    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="grid grid-cols-6 gap-6 items-baseline">

            

            <label for="caption" class="col-span-2">Post Caption</label>
            
            <div class="col-span-4">
                <input  id="caption" 
                        type="text"
                        class="w-full py-2 px-3 @error('caption') is-invalid @enderror"
                        value="{{ old('caption') }}"
                        name="caption"
                        autofocus>

                @error('caption')
                        <strong class="text-red-500">{{ $message }}</strong>
                @enderror
            </div>


            <label for="image" class="col-span-2">Post Caption</label>

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
                Add Post
                </button>
            </div>
        
        </div>


    </form>


    

</div>



@endsection
