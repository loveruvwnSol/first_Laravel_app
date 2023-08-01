@extends('layouts.auth')
@section('content')
    <h1 class="fw-bold mb-4">会員登録</h1>
    <div class="d-grid gap-3 mb-5">
        <div>
            <label for="exampleFormControlInput1" class="form-label">名前</label>
            <input class="form-control" type="text" name="name" placeholder="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="exampleFormControlInput2" class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" value="{{ old('email') }}">
        </div>
        <div>
            <label for="exampleFormControlInput3" class="form-label">パスワード</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput2"
                placeholder="password">
        </div>
        <div>
            <label for="exampleFormControlInput3" class="form-label">確認用</label>
            <input class="form-control" type="password" name="password_confirmation" placeholder="password confirmation">
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{ route('login') }}"><button type="button" class="btn btn-link">ログインする</button></a>
        <nav class="float-end">
            <button type="submit" class="btn btn-primary">会員登録する</button>
        </nav>
    </div>
@endsection()
