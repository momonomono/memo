<x-layout>
    <x-slot name="title">マイページ</x-slot>
    <x-slot name="pageTitle">MyPage</x-slot>
    
    <p>ログインしました</p>
    <button>
        <a href="{{ route('top') }}">
            元に戻る
        </a>
    </button>
</x-layout>