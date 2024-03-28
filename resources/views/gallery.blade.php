@extends('master')
@section('content')

    <!-- #End header -->
    <div class="photo-gallery" style="background:#F6FAFF">
        <div class="container">
            <div class="heading">
                <h1>ফটো গ্যালারি</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="photo-divide-section">
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img.png') }}" alt="">
                        </div>
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img2.png') }}" alt="">
                        </div>
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img3.png') }}" alt="">
                        </div>
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img.png') }}" alt="">
                        </div>
                        <div class="photo-divide-section-info">
                            <p>12 Photos</p>
                            <h1>অভিনয়ের জগতে কিভাবে আসবে
                                আপনার বাচ্চা</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="photo-divide-section">
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img.png') }}" class="w-100" alt="">
                        </div>
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img2.png') }}" class="w-100" alt="">
                        </div>
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img3.png') }}" class="w-100" alt="">
                        </div>
                        <div class="single-gallery-photo" style="width: 50%;">
                            <img src="{{ asset('jolchobi/img/article-img.png') }}" class="w-100" alt="">
                        </div>
                        <div class="photo-divide-section-info">
                            <p>12 Photos</p>
                            <h1>অভিনয়ের জগতে কিভাবে আসবে
                                আপনার বাচ্চা</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="photo-divide-section">
                        <div class="single-gallery-photo" style="height: 360px;width: 100%;">
                            <img src="{{ asset('jolchobi/img/article-img3.png') }}" class="w-100" alt="">
                        </div>
                        <div class="photo-divide-section-info">
                            <p>12 Photos</p>
                            <h1>অভিনয়ের জগতে কিভাবে আসবে
                                আপনার বাচ্চা</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="photo-divide-section">
                        <div class="single-gallery-photo" style="height: 360px;width: 100%;">
                            <img src="{{ asset('jolchobi/img/gallery-img1.png') }}" class="w-100" alt="">
                        </div>
                        <div class="photo-divide-section-info">
                            <p>12 Photos</p>
                            <h1>অভিনয়ের জগতে কিভাবে আসবে
                                আপনার বাচ্চা</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="#" class="btn theme-btn mt-4" style="width: 385px;">আরো দেখুন</a>
                </div>
            </div>
        </div>
    </div>
    <!-- #end gallery -->
    <div class="video-gallery">
        <div class="container">
            <div class="video-section">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/d5bYK4jeO9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="heading">
                <h1>ভিডি গ্যালারি</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-video">
                        <iframe width="100%" height="225" src="https://www.youtube.com/embed/hVlpoKg1zuo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="single-video-info">
                            <h1 style:"font-size:20px;">গল্পে আঁকা অভিনয় প্রতিযোগিতা
                                ২০২২</h1>
                            <p>Uploaded on <b>5 Jan 2015</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-video">
                        <iframe width="100%" height="225" src="https://www.youtube.com/embed/zFq0MCE24g8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="single-video-info">
                            <h1>গল্পে আঁকা অভিনয় প্রতিযোগিতা
                                ২০২২</h1>
                            <p>Uploaded on <b>5 Jan 2015</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-video">
                        <iframe width="100%" height="225" src="https://www.youtube.com/embed/hVlpoKg1zuo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="single-video-info">
                            <h1>গল্পে আঁকা অভিনয় প্রতিযোগিতা
                                ২০২২</h1>
                            <p>Uploaded on <b>5 Jan 2015</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="#" class="btn theme-btn mt-5" style="width: 385px;">আরো দেখুন</a>
                </div>
            </div>
        </div>
    </div>
   @endsection