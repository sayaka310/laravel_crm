@extends('layouts.main')

@section('title', '顧客一覧')

@section('content')
    <h1>顧客一覧</h1>
    <table border="1">
        <tr>
            <th>顧客ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>郵便番号</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td><a href="/customers/{{ $customer->id }}">{{ $customer->id }}</a></td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->zipcode }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone_number }}</td>
            </tr>
        @endforeach
    </table>
    <button onclick="location.href='/customers/search'">新規作成</button>
@endsection
