<x-layout>
    <x-slot name="title">
        Edit New Post - My BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.show',$post) }}">戻る</a>
    </div>

    <h1>質問編集フォーム</h1>

<form method="post" action="{{route('posts.update',$post)}}">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>
                件名
            <input type="text" name="title" value="{{old('title',$post->title)}}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                質問内容
                <textarea name="body">{{ old('body',$post->body)}}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>更新</button>
        </div>
    </form>
</x-layout>
