<x-layout>
    <x-card>
        <h1 class="text-center text-lg font-semibold">{{ $post->title }}</h1>
        @unless (!$post)
            <div class="mb-5 text-center">
                <p class="text-md font-semibold uppercase">Title</p>
                <p>{{ $post->title }} </p>
                <p class="text-md font-semibold uppercase">Casts</p>
                <p>{{ $post->casts }} </p>
                <p class="text-md font-semibold uppercase">Time to Read</p>
                <p>{{ $post->time_to_read }} mins </p>
                <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="bg-red-500 p-2 rounded-md">Delete</button>
                </form>
            </div>
        @endunless
    </x-card>
</x-layout>