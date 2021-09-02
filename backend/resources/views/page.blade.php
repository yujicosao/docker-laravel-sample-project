@extends('base')

@section('title', 'Apart TOPPAGE')

@section('content')
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white">{{ $page->title }}</h1>
          
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          {!! nl2br(e($page['body'])) !!}
        </div>
      </div>
    </div>
  </div>

    
    
  </div>
@stop