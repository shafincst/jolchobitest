@extends('master')
@section('content')
    <div class="blog-list-hero-area">
        <div class="container">
            <div class="heading">
                <h1>ফিচার্ড আর্টিকেল</h1>
            </div>
            @foreach($blogs_head as $item)
                
           
            <div class="row">
                <div class="col-lg-6">
                    <div class="featurede-blog">
                        <div class="featured-blog-img">
                            <img src="{{ $item->image }}" class="w-100" alt="">
                        </div>
                        <div class="featured-blog-info">
                            <span>{{ $item->created_at->toFormattedDateString() }}</span>
                            <h2>{{ $item->title }} </h2>
                            <p>{{  $item->short_des }}...</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-6">
                    @foreach ($blogs_limit as $item)
                    <a href="{{ route('blog_view', [$item->id, $item->slug]) }}">
                        <div class="featured-mini-articles">
                            <div class="featured-mini-img">
                                <img style="width: 200px;" src="{{ $item->image }}" alt="">
                            </div>
                            <div class="featured-mini-info">
                                <p>{{ $item->created_at->toFormattedDateString() }}</p>
                                    <h1>{{ $item->title }}</h1>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- #end blog-list -->
    <div class="blog-list">
        <div class="container">
            <div class="heading text-center">
                <h1>আর্টিকেলস</h1>
            </div>
            <div class="blog-category">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                        <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="row">
                            
                            @foreach ($blogs as $item)
                            <div class="col-lg-4">
                                <div class="single-article">
                                    <div class="article-img">
                                        <img style="height: 250px;" src="{{ $item->image }}" alt="">
                                    </div>
                                    <div class="article-content">
                                        <a href="{{ route('blog_view', [$item->id, $item->slug]) }}">
                                            <h1>{{ $item->title }}</h1>
                                        </a>
                                        <p>{{ $item->short_des }}...</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
    @endsection