@extends('layout.layout')
@section('title','Booking4U')

@section('content')
    <section class="detail-heading">
       <div class="container">
        <h1 class="property-name">The B Resort</h1>
        <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-empty" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <span class="reviews">500 reviews</span>
        </div>
        <div class="loction">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>#129, Street 3, Thvy Cherng Village, Sangkat Andong Khmer, Kampot </span>
        </div>
        <div class="contacts">
          <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0969913197" target="_blank"> +855 96 9913 197</a>
          <i class="fa fa-envelope" aria-hidden="true"></i><a href="http://rankakada10@gmail.com" target="_blank"> rankakada10@gmail.com</a>
        </div>
       </div>
    </section>
    <section class="SliderContainer">
       <div class="container">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper04">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper03">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
            </div>
          </div>
      </div>
       </div>
    </section>
    <section class="details">
      <div class="container">
        <div class="contents">
          You're eligible for a Genius discount at The B Resort! To save at this property, all you have to do is <br>
          <a href="">Sign in.</a> <br><br>
          Located in Kampot, 2.4 km from Kampot Pagoda, The B Resort features views of the garden. Providing a restaurant, the property also has a garden, as well as an indoor pool. The accommodation provides a 24-hour front desk, airport transfers, room service and free WiFi. 
          <br><br>The resort will provide guests with air-conditioned rooms offering a desk, a kettle, a fridge, a minibar, a safety deposit box, a flat-screen TV, a terrace and a private bathroom with a bidet. The B Resort features certain rooms with city views, and the rooms have a balcony. 
          <br><br>At the accommodation each room includes bed linen and towels. You can play billiards at this 3-star resort, and the area is popular for cycling. 
          <br><br>Kampot Provincial Museum is 2 km from The B Resort, while Kampot Train Station is 3.1 km away. The nearest airport is Sihanouk International Airport, 81 km from the resort.
        </div>
        <div class="highlight">
          <h4>Property highlights</h4>
          <div id="info1">
            Breakfast info
            <p>Continental, Vegan, Asian, American</p>
          </div>
          <div id="info2">
            Room with:
            <p> <img src="images/icons/guidance_garden.svg" alt="" width="16px"> Garden view</p>
            <p> <img src="images/icons/pool.svg" alt="" width="20px"> Pool view</p>
            <p> <img src="images/icons/guidance_terrace.svg" alt="" width="16px"> Terrace</p>
            <p> <img src="images/icons/parking.svg" alt="" width="16px"> Free Parking</p>
            <p> <img src="images/icons/wifi.svg" alt="" width="16px"> Free Wi-Fi</p>
          </div>
        </div>
      </div>
    </section>
    <section class="booking">
      <div class="container">
        <h1 class="title">View prices for your travel dates</h1>
        <form action="" method="get">
          <div class="input-data">
            <label for="check_in">Check in</label> <br>
            <input type="text" name="check_in" id="check_in" required onfocus="(this.type='date')" placeholder="Check in Date">
          </div>
          <div class="input-data">
            <label for="check_out">Check out</label> <br>
            <input type="text" name="check_out" id="check_out" required onfocus="(this.type='date')" placeholder="Check out Date">
          </div>
          <div class="input-data">
            <label for="room_type">Room Type</label> <br>
            <select name="room_type" id="room_type" required>
              <option value="" disabled selected hidden> Select type of rooms</option>
              <option value="1bed">1 Single Bed</option>
              <option value="1bed">2 Single Bed</option>
              <option value="1bed">1 Double Bed</option>
            </select>
          </div>
          <div class="input-data">
            <label for="rooms">Rooms</label> <br>
            <input type="number" name="rooms" id="rooms" placeholder="Enter amount of rooms" required>
          </div>
          <div class="input-data">
            <label for="tel">Phone Number</label> <br>
            <input type="tel" name="tel" id="tel" placeholder="Enter your number phone" required>
          </div>
          <div class="input-data">
            <label for="email">Email</label> <br>
            <input type="email" name="email" id="email" placeholder="Enter your email">
          </div>
          <div class="input-data">
            <label for="guests">Guests</label> <br>
            <input type="number" name="guests" id="guests" placeholder="Enter amount of people" required>
          </div>
          <div class="input-data">
            <label for="payment">Payment</label> <br>
            <input type="text" name="payment" id="payment" disabled>
          </div>
          <div class="btn-booking">
            <input type="submit" value="Booking Now">
          </div>
        </form>
      </div>
    </section>
@endsection