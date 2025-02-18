@extends('layout.master')

@section('content')
<div class="main-content">
    <div id="men">
        <div class="page-title">All Women Products</div>
        <div class="men-list">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($womens as $h)
                        <tr>
                            <th scope="row">{{$h->id}}</th>
                            <td>{{$h->name}}</td>
                            <td>{{$h->category}}</td>
                            <td>{{$h->description}}</td>
                            <td>{{$h->price}}</td>
                            <td>{{$h->status ? 'Approved' : 'Pending'}}</td>
                            <td>
                                <form action="{{route('approve', $h->id)}}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit">Approve</button>
                                </form>
                                <form action="{{route('reject', $h->id)}}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit">Reject</button>
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
