
@extends('layout.layout')
@section('title','Booking4U')

@section('content')      
      <!-- ********* Slide Section Start ******** -->
      <section class="slide-container">
        <div class="container-fluid img-wrapper">
          <img src="{{asset('img/home_slide1.jpeg')}}" class="active" />
          <img  src="{{asset('img/kep.jpeg')}}"/>
          <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
          <img  src="{{asset('img/kep.jpeg')}}" alt="Kep province"/ >
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
          <div class="trending-items">
            <!-- <span class="province">Siem Reap</span> -->
            <a href=""><img src="{{asset('img/kompongThom.jpg')}}"/></a>
          </div>
          <div class="trending-items">
            <!-- <span class="province">Kompot</span> -->
            <a href=""><img  src="{{asset('img/kompongspue.jpg')}}"/></a>
          </div>
          <div class="trending-items">
            <!-- <span class="province">Kep</span> -->
            <a href=""><img  src="{{asset('img/kompongspue.jpg')}}"/></a>
          </div>
          <div class="trending-items">
            <!-- <span class="province">Koh Kong</span> -->
            <a href=""><img src="{{asset('img/kompongThom.jpg')}}"/></a>          </div>
          <div class="trending-items">
            <!-- <span class="province">Pursat</span> -->
            <a href=""><img src="{{asset('img/kompot-province.jpeg')}}"/></a>
          </div>
          <div class="trending-items">
            <!-- <span class="province">Battambang</span> -->
            <a href=""><img src="{{asset('img/kompongThom.jpg')}}"/></a>          </div>
        </div>
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
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                  <img  src="{{asset('img/battambang.jpeg')}}" alt="Kep province"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Battambang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                  <img  src="{{asset('img/siemreap.jpeg')}}" alt="Kep province"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Siem Reap</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kampongspeu.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kampong Speu</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Koh Kong</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/phnompenh.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Phnom Penh</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kampongcham.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kampong Cham</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kandal.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kandal</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/preahvihear.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Preah Vihear</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img src="{{asset('img/banteaymeanchey.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Banteay Meanchey</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kampongthom.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kampong Thom</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>          
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/preyveng.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Prey Veng</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kep.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kep</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kratie.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kratie</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/mondulkiri.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Mondulkiri</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/oddarmeanchey.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Oddar Meanchey</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/pailin.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Pailin</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/preahsihanouk.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Preah Sihanouk</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kampongchhnang.avif')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kampong Chhnang</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/pursat.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Pursat</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/takeo.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Takeo</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/svayrieng.avif')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Svay Rieng</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/steungtreng.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Steung Treng</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/rattanakkiri.jpg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Rattanak Kiri</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/kampot.jpeg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Kampot</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
              <div class="cards swiper-slide">
                <div class="card-content">
                  <div class="image">
                    <img  src="{{asset('img/tboungkhmum.jpg')}}"/>
                  </div>
                  <div class="destenation-property">
                    <p class="destenation">Tboung Khmum</p>
                    <p class="property">777 Properties</p>
                  </div>
                </div>
              </div>                    
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
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kep.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                  <img  src="{{asset('img/kep.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
                    </div>
                    <button class="btn-viewDeal">View Deal</button>
                  </div>
                </div>
              </div>                            
              <div class="items swiper-slide">
                <div class="items-content">
                  <div class="image">
                    <img  src="{{asset('img/kohkong-province.jpeg')}}"/>
                  </div>
                  <div class="bottom-content">
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
                      </div>
                      <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Siem Reap</span>
                      </div>
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
      </div>
    </section>
    <!-- ********* Popular Section End ******** -->
@endsection
    


