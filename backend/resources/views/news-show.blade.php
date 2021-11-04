@extends('base')

@section('title', 'Apart NEWS')

@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ $notice['file_name'] }}');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">

          <h1 class="text-white">{{ $notice['title'] }}</h1>
          <p>{{ $notice['created_at'] }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          @if ($notice['file_name'])
            <figure>
              <img src="{{ $notice['file_name'] }}" alt="Image" class="img-fluid">
            </figure>
          @endif

          <p>{{ $notice['messages'] }}</p>
        </div>


        <div class="col-md-3 ml-auto">
          {{-- <div class="mb-5">
            <h3 class="h5 text-white mb-3">Search</h3>
            <form action="#" method="post">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
              </div>
            </form>
          </div> --}}
          <div id="app">
            <example-component tests="{{ $notice['id']}}"></example-component>
          </div>
          <div class="mb-5">
            <h3 class="h5 mb-3">最新記事</h3>
            <ul class="list-unstyled">
              @foreach($latest_news as $notice)
                <li class="mb-2"><a href="{{ route('news_detail', $notice->id) }}">{{ $notice->title }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="bg-primary" data-aos="fade">
    <div class="container">
      <div class="row">
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-facebook text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-instagram text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-linkedin text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
            class="icon-pinterest text-white"></span></a>
        <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
      </div>
    </div>
  </div>


@stop
