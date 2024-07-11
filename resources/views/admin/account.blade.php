@extends('layouts.admin')
@section('main')
    @error('against')
        <script>
            function showAlert() {
                alert("Thêm cái khác đeiiiii");
            }
            showAlert();
        </script>
    @enderror
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Light Table head</h5>
            <div class="table-responsive text-nowrap ">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($user as $item)
                            <tr>
                                <th>{{ $item->name }}</th>
                                <th>{{ $item->email }}</th>
                                <th>
                                    <form name="role" action="{{ route('admin.account.role') }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="text" id="btn-role" name="role" style="border: none"
                                            value="{{ $item->role }}">
                                    </form>
                                </th>
                                <th>
                                    <form name="status" action="{{ route('admin.account.status') }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="text" id="btn-status" name="status" style="border: none"
                                            value="{{ $item->status }}">
                                    </form>
                                </th>
                                <th>
                                    <form action="{{ route('admin.account.delete') }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button onclick="confirm('Are you sure about that?')"
                                            class="btn btn-danger">Delete</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btn_role = document.querySelectorAll('#btn-role');
            var btn_status = document.querySelectorAll('#btn-status');
            btn_role.forEach((item) => {
                item.addEventListener('change', (e) => {
                    e.preventDefault();
                    var formRole = item.parentElement;
                    formRole.submit();
                })
            })
            btn_status.forEach((item) => {
                item.addEventListener('change', (e) => {
                    e.preventDefault();
                    var formRole = item.parentElement;
                    formRole.submit();
                })
            })
        });
    </script>
@endsection
