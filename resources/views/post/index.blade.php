<x-layout>
    <x-card>
        @if(Session::has('message'))
            <p class="text-green-800 bg-gray-500 p-2 w-full text-center">{{ Session::get('message') }}</p>
        @endif
        <h1 class="text-center">Index</h1>
        @unless (!$posts)
            @foreach ($posts as $post)
                <div class="mb-5 text-center">
                    <p class="text-md font-semibold uppercase">Title</p>
                    <p>{{ $post->title }} </p>
                    <p class="text-md font-semibold uppercase">Casts</p>
                    <p>{{ $post->casts }} </p>
                    <p class="text-md font-semibold uppercase">Time to Read</p>
                    <p class="mb-4">{{ $post->time_to_read }} mins </p>
                    <a  class="bg-blue-400 p-3 rounded-lg"href="{{ route('post.edit',$post->id) }}">Edit</a>
                    <a  class="bg-yellow-400 p-3 rounded-lg"href="{{ route('post.show',$post->id) }}">Show</a>
                </div>
            @endforeach
        @endunless
    </x-card>
</x-layout>