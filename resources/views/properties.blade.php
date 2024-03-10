@extends('layout.layout')
@section('title','Welcome')

@section('content') 
    <!-- ********* About Province Section Start ******** -->
    <section class="about-province">
      <div class="container">
        <h1 class="heading">
          Explore <span>Siem Reap</span>
        </h1>
        <div class="content">
            <div class="slide-pictures">
                <!-- Swiper -->
                <div class="swiper mySwiper01">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="images/battambang-province.webp" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="images/iphone.jpg" alt="">
                    </div>
                    
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
                <h4 class="title">About Siem Reap</h4>
                <p class="text">
                    When the morning light washes over the overgrown temples
                    and ruins of Angkor Wat, a simple Siem Reap sunrise becomes a
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
          <h4 class="properties-type">Hotels Collection in <span class="province-name">Siem Reap</span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">        
              <div class="items swiper-slide">
              <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                      <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
          <h4 class="properties-type">Resorts Collection in <span class="province-name">Siem Reap</span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">        
              <div class="items swiper-slide">
              <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
        <h4 class="properties-type">Guest House Collection in <span class="province-name">Siem Reap</span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">        
              <div class="items swiper-slide">
              <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
        <h4 class="properties-type">Holyday Home Collection in <span class="province-name">Siem Reap</span></h4>
        <div class="swiper-container">
          <div class="box mySwiper">
            <div class="content swiper-wrapper">        
              <div class="items swiper-slide">
              <div class="items-content">
                  <div class="image">
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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
                    <img src="images/battambang-province.webp" alt="">
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