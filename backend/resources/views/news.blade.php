@extends('base')

@section('title', 'Apart NEWS')

@section('content')
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/hero_bg_1.jpg');"
  data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white">News &amp; Events</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
  </div>
  <div class="site-section">
  <div class="container">
    <div class="row">
      @foreach($news as $notice)
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('news_detail', $notice->id) }}">
            @if ($notice->file_name)
              <img src="{{ asset('storage/images/' . $notice->file_name) }}" style="width:100%">
            @else
              <img src="https://placehold.jp/1900x1268.png?text=No Image" style="width:100%">
              
            @endif
          </a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">{{ $notice->created_at }}</span>
            <h2 class="h5 text-black mb-3"><a href="{{ route('news_detail', $notice->id) }}">{{ $notice->title }}</a></h2>
          </div>
        </div>
      @endforeach
    </div>

  </div>

  <div class="container mt-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="site-block-27">
          {{ $news->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

  
@stop
    








    
    