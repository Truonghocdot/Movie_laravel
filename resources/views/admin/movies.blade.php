@extends('layouts.admin')
@section('main')
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
                            <th>status</th>
                            <th>poster</th>
                            <th>year</th>
                            <th>time</th>
                            <th>language</th>
                            <th>country</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($movies) > 0)
                            @foreach ($movies as $item)
                                <tr>
                                    <td>{{ $item->_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->origin_name }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <img src="{{ $item->poster_url }}" alt="Avatar"
                                            style="max-width: 240px; border-radius: 8%" />
                                    </td>
                                    <td>{{ $item->year }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->lang }}</td>
                                    <td>
                                        @foreach ($item->country as $country)
                                            {{ $country['name'] }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.movie.delete') }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="slug" value="{{ $item->slug }}">
                                            <button type="submit"
                                                onclick="confirm('Are you sure about delete this movie?')"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
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
            <div class="w-25">{{ $movies->links() }}</div>
        </div>
    </div>
@endsection
