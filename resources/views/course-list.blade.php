@extends('master')
@section('content')

<div class="hero-slider" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('jolchobi/img/courselist-banner.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-content">
                    <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                    <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য মোট তিনটি কোর্স ডিজাইন করেছি। নিচে বিস্তারিত উল্ল্যেখ করা হলো।</p>
                    <a href="#" class="btn theme-btn">আমাদের সাথে জয়েন করুন</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-list">
    <div class="container">
        <div class="heading">
            <h1 class="text-center">কোর্স সমূহ</h1>
            <p class="text-center">শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে।</p>
        </div>
        <div class="row">

            @foreach($course as $item)

            <div class="col-lg-4 col-md-6">
                <div class="single-course">
                    <img src="{{ $item->image }}" class="w-100 "  alt="">
                    <h1>{{ $item->title }}</h1>
                    <p>{!! $item->description !!}</p>
                    <div class="course-info color-red">
                        <p> ব্যাপ্তি: {{ $item->duration }}</p>
                        <p> মোট ক্লাস:{{ $item->total_class }}</p>
                        <p> আসন সংখ্যা:{{ $item->total_seat }}</p>
                    </div>
                    <a href="#" class="btn theme-btn w-100">বিস্তারিত জানুন</a>
                </div>
            </div>

            @endforeach

    </div>
</div>

@endsection