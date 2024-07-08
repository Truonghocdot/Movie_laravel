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
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>_id</th>
                            <th>name</th>
                            <th>original name</th>
                            <th>poster</th>
                            <th>year</th>
                            <th>slug</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($movies) > 0)
                            @foreach ($movies as $item)
                                <tr>
                                    <td>{{ $item['_id'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['origin_name'] }}</td>
                                    <td> <img src="https://img.ophim.live/uploads/movies/{{ $item['poster_url'] }}"
                                            alt="Avatar" class="" style="max-width: 240px; border-radius: 8%"
                                            loading="lazy" /> </td>
                                    <td>{{ $item['year'] }}</td>
                                    <td>{{ $item['slug'] }}</td>
                                    <td>
                                        <form action="{{ route('admin.movie.add') }}" method="POST" class="add-film-form">
                                            @csrf
                                            <input type="hidden" value="{{ $item['slug'] }}" name="slug">
                                            @method('patch')
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </form>
                                        <a href="{{ route('admin.movie', ['slug' => $item['slug']]) }}"
                                            class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h1 class="text-center my-3">Thêm phim đeiiiiiii! </h1>
                        @endif
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
                    @for ($i = 1; $i < 34; $i++)
                        <li class="page-item"><a class="page-link"
                                href="{{ route('admin.movies.new') . '?page=' . $i }}">{{ $i }}</a></li>
                    @endfor
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
            const forms = document.querySelectorAll('.add-film-form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    fetch(this.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: formData
                        }).then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Film added successfully!');
                            } else {
                                alert('Thêm cái khác deii');
                            }
                        }).catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred. Please try again.');
                        });
                });
            });
        });
    </script>
@endsection
