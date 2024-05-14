@extends('layouts.parent')

@section('title', 'TodoList')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Todo List</h5>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus"></i>
                Add Todo
            </button>
            @include('pages.modal-create')

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Todo</th>
                        <th>Deadline</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($todo as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td><span class="badge rounded-pill bg-primary">{{ $row->deadline }}</span></td>
                            <td>
                                <form action="{{ route('todos.destroy', $row->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Data Is Empty</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
