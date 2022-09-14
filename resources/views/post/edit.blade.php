<x-layout>
    <x-card>
        @if(Session::has('message'))
            <p class="text-green-800 bg-gray-500 p-2 w-full text-center">{{ Session::get('message') }}</p>
        @endif
        <h1 class="text-center">Edit Post</h1>
        <form  action="{{ route('post.update',$post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Title</label>
            <input type="text" name="title" id="" value="{{ $post->title }}" class="block w-full border-2 rounded-lg py-3 @error('title') border-red-500 @enderror">
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="">Casts</label>
            <input type="text" name="casts" id="" value="{{ $post->casts }}" class="block w-full border-2 rounded-lg py-3 @error('casts') border-red-500 @enderror">
            @error('casts')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="">Genre</label>
            <input type="text" name="genre" id="" value="{{ $post->genre }}"  class="block w-full border-2 rounded-lg py-3 @error('genre') border-red-500 @enderror">
            @error('genre')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label for="">Time to Read</label>
            <input type="number" name="time_to_read" id="" value="{{ $post->time_to_read }}"  class="block w-full border-2 rounded-lg py-3 @error('time_to_read') border-red-500 @enderror">
            @error('time_to_read')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <button type="submit" class="bg-green-600 px-3 py-1 rounded-md mt-2">Post</button>
        </form>
    </x-card>
</x-layout>