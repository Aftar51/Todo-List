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
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection
