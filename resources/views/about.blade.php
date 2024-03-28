@extends('master')
@section('content')

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

@endsection