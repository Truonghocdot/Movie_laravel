@extends('layouts.admin')
@section('main')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3 ">
                    <div class="card h-100">
                        <img class="card-img-top " style="object-fit: cover;height: 82%;"
                            src="https://img.ophim.live/uploads/movies/xe-bay-phe-pham-poster.jpg" alt="Card image cap" />

                        <a href="" class="btn btn-primary">Watch Film</a>
                        <a href="" class="btn btn-danger">API</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-9 ">
                    <div class="card text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <ul>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Trạng thái</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Số tập</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Thời Lượng</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Năm Phát Hành</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Chất Lượng</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Ngôn Ngữ</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Đạo Diễn</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Diễn Viên</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Thể Loại</h5>
                                <span>Tập 14</span>
                            </li>
                            <li class="d-flex text-start">
                                <h5 class="w-25">Quốc Gia</h5>
                                <span>Tập 14</span>
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
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.

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
                                <ul class="d-flex gap-4">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
