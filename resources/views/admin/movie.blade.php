@extends('layouts.admin')
@section('main')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3 ">
                    <div class="card h-100">
                        <img class="card-img-top " style="object-fit: cover;height: 82%;" src="{{ $movie['thumb_url'] }}"
                            alt="Card image cap" />

                        <a href="#wath-film" class="btn btn-primary">Watch Film</a>
                        <a href="https://ophim1.com/phim/{{ $slug }}" class="btn btn-danger">API</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-9 ">
                    <div class="card text-center">
                        <ul>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Tên</h5>
                                <span>{{ $movie['name'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Tên gốc</h5>
                                <span>{{ $movie['origin_name'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Trạng thái</h5>
                                <span>{{ $movie['status'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Tập hiện tại</h5>
                                <span>{{ $movie['episode_current'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Chiếu rạp</h5>
                                <span>
                                    @if ($movie['theater_screen'] == true)
                                        có
                                    @else
                                        không
                                    @endif
                                </span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Số tập</h5>
                                <span>{{ $movie['episode_total'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Thời Lượng</h5>
                                <span>{{ $movie['time'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Năm Phát Hành</h5>
                                <span>{{ $movie['year'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Chất Lượng</h5>
                                <span>{{ $movie['quality'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Ngôn Ngữ</h5>
                                <span>{{ $movie['lang'] }}</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Đạo Diễn</h5>
                                <span>
                                    <ul>
                                        @foreach ($movie['director'] as $item)
                                            <li> {{ $item }} </li>
                                        @endforeach
                                    </ul>
                                </span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Diễn Viên</h5>
                                <span>
                                    <ul>
                                        @foreach ($movie['actor'] as $item)
                                            <li> {{ $item }} </li>
                                        @endforeach
                                    </ul>
                                </span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Thể Loại</h5>
                                <span>
                                    <ul>
                                        @foreach ($movie['category'] as $item)
                                            <li> {{ $item['name'] }} </li>
                                        @endforeach
                                    </ul>
                                </span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Quốc Gia</h5>
                                <span>
                                    <ul>
                                        @foreach ($movie['country'] as $item)
                                            <li> {{ $item['name'] }} </li>
                                        @endforeach
                                    </ul>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Content of film
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $movie['content'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Watch film
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                @if ($movie['type_release'] == 'series')
                                    <ul class="d-flex gap-4 flex-column" id="wath-film">
                                        @foreach ($movie['episodes'] as $item)
                                            <li>
                                                Tập {{ $item['name'] }}:
                                                <div>
                                                    link embed: <a
                                                        href="{{ $item['link_embed'] }}">{{ $item['link_embed'] }}</a>
                                                    <br>
                                                    link m3u8: <a
                                                        href="{{ $item['link_m3u8'] }}">{{ $item['link_m3u8'] }}</a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <ul id="wath-film">
                                        @foreach ($movie['episodes'] as $item)
                                            <div>
                                                link embed: <a
                                                    href="{{ $item['link_embed'] }}">{{ $item['link_embed'] }}</a>
                                                <br>
                                                link m3u8: <a href="{{ $item['link_m3u8'] }}">{{ $item['link_m3u8'] }}</a>
                                            </div>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
