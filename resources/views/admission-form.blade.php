@extends('master')
@section('content')
<div class="hero-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('jolchobi/img/slider.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-content">
                    <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                    <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য মোট তিনটি কোর্স ডিজাইন করেছি। নিচে বিস্তারিত উল্ল্যেখ করা হলো।</p>
                    <a href="#" class="btn theme-btn">আমাদের সাথে জয়েন করুন</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('jolchobi/img/slider.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-content">
                    <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                    <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য মোট তিনটি কোর্স ডিজাইন করেছি। নিচে বিস্তারিত উল্ল্যেখ করা হলো।</p>
                    <a href="#" class="btn theme-btn">আমাদের সাথে জয়েন করুন</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('jolchobi/img/slider.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-content">
                    <h1>জলছবি মূলত একটি সৃজনশীল কার্যক্রমভিত্তিক সংগঠন।</h1>
                    <p>শিশুমনের পরিপূর্ণ বিকাশের জন্য এবং সামাজিক ও সাংস্কৃতিক পরিমন্ডলে নিজেকে খাপ খাইয়ে নেয়ার জন্য মানসিক ও শারীরিক প্রস্তুতির জন্য জলছবি কাজ করে যাচ্ছে। এই লক্ষ্যকে সামনে রেখে আমরা শিশুকিশোরদের জন্য মোট তিনটি কোর্স ডিজাইন করেছি। নিচে বিস্তারিত উল্ল্যেখ করা হলো।</p>
                    <a href="#" class="btn theme-btn">আমাদের সাথে জয়েন করুন</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="admission-form">
    <div class="container">
        <h1>অনলাইন আবেদন</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('message'))
        <div class="text-success">{{ session('message') }}</div>
        @endif

        <form action="{{ route('storeadmission') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর নাম</label>
                        <input type="text" class="form-control" name="name" placeholder="নাম লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">জন্মতারিখ</label>
                        <input type="text" class="form-control" name="date_of_birth" placeholder="২০/০৮/১৯৯৬">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">বিদ্যালয়ের নাম</label>
                        <input type="text" class="form-control" name="school" placeholder="বিদ্যালয়ের নাম লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">শ্রেনী</label>
                        <input type="text" class="form-control" name="class" placeholder="শ্রেনী লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">মাতার নাম</label>
                        <input type="text" class="form-control" name="mother_name" placeholder="মাতার নাম লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">মাতার মোবাইল নাম্বার</label>
                        <input type="text" class="form-control" name="mother_number" placeholder="+৮৮">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">পিতার নাম</label>
                        <input type="text" class="form-control" name="father_name" placeholder="পিতার নাম লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">পিতার মোবাইল নাম্বার</label>
                        <input type="text" class="form-control" name="father_number" placeholder="+৮৮">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">অভিভাবকের নাম</label>
                        <input type="text" class="form-control" name="guardian" placeholder="অভিভাবকের নাম লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">অভিভাবকের মোবাইল নাম্বার</label>
                        <input type="text" class="form-control" name="guardian_number" placeholder="অভিভাবকের নাম্বার লিখুন" value="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">বর্তমান ঠিকানা</label>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">

                                    <select class="form-control" name="divisions" id="divisions" onchange="divisionsList();">
                                        <option disabled selected>বিভাগ নির্বাচন করুন</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Chattogram">Chattogram</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">

                                    <select class="form-control" name="distric" id="distr" onchange="thanaList();">
                                        <option value="">জেলা নির্বাচন করুন</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">

                                    <select name="polic_sta" id="polic_sta" class="form-control">
                                        <option value="">থানা নির্বাচন করুন</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input type="text" name="road_house" class="form-control" placeholder="রোড/বাসার ঠিকানা">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">ইমেইল এড্রেস</label>
                        <input type="email" class="form-control" name="email" placeholder="ইমেইল এড্রেস লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">ভর্তিচ্ছু কোর্স <span>বিস্তারিত দেখুন</span></label>
                        <select type="text" class="form-control" name="course"  id="">
                            <option disabled selected>কোর্স নির্বাচন করুন</option>
                            <option value="মজার আঁকাজোকা">মজার আঁকাজোকা</option>
                            <option value="গল্পে আঁকা অভিনয়">গল্পে আঁকা অভিনয়</option>
                            <option value="পাপেট ও কিডস থিয়েটার">পাপেট ও কিডস থিয়েটার</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">রেফারেন্স (যদি থাকে)</label>
                        <input type="text" name="reference" class="form-control" value="none" placeholder="নাম লিখুন">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">রেফারেন্স মোবাইল নাম্বার (যদি থাকে)</label>
                        <input type="text" name="reference_number" class="form-control" value="none" placeholder="নাম্বার লিখুন">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">আগ্রহের বিষয়</label>
                        <div class="input-group">
                            <div class="radio-group">
                                <input id='nach' type="checkbox" name="hobby[]" value="নাচ">
                                <label for="nach">নাচ</label>
                            </div>
                            <div class="radio-group">
                                <input id='gaan' type="checkbox" name="hobby[]" value="গান">
                                <label for="gaan">গান</label>
                            </div>
                            <div class="radio-group">
                                <input id='ovinoy' type="checkbox" name="hobby[]" value="অভিনয়">
                                <label for="ovinoy">অভিনয়</label>
                            </div>
                            <div class="radio-group">
                                <input id='citrokola' type="checkbox" name="hobby[]" value="চিত্রকলা">
                                <label for="citrokola">চিত্রকলা</label>
                            </div>
                            <div class="radio-group">
                                <input id='arigami' type="checkbox" name="hobby[]" value="অরিগামি">
                                <label for="arigami">অরিগামি</label>
                            </div>
                            <div class="radio-group">
                                <input id='baddojontro' type="checkbox" name="hobby[]" value="বাদ্যযন্ত্র">
                                <label  for="baddojontro">বাদ্যযন্ত্র</label>
                            </div>
                            <div class="radio-group">
                                <input id='readbook' type="checkbox" name="hobby[]" value="বই পড়া">
                                <label for="readbook">বই পড়া</label>
                            </div>
                            <div class="radio-group">
                                <input id='abriti' type="checkbox" name="hobby[]" value="আবৃত্তি">
                                <label for="abriti">আবৃত্তি</label>
                            </div>
                            <div class="radio-group">
                                <input id='game' type="checkbox" name="hobby[]" value="খেলাধুলা">
                                <label for="game">খেলাধুলা</label>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর ছবি</label>
                        <input type="file" name="image">
                        {{-- <div class="upimg">
                            <input type="file" name="image">
                            <img src="{{ asset('jolchobi/img/image-placeholder.png') }}" class="w-100" alt="">
                        </div> --}}
                    </div>
                    <div class="form-group">
                        <div class="condition">
                            <input type="checkbox" name="checkbox" id="" value="yes">
                            <a href="#">সকল শর্তে রাজি থাকলে সাবমিট করুন</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn theme-btn">রেজিস্ট্রেশন করুন</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- #End  form -->
@endsection