@extends('layout.layout')
@section('title','Welcome')

@section('content') 
    <!-- ********* About Province Section Start ******** -->
    <section class="about-province">
      <div class="container">
        <h1 class="heading">
          Explore <span>
            @foreach ($getprovince as $provider)
              {{ $provider->province }}
            @endforeach
          </span>
        </h1>
        <div class="content">
            <div class="slide-pictures">
                <!-- Swiper -->
                <div class="swiper mySwiper01">
                    <div class="swiper-wrapper">
                    @foreach ($slideproperties as $slide)
                      <div class="swiper-slide">
                        <img src="{{ asset('uploads/photos/'.$slide->image_hotel) }}">
                      </div>
                    @endforeach                    
                    </div>
                    <!-- <div class="swiper-button-next"></div> -->
                    <!-- <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination"></div>
                    <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                    </div>
                </div>
            </div>
            <div class="textBox">
                <h4 class="title">About  
                @foreach ($getprovince as $provider)
                  {{ $provider->province }}
                @endforeach</h4>
                <p class="text">
                    When the morning light washes over the overgrown temples
                    and ruins of Angkor Wat, a simple 
                    @foreach ($getprovince as $provider)
                      {{ $provider->province }}
                    @endforeach
                     sunrise becomes a
                    profound event. The ancient structures are contained within one 
                    of the largest religious complexes in the world. The complex and 
                    the 12th century Angkor Thom royal city are considered the main 
                    reasons to visit Siem Reap. Get a lesson in national history at the 
                    Cambodian Cultural Village, and a lesson in bargaining at the 
                    Angkor Night Market, a bonanza of shopping stalls, food vendors, 
                    and bars.
                </p>
            </div>
        </div>
      </div>
    </section>
    <!-- ********* About Province Section End ******** -->

    <!-- Hotel Section Start-->
    <section class="hotel-container">
        <div class="container">
          <h4 class="properties-type">Hotels Collection in <span class="province-name">
            @foreach ($getprovince as $provider)
            {{ $provider->province }}
           @endforeach
            </span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">   
              
              
              @foreach ($getproperties as $properties)
                <div class="items swiper-slide">
                  <div class="items-content">
                      <div class="image">
                        <img src="{{ asset('uploads/photos/'.$properties->image_hotel) }}">
                      </div>
                      <div class="bottom-content">
                        <div class="text">
                          <div class="property-name">
                            {{ $properties->hotel_name }}
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
                            <span>{{ $properties->province }}</span>
                          </div>
                        </div>
                        <a href="{{ url('selecteddetails/'.$properties->id) }}"><button class="btn-viewDeal">View Deal</button></a>
                      </div>
                    </div>
                  </div>    
              @endforeach
  
              
              


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
          
                          
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        </div>
    </section>
    <!-- Hotel Section End-->
    
    <!-- Resort Sectiom Start -->
    <section class="resort-container">
        <div class="container">
          <h4 class="properties-type">Resorts Collection in <span class="province-name">
            @foreach ($getprovince as $provider)
             {{ $provider->province }}
            @endforeach</span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">  

              @foreach ($getresort as $getresorts)
              <div class="items swiper-slide">
                <div class="items-content">
                    <div class="image">
                      <img src="{{ asset('uploads/photos/'.$getresorts->image_hotel) }}">
                    </div>
                    <div class="bottom-content">
                      <div class="text">
                        <div class="property-name">
                          {{ $getresorts->hotel_name }}
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
                          <span>{{ $getresorts->province }}</span>
                        </div>
                      </div>
                      <a href="{{ url('selecteddetails/'.$getresorts->id) }}"><button class="btn-viewDeal">View Deal</button></a>
                    </div>
                  </div>
                </div> 
              @endforeach

              
              

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
          
                          
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        </div>
    </section>
    <!-- Resort Section End -->
    
    <!-- Guest House Section Start -->
    <section class="guestHouse-container">
      <div class="container">
        <h4 class="properties-type">Guest House Collection in <span class="province-name">
          @foreach ($getprovince as $provider)
           {{ $provider->province }}
          @endforeach
        </span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">
              
              @foreach ($getguesthouse as $getguesthouses)
              <div class="items swiper-slide">
                <div class="items-content">
                    <div class="image">
                      <img src="{{ asset('uploads/photos/'.$getguesthouses->image_hotel) }}">
                    </div>
                    <div class="bottom-content">
                      <div class="text">
                        <div class="property-name">
                         {{ $getguesthouses->hotel_name }}
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
                          <span>{{ $getguesthouses->province }}</span>
                        </div>
                      </div>
                      <a href="{{ url('selecteddetails/'.$getguesthouses->id) }}"><button class="btn-viewDeal">View Deal</button></a>
                    </div>
                  </div>
                </div>  
              @endforeach
              

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
                  
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Guest House Section End-->
    
    <!-- Holyday Home Section Start-->
    <section class="holydayHome-container">
      <div class="container">
        <h4 class="properties-type">Holyday Home Collection in <span class="province-name">
          @foreach ($getprovince as $provider)
          {{ $provider->province }}
         @endforeach
       </span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">        
              <div class="items swiper-slide">

                @foreach ($getholidayhome as $getholidayhomes)
                
                  <div class="items-content">
                    <div class="image">
                      <img src="{{ asset('uploads/photos/'.$getholidayhomes->image_hotel) }}">
                    </div>
                    <div class="bottom-content">
                      <div class="text">
                        <div class="property-name">
                          {{ $getholidayhomes->hotel_name }}
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
                          <span>{{ $getholidayhomes->province }}</span>
                        </div>
                      </div>
                      <a href="{{ url('selecteddetails/'.$getholidayhomes->id) }}"><button class="btn-viewDeal">View Deal</button></a>
                    </div>
                  </div>
                @endforeach






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
          
                          
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Holiday Home Section End-->
@endsection