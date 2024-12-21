@section('title', 'add.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>
@endif
<form action="/add" method="post">
    <table>
        @csrf
        <tr>
            <th>name</th>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <th>email-addles</th>
            <td>
                <input type="text" name="email-addles">
            </td>
        </tr>
        <tr>
            <th>password</th>
            <td>
                <input type="text" name="password">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button>送信</button>
            </td>
        </tr>
    </table>
</form>
@endsection
