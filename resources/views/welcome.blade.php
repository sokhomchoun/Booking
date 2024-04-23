
@extends('layout.layout')
@section('title','Booking4U')

@section('content')    
{{-- @include('loading') --}}
      <!-- ********* Slide Section Start ******** -->
      <section class="slide-container">
        <div class="container-fluid img-wrapper">
          <img src="{{asset('img/hotel.jpeg')}}" class="active" />
          <img  src="{{asset('img/guesthouse.png')}}"/>
          <img  src="{{asset('img/resort.png')}}"/>
          <img  src="{{asset('img/holidayhome.png')}}" alt="Kep province"/ >
        </div>
        <div class="btn-container">
          <button class="prev"><i class="fa fa-angle-left"></i></button>
          <button class="next"><i class="fa fa-angle-right"></i></button>
        </div>
        <div class="dots-container">
          <div class="dot active" attr="0"></div>
          <div class="dot" attr="1"></div>
          <div class="dot" attr="2"></div>
          <div class="dot" attr="3"></div>
        </div>
      </section>
      <!-- ********* Slide Section End ******** -->
    
    <!-- ********* Trending Section Start ******** -->
    <section class="trending-destinations">
      <div class="container">
        <div class="heading">
          <h1>Trending Destenations</h1>
          <p>Travellers searching for Cambodia also booked these</p>
        </div>
        <div class="trending-container">
          @foreach ($cambodia as $item)
            <div class="trending-items">
              <span class="province">{{ $item->province }}</span>
              <a href=""><img src="{{ asset('uploads/photos/'.$item->province_image) }}"></a>
            </div>
          @endforeach
      </div>
    </section>
    <!-- ********* Trending Section End ******** -->

    <!-- ********* Explore Cambodia Section Start ******** -->
    <section class="explore-cambodia">
      <div class="container">
        <div class="heading">
          <h1>Explore Cambodia</h1>
          <p>These popular destinations have a lot to offer</p>
        </div>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">  
              @foreach ($province as $provinces)
                <div class="cards swiper-slide">
                  <div class="card-content">
                    <div class="image">
                      <a href="{{ url('selectedprovince/'.$provinces->province) }}"><img src="{{ asset('uploads/photos/'.$provinces->image_province) }}"></a>
                    </div>
                    <div class="destenation-property">
                      <p class="destenation">{{ $provinces->province }}</p>
                      <p class="property">777 Properties</p>
                    </div>
                  </div>
                </div>  
              @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- ********* Explore Cambodia Section End ******** -->
        
    <!-- ********* Popular Section Start ******** -->
    <section class="popular-properties">
      <div class="container">
        <div class="heading">
          <h1>Popular Properties</h1>
        </div>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">   
              @foreach ($hotel as $hotels)
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <a href=""><img src="{{ asset('uploads/photos/'.$hotels->image_hotel) }}"></a>
                  </div>
                  <div class="bottom-content">
                    <div class="text">
                      <div class="property-name">
                        {{ $hotels->hotel_name }}
                      </div>
                      <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span> {{ $hotels->province }}</span>
                      </div>
                    </div>
                    <a href="{{ url('selecteddetails/'.$hotels->id) }}"><button class="btn-viewDeal">View Deal</button></a>
                  </div>
                </div>
              </div>   
            @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- ********* Popular Section End ******** -->
@endsection
    


