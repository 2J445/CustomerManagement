@extends('layouts.app')

@section('content')
<div class="container">

<h1>ユーザー一覧</h1>

<table width="100%" border="1">
    <thead>
    <tr style="background-color: lightgray">
        <td>氏名</td>
        <td>所属店舗</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)  {{-- Controllerから渡された users を foreach で回す --}}
        <tr>
            <td>{{ $user->name }}</td> {{-- 各要素を表示 --}}
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection