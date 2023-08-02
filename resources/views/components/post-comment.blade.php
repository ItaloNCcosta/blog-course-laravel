@props(['comment']) 
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/150?u={{$comment->user_id}}" alt="" width="60" height="60">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold"> {{ $comment->author->name }} </h3>
                <p class="text-xs">
                    posted
                    <time>{{ $comment->created_at->format('Y-d-m h:i:s')}}</time>
                </p>
            </header>
            <p>
                {!! $comment->body !!}
            </p>
        </div>
    </article>
</x-panel>