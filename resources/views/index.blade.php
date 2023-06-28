@extends('layouts.app')

@section('content')
  <div class="hero_area">
    <!-- header section strats -->
    @include('layouts._header')
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">

      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            @foreach ($slides as $index => $slide)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}"  {{ $index == 0 ? 'class=active' : '' }}></li>
            @endforeach
          </ol>
          <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="slider_item-detail">
                    <h1>
                      @php
                      $titleParts = explode('*', $slide->title);
                    @endphp
                    {{ $titleParts[0] }}
                    @if (isset($titleParts[1]))
                    <br/>
                    <span>{{ $titleParts[1] }}</span>
                    @endif
                    </h1>
                    <div>
                      <a href="">
                        Download App
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="row">
      <div class="col-md-5 offset-md-1">
        <div class="img-box">
          <img src="{{asset('assets/images/about.png')}}" alt="" />
          <div class="play_btn-box">
            <div class="play-btn"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="detail-box">
          <h3>
            About The App
          </h3>
          <p>
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The
            point of using LoremIt is a long established fact that a reader
            will be distracted by the readable content of a page when looking
            at its layout. The point of using LoremIt is a long established
            fact that a reader will be distracted by the readable content of a
            page when looking at its layout. The point of using Lorem
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->



  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2>
          App Screens
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          @foreach ($products as $index => $product)
          <li data-target="#carouselExample2Indicators" data-slide-to="{{$index}}"  {{ $index == 0 ? 'class=active' : '' }}></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
          @foreach ($products as $index => $product)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="client_container">
                  <div class="client_box">
                    <div class="detail_box">
                      <div class="img_box">
                        <img src="{{$product->image_path}}" />
                      </div>
                      <h5>
                        {{$product -> name}}
                      </h5>
                      <p>
                        {{$product -> description}}
                      </p>
                    </div>
                  </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="info-logo">
      <h2>
        Mezo News
      </h2>
    </div>
    <div class="container">
      <h4>
        Contact us
      </h4>
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Khartoum , Jabra
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +249 912345678
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Info@RozerTechnology.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>



  <!-- end info_section -->

  <!-- footer section -->
  @include('layouts._footer')
  <!-- footer section -->

  
@endsection
@push('scripts')

<script>
  function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
      .querySelector(".custom_menu-btn")
      .classList.toggle("menu_btn-style");
  }
</script>
@endpush