
@extends('layout.layout')
@section('title','Welcome')

@section('content')
      <!-- ********* Header Section End ******** -->
      
      <!-- ********* Slide Section Start ******** -->
      <section class="slide-container">
        <div class="img-wrapper">
          <img src="{{asset('img/battambang-province.webp')}}" class="active" />
          <img  src="{{asset('img/Slide1.png')}}"/>
          <img  src="{{asset('img/iphone.jpg')}}"/>
          <img  src="{{asset('img//kep-province.jpeg')}}"/>
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
        <div class="heading">
          <h1>Trending Destenations</h1>
          <p>Travellers searching for Cambodia also booked these</p>
        </div>
        <div class="trending-container">
          <div class="trending-items">
            <span class="province">Siem Reap</span>
            <a href="properties.html"><img  src="{{asset('img/siemreap-province.jpeg')}}" alt="siemreap-province"></a>
          </div>
          <div class="trending-items">
            <span class="province">Kompot</span>
            <a href=""><img src="{{asset('img/kompot-province.jpeg')}}" alt="kompot-province"></a>
          </div>
          <div class="trending-items">
            <span class="province">Kep</span>
            <a href=""><img src="{{asset('img/kep-province.jpeg')}}" alt="kep-province"></a>
          </div>
          <div class="trending-items">
            <span class="province">Koh Kong</span>
            <a href=""><img src="{{asset('img/kohkong-province.jpeg')}}" alt="kohkong-province"></a>
          </div>
          <div class="trending-items">
            <span class="province">Pursat</span>
            <a href=""><img  src="{{asset('img/pursat-province.jpeg')}}" alt="pursat-province"></a>
          </div>
          <div class="trending-items">
            <span class="province">Battambang</span>
            <a href=""><img src="{{asset('img/battambang-province.webp')}}" alt="battambang-province"></a>
          </div>
        </div>
      </section>
      <!-- ********* Trending Section End ******** -->
  
      <!-- ********* Explore Cambodia Section Start ******** -->
      <section class="explore-cambodia">
        <div class="heading">
          <h1>Explore Cambodia</h1>
          <p>These popular destinations have a lot to offer</p>
        </div>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="card swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
      <!-- ********* Explore Cambodia Section End ******** -->
          
      <!-- ********* Popular Section Start ******** -->
      <section class="popular-properties">
        <div class="heading">
          <h1>Popular Properties</h1>
        </div>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">        
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
                  </div>
                  <div class="text">
                    <div class="property-name">
                      The B Resort
                    </div>
                    <div class="rating">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <span class="reviews">500 reviews</span>
                    </div>
                    <div class="location">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Siem Reap</span>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="price">
                      <p class="from">From</p>
                      <p>120$ per night</p>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>          
          
                          
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
      <!-- ********* Popular Section End ******** -->
  
      <!-- ********* Footer Section Start ******** -->    

@endsection
    

