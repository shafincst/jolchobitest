@extends('admin.layouts.template')
@section('content')
<h1 style="text-align: center;margin: auto; ">আবেদনকারীর তথ্য</h1>
<br>
<div class="d-flex justify-content-end" >
    <img style="height: 200px;   width: 200px;" src="{{asset($admissions_public->image) }}" class="img-thumbnail" alt="...">
</div>

<form action="{{ route('storeadmission') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">শিক্ষার্থীর নাম</label>
                <h2 class="form-control">{{ $admissions_public->name }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">জন্মতারিখ</label>
                <h2 class="form-control">{{ $admissions_public->date_of_birth }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">বিদ্যালয়ের নাম</label>
                <h2 class="form-control">{{ $admissions_public->school }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">শ্রেনী</label>
                <h2 class="form-control">{{ $admissions_public->class }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">মাতার নাম</label>
                <h2 class="form-control">{{ $admissions_public->mother_name }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">মাতার মোবাইল নাম্বার</label>
                <h2 class="form-control">0{{ $admissions_public->mother_number }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">পিতার নাম</label>
                <h2 class="form-control">{{ $admissions_public->father_name }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">পিতার মোবাইল নাম্বার</label>
                <h2 class="form-control">0{{ $admissions_public->father_number }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">অভিভাবকের নাম</label>
                <h2 class="form-control">{{ $admissions_public->guardian }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">অভিভাবকের মোবাইল নাম্বার</label>
                <h2 class="form-control">0{{ $admissions_public->guardian_number }}</h2>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="">বর্তমান ঠিকানা</label>
                <div class="row">
                    <div class="col-lg-3">
                        <label for="">বিভাগ</label>
                        <div class="form-group">

                            <h2 class="form-control">{{ $admissions_public->divisions }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="">জেলা</label>
                        <div class="form-group">

                            <h2 class="form-control">{{ $admissions_public->distric }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="">থানা</label>
                        <div class="form-group">

                            <h2 class="form-control">{{ $admissions_public->polic_sta }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="">রোড/বাসার ঠিকানা</label>
                        <div class="form-group">

                            <h2 class="form-control">{{ $admissions_public->road_house }}</h2>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">ইমেইল এড্রেস</label>
                <h2 class="form-control">{{ $admissions_public->email }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">ভর্তিচ্ছু কোর্স </label>
                <h2 class="form-control">{{ $admissions_public->course }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">রেফারেন্স </label>
                <h2 class="form-control">{{ $admissions_public->reference }}</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">রেফারেন্স মোবাইল নাম্বার </label>
                <h2 class="form-control">{{ $admissions_public->reference_number }}</h2>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="">আগ্রহের বিষয়</label>
                <p > @php
                    $hobbys = json_decode($admissions_public->hobby)
                @endphp
                @foreach($hobbys as $hobby)
                   {{  $hobby }},
                @endforeach
                    
                   </p>
            </div>
        </div>
       
    </div>
</form>
  @endsection