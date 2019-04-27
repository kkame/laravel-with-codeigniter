@extends('layout')

@section('content')




<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="img/bg.jpg">
    <div class="container">
        <div class="hero-text text-white">
            <h2>Laravel with Codeigniter</h2>
            <p>라라벨과 코드이그나이터의 연동 예제를 포함하는 사이트입니다</p>
        </div>
        <div class="text-center">
            <button class="site-btn">Sign Up Now</button>
            <button class="site-btn">Sign Up Now</button>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- course section -->
<section class="course-section spad">
    <div class="container">

        <div class="section-title mb-0">
            <h2>다음과 같은 예제를 다루고 있습니다.</h2>
            <p>만약 여기에 존재하지 않지만 실제 연동시에 필요한 사례가 발견될 경우 깃허브의 이슈로 남겨주세요.</p>
        </div>

    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all">All</li>
            <li class="control" data-filter=".codeigniter">Codeigniter</li>
            <li class="control" data-filter=".laravel">Laravel</li>
        </ul>
        <div class="row course-items-area">
            <!-- course -->
            <a href="/codeigniter" class="mix col-lg-3 col-md-4 col-sm-6 codeigniter">
                <div class="course-item">
                    <div class="course-info">
                        <div class="course-text">
                            <h5>샘플</h5>
                            <p>준비중입니다</p>
                            <div class="students">Codeigniter</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- course -->
            <a href="/laravel" class="mix col-lg-3 col-md-4 col-sm-6 laravel">
                <div class="course-item">
                    <div class="course-info">
                        <div class="course-text">
                            <h5>샘플</h5>
                            <p>준비중입니다</p>
                            <div class="students">Laravel</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- course section end -->





<!-- banner section -->
<section class="banner-section spad">
    <div class="container">
        <div class="section-title mb-0 pb-2">
            <h2>더 많은 정보가 필요하다면!</h2>
            <p>Modern PHP User Group을 찾아주세요.</p>
        </div>
        <div class="text-center pt-5">
            <a href="https://modernpug.org" target="_blank" class="site-btn" style="padding:30px;">Modern PHP User Group</a>
        </div>
    </div>
</section>
<!-- banner section end -->



@endsection