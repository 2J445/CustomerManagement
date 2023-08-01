@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $customer->name }}</div>
                    <p>店舗：{{ $customer->shop['name'] }}</p>
                    <p>郵便番号：{{ $customer->postal }}</p>
                    <p>住所：{{ $customer->address }}</p>
                    <p>メール：{{ $customer->email }}</p>
                    <p>生年月日：{{ $customer->birthdate }}</p>
                    <p>電話番号：{{ $customer->phone }}</p>
                    @if($customer->kramer_flag == 1)
                      <p>クレーマー設定：クレーマー登録されています</p>
                    @else
                      <p>クレーマー設定：クレーマー登録はされていません</p>
                    @endif
                    <p>更新日：{{ $customer->created_at }}</p>
                    <p>登録日日：{{ $customer->updated_at }}</p>

                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection