@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <div class="main-content">
        <div id="customer">
            <div class="page-title">All Customer</div>
            <div class="customer-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $h)
                            <tr>
                                <th scope="row">{{ $h->id }}</th>
                                <td>{{ $h->name }}</td>
                                <td>{{ $h->email }}</td>
                                
                                <td>
                                    <form action="{{ route('destroy', $h->id) }}" method="POST">
                                        @csrf
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
