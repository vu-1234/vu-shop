@extends('layouts.admin')
@section('content')
    <div>
        <a href="{{ route('admin.user.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th style="width: 100px"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-sm me-3">Edit</a>
                            <form action="{{ route('admin.user.delete', ['id' => $user->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
