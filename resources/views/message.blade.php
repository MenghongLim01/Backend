@extends('layout.master')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
    <div class="main-content">
        <div id="message">
            <div class="page-title">All Messages</div>
            <div class="message-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 30%;">Name</th>
                            <th scope="col" style="width: 30%;">Email</th>
                            <th scope="col" style="width: 40%;">Messages</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Repeat .message-row as needed for more messages -->
                        @foreach ($messages as $message)
                            <tr class="message-row">
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
