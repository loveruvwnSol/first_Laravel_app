@extends('layouts.home')
@section('create')
    <form action="{{ route('threads.store') }}" class="w-50 m-5" method="post">
        @csrf
        <legend>スレッドを投稿しよう</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">タイトル</label>
            <input type="text" id="disabledTextInput1" class="form-control" placeholder="タイトル" name="title">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">タグを選択</label>
            <input type="text" id="disabledTextInput2" class="form-control" placeholder="タグ" name="tags">
            {{-- <select id="disabledSelect" class="form-select" name="tags">
                <option selected>タグを選択</option>
                <option value="1">Talk</option>
                <option value="2">Question</option>
            </select> --}}
        </div>
        <a href="{{route('threads.index')}}"><button type="button" class="btn btn-secondary">閉じる</button></a>
        <button type="submit" class="btn btn-primary">スレッドを投稿</button>
    </form>
@endsection
