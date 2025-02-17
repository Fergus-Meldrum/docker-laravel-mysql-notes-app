<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('notes.update', $note) }}" method="post">
                    @method('put')
                    @csrf
                    <x-text-input type="text" name="title" field="title" placeholder="Title" class="w-full"
                        :value="@old('title', $note->title)"></x-text-input>

                    <x-textarea name="text" field="text" rows="10" placeholder="Start typing here..."
                        class="w-full mt-6" :value="@old('text', $note->text)"></x-textarea>

                    <x-primary-button class="mt-6">Save Note</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
