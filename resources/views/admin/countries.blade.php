@extends('layouts.admin')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card col-9">
                <h5 class="card-header">Light Table head</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>slug</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($countries as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <form action="{{ route('admin.countries.delete') }}" method="POST">
                                            @method('delete')
                                            <input type="hidden" value="{{ $item->slug }}" name="slug">
                                            @csrf
                                            <button class="btn btn-danger" onclick="">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="w-25"></div>
            </div>
            <div class="col-3">
                <h2>Add new country</h2>
                <form action="{{ route('admin.countries.add') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
