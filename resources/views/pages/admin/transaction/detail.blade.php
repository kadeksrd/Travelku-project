@extends('layouts.admin')

@section('title')
    Detail Travel Package
@endsection


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Travel Package <b>{{ $item->user->name }}</b></h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-shadow rounded">
            <div class="card-body rounded">
                <table class="table table-bordered">
                    {{-- tr>th&td == transaction.index --}}
                    <tr>
                        {{-- id --}}
                        <th>ID</th>
                        <td>{{ $item->id }}</td>
                    </tr>
                    <tr>
                        {{-- Paket Travel --}}
                        <th>Paket Travel</th>
                        <td>{{ $item->travel_package->title }}</td>
                    </tr>
                    {{-- Pembeli --}}
                    <tr>
                        <th>Pembeli</th>
                        <td>{{ $item->user->name }}</td>
                    </tr>
                    {{-- additional visa --}}
                    <tr>
                        <th>Additional Visa</th>
                        <td>${{ $item->additional_visa }}</td>
                    </tr>
                    {{-- Total Transaksi --}}
                    <tr>
                        <th>Total Transaksi</th>
                        <td>${{ $item->transaction_total }}</td>
                    </tr>
                    {{-- status transaksi --}}
                    <tr>
                        <th>Status Transaksi</th>
                        <td>{{ $item->transaction_status }}</td>
                    </tr>
                    <tr>
                        <th>Pembelian</th>
                        <td>
                            <table>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nationally</th>
                                <th>Visa</th>
                                <th>DOE Passport</th>
                                @foreach ($item->details as $detail)
                                    <tr>
                                        <td>{{ $detail->id }}</td>
                                        <td>{{ $detail->username }}</td>
                                        <td>{{ $detail->nationality }}</td>
                                        <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                        <td>{{ $detail->doe_passport }}</td>
                                    </tr>
                                @endforeach
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
