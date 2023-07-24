<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('投稿一覧') }}
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
    <div class="my-4">
      <a href="{{ route('create-post') }}" class="btn btn-primary" role="button">
        {{ __('投稿する') }}
      </a>

      <a href="{{ route('my-posts') }}" class="btn btn-secondary" role="button">
        {{ __('自分の投稿を確認する') }}
      </a>
    </div>
  </div>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="my-4">
      @if (!empty($posts))
        <ul>
          @foreach ($posts as $post)
            <li class="mb-4">
              <h4 class="text-lg font-bold">{{ $post->title }}</h4>
              <p class="text-gray-800">{{ $post->body }}</p>
              <p class="text-gray-600">投稿者名: {{ $post->author_name }}</p>
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
