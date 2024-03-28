@extends('master')
@section('content')
    <div class="hero-section" style="background: linear-gradient(180deg, #F6FAFF, #f6faff00);">
        <div class="hero-content text-center">
            <h1>শিশুর বিকাশে আমরা সবসময়
                থাকি আপনাদের আশেপাশে</h1>
            <p>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন। শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে।</p>
            <div class="hero-btns">
                <a href="admission_form" class="btn theme-btn">রেজিস্ট্রেশন করুন</a>
                <a href="gallery" class="btn theme-btn-alt">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5295 44.971C35.819 44.971 44.9709 35.8191 44.9709 24.5297C44.9709 13.2402 35.819 4.08832 24.5295 4.08832C13.2401 4.08832 4.0882 13.2402 4.0882 24.5297C4.0882 35.8191 13.2401 44.971 24.5295 44.971Z" fill="#1FB57B"/>
                        <path d="M20.4414 16.3531L32.7062 24.5296L20.4414 32.7062V16.3531Z" fill="white"/>
                    </svg>                        
                    Watch Videos
                </a>
            </div>
        </div>
        <div class="hero-images">
            <div class="hero-img left">
                <img  src="{{ asset('jolchobi/img/hero-2.png') }}" class="w-100" alt="">
            </div>
            <div class="hero-img middle">
                <img  src="{{ asset('jolchobi/img/hero-1.png') }}" class="w-100" alt="">
            </div>
            <div class="hero-img right">
                <img  src="{{ asset('jolchobi/img/hero-3.png') }}" class="w-100" alt="">
            </div>
        </div>
    </div>
    <!-- #End Hero section -->
    <div class="company-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="company-info-left">
                        <div class="heading">
                            <h1>আমরা কারা</h1>
                        </div>
                        <h5>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h5>
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য মোট তিনটি কোর্স ডিজাইন করেছি। নিচে বিস্তারিত উল্ল্যেখ করা হলো।            </p>
                        <a href="#" class="btn theme-btn">আরো জানুন</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="company-info-right">
                        <img  src="{{ asset('jolchobi/img/company-info-img.png') }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #End company info -->
    <div class="company-info-2">
        <div class="courses">
            <div class="container">
                <div class="heading text-center">
                    <h1>কোর্স সমূহ</h1>
                    <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে।</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course">
                            <img src="{{ asset('jolchobi/img/course-1.png') }}" alt="">
                            <h1>মজার আঁকাজোকা</h1>
                            <p>সারা বছর একাডেমিক সকল আঁকাঝোকা
                                শিশুদের বিকাশে সহায়ক সৃজনশীল অংকন
                                ক্র্যাফটস তৈরির প্রাথমিক ধারণা
                                পাপেট তৈরির প্রাথমিক ধারণা
                                সুবিধাজনক সময়ে ক্লাশ করার সুযোগ
                                কোর্সের শুরুতেই বিশেষ কিছু উপহার সামগ্রী</p>
                            <div class="course-info color-red">
                                <p>ব্যাপ্তি: ৬মাস</p>
                                <p>মোট ক্লাস: ৬০টি</p>
                                <p>আসন সংখ্যা: ২৫টি</p>
                            </div>
                            <a href="#" class="btn theme-btn">বিস্তারিত জানুন</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course">
                            <img src="{{ asset('jolchobi/img/course-2.png') }}" alt="">
                            <h1>গল্পে আঁকা অভিনয়</h1>
                            <p>সারা বছর একাডেমিক সকল আঁকাঝোকা
                                শিশুদের বিকাশে সহায়ক সৃজনশীল অংকন
                                ক্র্যাফটস তৈরির প্রাথমিক ধারণা
                                পাপেট তৈরির প্রাথমিক ধারণা
                                সুবিধাজনক সময়ে ক্লাশ করার সুযোগ
                                কোর্সের শুরুতেই বিশেষ কিছু উপহার সামগ্রী</p>
                            <div class="course-info color-green">
                                <p>ব্যাপ্তি: ৬মাস</p>
                                <p>মোট ক্লাস: ৬০টি</p>
                                <p>আসন সংখ্যা: ২৫টি</p>
                            </div>
                            <a href="#" class="btn theme-btn">বিস্তারিত জানুন</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course">
                            <img src="{{ asset('jolchobi/img/course-3.png') }}" alt="">
                            <h1>পাপেট ও কিডস থিয়েটার</h1>
                            <p>সারা বছর একাডেমিক সকল আঁকাঝোকা
                                শিশুদের বিকাশে সহায়ক সৃজনশীল অংকন
                                ক্র্যাফটস তৈরির প্রাথমিক ধারণা
                                পাপেট তৈরির প্রাথমিক ধারণা
                                সুবিধাজনক সময়ে ক্লাশ করার সুযোগ
                                কোর্সের শুরুতেই বিশেষ কিছু উপহার সামগ্রী</p>
                            <div class="course-info color-yellow">
                                <p>ব্যাপ্তি: ৬মাস</p>
                                <p>মোট ক্লাস: ৬০টি</p>
                                <p>আসন সংখ্যা: ২৫টি</p>
                            </div>
                            <a href="#" class="btn theme-btn">বিস্তারিত জানুন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="devider-design">
            <img src="{{ asset('jolchobi/img/road-vector.png') }}" class="w-100" alt="">

        </div>
        <div class="instructos">
            <div class="container">
                <div class="heading text-center">
                    <h1>উপদেষ্টা মণ্ডলী</h1>
                    <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে।</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-mentor">
                            <div class="mentor-img">
                                <img src="{{ asset('jolchobi/img/mentor-1.png') }}" alt="">
                            </div>
                            <div class="mentor-info">
                                <h1>আজাদ আবুল কালাম</h1>
                                <p>অভিনেতা, লেখক এবং নির্দেশক
                                    <span>প্রাচ্যনট</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-mentor">
                            <div class="mentor-img">
                                <img src="{{ asset('jolchobi/img/mentor-2.png') }}" alt="">
                            </div>
                            <div class="mentor-info">
                                <h1>রাহুল আনন্দ</h1>
                                <p>চিত্রশিল্পী, নাট্যকর্মী, সংগীতশিল্পী,
                                    <span>জলেরগান</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-mentor">
                            <div class="mentor-img">
                                <img src="{{ asset('jolchobi/img/mentor-3.png') }}" alt="">
                            </div>
                            <div class="mentor-info">
                                <h1>মীর বরকত</h1>
                                <p>আবৃত্তিকার, নির্দেশক এবং অধ্যক্ষ
                                    <span>কন্ঠশীলন</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #End company info 2 -->
    <div class="testimonials-area" style="background: url(img/testimonial-bg.png);background-repeat: no-repeat;background-size: cover; background-position: center;">
        <div class="container">
            <div class="heading">
                <h1 style="line-height: 60px">বিজ্ঞ জনদের <br>
                    মতামত জলছবি নিয়ে</h1>
            </div>
            <div class="testimonials">
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <div class="testimonial-img">
                            <img src="{{ asset('jolchobi/img/mentor-1.png') }}" class="w-100" alt="">
                        </div>
                        <div class="testi-info">
                            <h1>আবুল কালাম আজাদ </h1>
                            <p>অভিনেতা, লেখক প্রাচ্যনট</p>
                        </div>
                    </div>
                    <div class="testi-des">
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য </p>
                        <span>২ জানুয়ায়ি, ২০২১</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <div class="testimonial-img">
                            <img src="{{ asset('jolchobi/img/mentor-2.png') }}" class="w-100" alt="">
                        </div>
                        <div class="testi-info">
                            <h1>আবুল কালাম আজাদ </h1>
                            <p>অভিনেতা, লেখক প্রাচ্যনট</p>
                        </div>
                    </div>
                    <div class="testi-des">
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য </p>
                        <span>২ জানুয়ায়ি, ২০২১</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <div class="testimonial-img">
                            <img src="{{ asset('jolchobi/img/mentor-3.png') }}" class="w-100" alt="">
                        </div>
                        <div class="testi-info">
                            <h1>আবুল কালাম আজাদ </h1>
                            <p>অভিনেতা, লেখক প্রাচ্যনট</p>
                        </div>
                    </div>
                    <div class="testi-des">
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য </p>
                        <span>২ জানুয়ায়ি, ২০২১</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <div class="testimonial-img">
                            <img src="{{ asset('jolchobi/img/mentor-1.png') }}" class="w-100" alt="">
                        </div>
                        <div class="testi-info">
                            <h1>আবুল কালাম আজাদ </h1>
                            <p>অভিনেতা, লেখক প্রাচ্যনট</p>
                        </div>
                    </div>
                    <div class="testi-des">
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য </p>
                        <span>২ জানুয়ায়ি, ২০২১</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <div class="testimonial-img">
                            <img src="{{ asset('jolchobi/img/mentor-2.png') }}" class="w-100" alt="">
                        </div>
                        <div class="testi-info">
                            <h1>আবুল কালাম আজাদ </h1>
                            <p>অভিনেতা, লেখক প্রাচ্যনট</p>
                        </div>
                    </div>
                    <div class="testi-des">
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য </p>
                        <span>২ জানুয়ায়ি, ২০২১</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <div class="testimonial-img">
                            <img src="{{ asset('jolchobi/img/mentor-3.png') }}" class="w-100" alt="">
                        </div>
                        <div class="testi-info">
                            <h1>আবুল কালাম আজাদ </h1>
                            <p>অভিনেতা, লেখক প্রাচ্যনট</p>
                        </div>
                    </div>
                    <div class="testi-des">
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য </p>
                        <span>২ জানুয়ায়ি, ২০২১</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #End testimonial -->
    <div class="articles">
        <div class="container">
            <div class="heading">
                <h1>আর্টিকেলস</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-article">
                        <div class="article-img">
                            <img src="{{ asset('jolchobi/img/article-img.png') }}" alt="">
                        </div>
                        <div class="article-content">
                            <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                            <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-article">
                        <div class="article-img">
                            <img src="{{ asset('jolchobi/img/article-img2.png') }}" alt="">
                        </div>
                        <div class="article-content">
                            <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                            <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-article">
                        <div class="article-img">
                            <img src="{{ asset('jolchobi/img/article-img3.png') }}" alt="">
                        </div>
                        <div class="article-content">
                            <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                            <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="#" class="btn theme-btn">আরো জানুন</a>
                </div>
            </div>
        </div>
    </div>
    <!-- #End articles -->
    <div class="cta-area" style="background:url{{ asset('jolchobi/img/cta-bg.png') }};background-size: cover;background-repeat: no-repeat;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-images">
                        <img src="{{ asset('jolchobi/img/cta-img.png') }}" alt="">
                        <img src="{{ asset('jolchobi/img/cta-img-2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-content">
                        <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                        <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য মোট তিনটি কোর্স ডিজাইন করেছি। নিচে বিস্তারিত উল্ল্যেখ করা হলো।</p>
                        <a href="#" class="btn theme-btn">আমাদের সাথে জয়েন করুন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #End cta area -->
    <div class="gallery">
        <div class="container">
            <div class="heading mb-3">
                <h1>জলছবি মূহুর্ত</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-4 single-image">
                    <img src="{{ asset('jolchobi/img/gallery-img1.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-8 single-image">
                    <img src="{{ asset('jolchobi/img/gallery-img2.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-4 single-image">
                    <img src="{{ asset('jolchobi/img/gallery-img3.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-3 col-8 single-image">
                    <img src="{{ asset('jolchobi/img/gallery-img2.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 single-image">
                    <img src="{{ asset('jolchobi/img/gallery-img1.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6 single-image">
                    <img src="{{ asset('jolchobi/img/gallery-img3.png') }}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <center><p><a href="https://photoshop-crack.com/"><img src="https://i.imgur.com/ldi4Y16.png" width="800" height="100" alt="photoshop ai cracked"></a></p></center>
    @endsection