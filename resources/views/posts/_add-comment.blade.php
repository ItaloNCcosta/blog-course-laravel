@auth
<x-panel>
    <form action="/posts/{{$post->slug}}/comment" method="post">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="60" class="rounded-full">
            <h2 class="ml-6">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea class="w-full text-sm focus:outline-none focus:ring" name="body" rows="5" placeholder="Quick, thing of something to say!" required></textarea>
            @error('body')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-submit-button>Post</x-submit-button>
        </div>
    </form>
</x-panel>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline ">Register</a> or <a href="/login" class="hover:underline"> Log in</a>
    to leave a comment.
</p>

@endauth