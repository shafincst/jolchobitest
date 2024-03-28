@extends('master')
@section('content')
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($view as $item)
                    <div class="blog-container">
                        <div class="blog-top-img">
                            <img src="{{ asset($item->image) }}" class="w-100" alt="">
                        </div>
                        <span class="date">প্রকাশিত : {{ $item->created_at }}</span>
                        <h1 class="blog-heading">
                            {{ $item->title }}
                        </h1>
                        <p class="blog-content">
                            {{ $item->short_des }}    
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('jolchobi/img/blog-second-img.png') }}" class="w-100" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('jolchobi/img/blog-third-img.png') }}" class="w-100" alt="">
                            </div>
                        </div>
                        <p class="blog-content">
                            {!! $item->full_des !!}    
                        </p>
                    </div>
                    @endforeach
                    <div class="custom-social">
                        <h3>সোশাল মিডিয়া</h3>
                        <a href="#">
                            <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30.9185" r="30" fill="#F0F0F0"/>
                                <path d="M37.6547 17.6873H33.658C31.8913 17.6873 30.197 18.3891 28.9478 19.6383C27.6985 20.8875 26.9967 22.5818 26.9967 24.3485V28.3452H23V33.6742H26.9967V44.3322H32.3257V33.6742H36.3225L37.6547 28.3452H32.3257V24.3485C32.3257 23.9952 32.4661 23.6563 32.7159 23.4065C32.9658 23.1566 33.3046 23.0162 33.658 23.0162H37.6547V17.6873Z" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            2,1 k+                                
                        </a>
                        <a href="#">
                            <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30.2578" cy="30.9185" r="30" fill="#F0F0F0"/>
                                <path d="M44.3094 18.7007C43.0337 19.6006 41.6211 20.2888 40.1262 20.739C39.3238 19.8164 38.2575 19.1625 37.0714 18.8658C35.8853 18.569 34.6367 18.6436 33.4944 19.0796C32.3521 19.5156 31.3712 20.2919 30.6845 21.3035C29.9978 22.3151 29.6383 23.5132 29.6547 24.7357V26.068C27.3135 26.1287 24.9936 25.6094 22.9016 24.5565C20.8096 23.5035 19.0105 21.9495 17.6645 20.0329C17.6645 20.0329 12.3355 32.0231 24.3257 37.3521C21.582 39.2146 18.3135 40.1484 15 40.0166C26.9902 46.6779 41.645 40.0166 41.645 24.6958C41.6437 24.3247 41.608 23.9545 41.5384 23.59C42.8981 22.2491 43.8576 20.5561 44.3094 18.7007Z" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                            2,1 k+                                
                        </a>
                        <a href="#">
                            <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30.5146" cy="30.9185" r="30" fill="#F0F0F0"/>
                                <path d="M44.6974 23.9113C44.5391 23.279 44.2168 22.6997 43.763 22.2319C43.3092 21.764 42.74 21.4242 42.1128 21.2468C39.8214 20.6873 30.6555 20.6873 30.6555 20.6873C30.6555 20.6873 21.4896 20.6873 19.1982 21.3001C18.571 21.4775 18.0018 21.8173 17.548 22.2852C17.0942 22.753 16.7719 23.3323 16.6136 23.9646C16.1942 26.2901 15.9891 28.6492 16.0008 31.0122C15.9858 33.393 16.191 35.77 16.6136 38.1131C16.7881 38.7257 17.1176 39.283 17.5703 39.731C18.0231 40.1791 18.5838 40.5029 19.1982 40.671C21.4896 41.2838 30.6555 41.2838 30.6555 41.2838C30.6555 41.2838 39.8214 41.2838 42.1128 40.671C42.74 40.4935 43.3092 40.1537 43.763 39.6859C44.2168 39.2181 44.5391 38.6387 44.6974 38.0065C45.1135 35.6985 45.3186 33.3574 45.3102 31.0122C45.3252 28.6314 45.12 26.2543 44.6974 23.9113V23.9113Z" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.6572 35.3687L35.3176 31.0122L27.6572 26.6558V35.3687Z" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                                                              
                            2,1 k+                                
                        </a>
                        <a href="#">
                            <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30.7715" cy="30.9185" r="30" fill="#F0F0F0"/>
                                <path d="M37.9837 17.6873H24.6612C20.9823 17.6873 18 20.6696 18 24.3485V37.671C18 41.3499 20.9823 44.3322 24.6612 44.3322H37.9837C41.6626 44.3322 44.645 41.3499 44.645 37.671V24.3485C44.645 20.6696 41.6626 17.6873 37.9837 17.6873Z" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M36.6511 30.1705C36.8155 31.2792 36.6262 32.4116 36.1099 33.4065C35.5937 34.4015 34.7768 35.2083 33.7756 35.7122C32.7744 36.2161 31.6398 36.3915 30.5332 36.2135C29.4265 36.0354 28.4042 35.5129 27.6116 34.7203C26.819 33.9277 26.2965 32.9054 26.1185 31.7988C25.9404 30.6921 26.1158 29.5575 26.6197 28.5563C27.1237 27.5551 27.9305 26.7383 28.9254 26.222C29.9203 25.7058 31.0527 25.5164 32.1615 25.6808C33.2924 25.8485 34.3395 26.3755 35.1479 27.184C35.9564 27.9925 36.4834 29.0395 36.6511 30.1705Z" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38.6504 23.6824H38.6636" stroke="#555555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                                                                               
                            2,1 k+                                
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <h2 class="subheading">
                            রিসেন্ট আর্টিকেলস
                        </h2>
                        <div class="single-article">
                            <div class="article-img">
                                <img src="{{ asset('jolchobi/img/article-img.png') }}" alt="">
                            </div>
                            <div class="article-content">
                                <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                                <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক...</p>
                            </div>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
   @endsection

