<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="my-4">
            <a href="{{ route('post.create') }}" class="inline-block py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                {{ __('投稿する') }}
            </a>

            <a href="{{ route('myposts') }}" class="inline-block ml-4 py-2 px-4 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                {{ __('自分の投稿を確認する') }}
            </a>
        </div>

        <div class="my-4">
            @if (!empty($posts))
                <ul>
                    @foreach ($posts as $post)
                        <li class="mb-6 border rounded-lg p-4">
                            <h3 class="text-lg font-bold border-bottom">{{ $post->title }}</h4>
                            <p class="text-gray-1000 mt-4">{{ $post->body }}</p>
                            <p class="text-gray-600 mt-4">{{ $post->user->name }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="flex justify-center items-center h-full">
                    <p class="text-lg text-gray-600">投稿はありません。</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
