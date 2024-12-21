@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight.css') }}">
@endsection

@section('content')

<div class="PiGLy-form__content">
    <form action="weight" method="post">
        <table>
            <div class="PiGLy-form__heading">
                <h2>新規会員登録</h2>
                <h3>STEP2 体重データの入力</h3>
            </div>
            @csrf
            <div class="form__group-title">
                <span class="form__label--item">
                    現在の体重
                </span>
                <div class="form__input--text">
                    <input type="text" name="body weight" />kg
                </div>
            </div>
            <br>
            <div class="form__group-title">
                <span class="form__label--item">
                    目標の体重
                </span>
                <div class="form__input--text">
                    <input type="text" name="goal weight" />kg
                </div>
            </div>
            <br>
            <td>
                <button>
                    アカウント作成
                </button>
            </td>
        </table>
    </form>
</div>
@endsection