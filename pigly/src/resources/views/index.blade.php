@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="PiGLy-form__content">
    <div class="PiGLy-form__heading">
        <h2>新規会員登録</h2>
        <h3>STEP1 アカウント情報の登録</h3>
    </div>
    <form class="form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group-title">
            <span class="form__label--item">
                お名前
            </span>
        </div>
        <div class="form__input--text">
            <input type="text" name="name" placeholder="山田次郎" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <br>
        <div class="form__group-title">
            <span class="form__label--item">
                メールアドレス
            </span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="abcd123@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <br>
        <div class="form__group-title">
            <span class="form__label--item">
                パスワード
            </span>
        </div>
        <div class="form__input--text">
            <input type="password" name="password" />
        </div>
        <div class="form__group-content">
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <br>
        <div class="form__button">
            <button class="form__button-submit" type="submit">
                次に進む
            </button>
        </div>
    </form>
</div>
@endsection