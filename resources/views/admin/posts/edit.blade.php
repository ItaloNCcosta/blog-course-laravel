<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" type="text" :value="old('title', $post->title)" required/>
            <x-form.input name="slug" type="text" :value="old('slug', $post->slug)" required/>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
            </div>
            <x-form.text-area name="excerpet">{{ old('excerpet', $post->excerpet) }}</x-form.text-area>
            <x-form.text-area name="body">{{ old('body', $post->body) }}</x-form.text-area>

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id" required>
                    @foreach(\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                    >
                        {{ucwords($category->name)}}
                    </option>
                    @endforeach
                </select>
                <x-form.error-message name="category" />
            </x-form.field>
            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-setting>
</x-layout>