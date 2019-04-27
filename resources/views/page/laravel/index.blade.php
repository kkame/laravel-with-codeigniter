@extends('layout')


@section('content')

    <div class="page-info-section set-bg" data-setbg="/img/page-bg/1.jpg" style="background-image: url('/img/page-bg/1.jpg');">
    </div>


    <!-- course section -->
    <section class="course-section spad">
        <div class="container">

            <div class="section-title mb-0">
                <h2>Laravel with Codeigniter</h2>
                <p>라라벨에서 코드이그나이터의 기능을 사용하는 예제 모음입니다</p>
            </div>

        </div>
        <div class="course-warp">
            <ul class="course-filter controls">
                <li class="control active" data-filter="all">All</li>
                <li class="control" data-filter=".ajax">Ajax</li>
                <li class="control" data-filter=".form">Form</li>
                <li class="control" data-filter=".session">Session</li>
                <li class="control" data-filter=".library">Library</li>
                <li class="control" data-filter=".model">Model</li>
                <li class="control" data-filter=".view">View</li>
            </ul>
            <div class="row course-items-area">
                <!-- course -->
                <a href="/laravel/ajax" class="mix col-lg-3 col-md-4 col-sm-6 ajax">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>샘플</h5>
                                <p>준비중입니다</p>
                                <div class="students">Ajax</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- course -->
                <a href="/laravel/form" class="mix col-lg-3 col-md-4 col-sm-6 form">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>샘플</h5>
                                <p>준비중입니다</p>
                                <div class="students">Form</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- course -->
                <a href="/laravel/session" class="mix col-lg-3 col-md-4 col-sm-6 session">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>샘플</h5>
                                <p>준비중입니다</p>
                                <div class="students">Session</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- course -->
                <a href="/laravel/library" class="mix col-lg-3 col-md-4 col-sm-6 library">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>샘플</h5>
                                <p>준비중입니다</p>
                                <div class="students">Library</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- course -->
                <a href="/laravel/model" class="mix col-lg-3 col-md-4 col-sm-6 model">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>샘플</h5>
                                <p>준비중입니다</p>
                                <div class="students">Model</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- course -->
                <a href="/laravel/view" class="mix col-lg-3 col-md-4 col-sm-6 view">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>샘플</h5>
                                <p>준비중입니다</p>
                                <div class="students">View</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- course section end -->


@endsection