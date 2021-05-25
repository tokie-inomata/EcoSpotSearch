@extends('layouts.main')

@section('main')
    <h4>パスワードを忘れましたか？</h4>
    <div class="pass-reset-form">
        <form action="/" method="post"></form>
            @csrf
            <label>登録メールアドレス<input type="text" name="mail"></label>
            <input type="submit" class="button" value="パスワードを変更する">
        </form>
    </div>
@endsection