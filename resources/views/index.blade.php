<x-layout>
    <x-slot name="title">
        質問投稿サイト
    </x-slot>

    <h1>
        <span>質問一覧</span>
        <a href="{{ route ('posts.create')}}">[質問投稿]</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>質問が投稿されていません！
                気軽に投稿してみましょう！
            </li>
        @endforelse
    </ul>
</x-layout>
