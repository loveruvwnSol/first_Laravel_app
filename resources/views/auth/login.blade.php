@extends('layouts.auth')
@section('content')
    <h1 class="fw-bold mb-4">ログイン</h1>
    <div class="d-grid gap-3 mb-5">
        <div>
            <label for="exampleFormControlInput1" class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" value="{{ old('email') }}">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">パスワード</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput2"
                placeholder="password">
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{ route('register') }}"> <button type="button" class="btn btn-link">会員登録</button></a>
        <nav class="float-end">
            <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary">ログインする</button></a>
        </nav>
    </div>
@endsection()
