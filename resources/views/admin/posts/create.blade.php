<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" type="text"/>
            <x-form.input name="slug" type="text"/>
            <x-form.input name="thumbnail" type="file" />
            <x-form.text-area name="excerpet" />
            <x-form.text-area name="body" />

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id" required>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{ ucwords($category->name)}}
                    </option>
                    @endforeach
                </select>
                <x-form.error-message name="category" />
            </x-form.field>
            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-setting>
</x-layout>