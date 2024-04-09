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
        <div class="location">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>#129, Street 3, Thvy Cherng Village, Sangkat Andong Khmer, Kampot </span>
        </div>
        <div class="contacts">
          <div class="tel">
            <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0969913197" target="_blank"> +855 96 9913 197</a>
          </div>
          <div class="mail">
            <i class="fa fa-envelope" aria-hidden="true"></i><a href="http://rankakada10@gmail.com" target="_blank"> rankakada10@gmail.com</a>
          </div>
        </div>
       </div>
    </section>
    <section class="SliderContainer">
       <div class="container">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper04">
          <div class="swiper-wrapper">
            @foreach($viewroom as $viewrooms)
            <div class="swiper-slide">
              <img src="{{ asset('uploads/photos/'.$viewrooms->type_image) }}">
            </div>
            @endforeach

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper03">
          <div class="swiper-wrapper">
            @foreach($viewroom as $viewrooms)
            <div class="swiper-slide">
              <img src="{{ asset('uploads/photos/'.$viewrooms->type_image) }}">
            </div>
            @endforeach
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
            <p> <img src="{{asset('img/icons/guidance_garden.svg')}}" width="16px"/> Garden view</p>
            <p> <img src="{{asset('img/icons/pool.svg')}}" width="20px"> Pool view</p>
            <p> <img src="{{asset('img/icons/guidance_terrace.svg')}}" width="16px"> Terrace</p>
            <p> <img src="{{asset('img/icons/parking.svg')}}" width="16px"> Free Parking</p>
            <p> <img src="{{asset('img/icons/wifi.svg')}}"width="16px"> Free Wi-Fi</p>
          </div>
        </div>
      </div>
    </section>
    <section class="booking">
      <div class="container">
        <h1 class="title">View prices for your travel dates</h1>
        <form action="{{ route('details') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="input-data">
            <label for="check_in">Check in</label> <br>
            <input type="text" name="check_in_date" id="check_in" required onfocus="(this.type='date')" placeholder="Check in Date">
          </div>
          <div class="input-data">
            <label for="check_out">Check out</label> <br>
            <input type="text" name="check_out_date" id="check_out" required onfocus="(this.type='date')" placeholder="Check out Date">
          </div>
          <div class="input-data">
            <label for="roomtype">Room Type</label> <br>
            <select name="bed"  required>
              <option value=""> Select type of roomtype</option>
              @foreach($viewroom as $items)
                <option value="{{ $items->bed }}" name="bed" id="SelectRoomtype">{{ $items->bed }} Bed ${{ $items->price }}</span></option>
              @endforeach
            </select>
          </div>
          <div class="input-data">
            <label for="room">Room Number</label> <br>
            @foreach($viewroom as $index => $items)
            @if($index === 0)
              <input type="text" name="room_no" id="rooms" value="{{ $items->room_no }}">
            @endif
          @endforeach
            
          </div>
          <div class="input-data">
            <label for="tel">Phone Number</label> <br>
            <input type="tel" name="phone_number" id="tel" placeholder="Enter your number phone" required>
          </div>
          <div class="input-data">
            <label for="email">Email</label> <br>
            <input type="email" name="email" id="email" placeholder="Enter your email">
          </div>
          <div class="input-data">
            <label for="guests">Guests</label> <br>
            <input type="text" name="guest" id="guests" placeholder="Enter amount of people" required>
          </div>
          <div class="input-data">
            <label for="payment">Payment ($)</label> <br>
            <input type="text" name="payment" id="payment" placeholder="Payment ($)">
          </div>
          <div class="btn-booking">
            <input type="submit" value="Booking Now">
          </div>
        </form>

      </div>
    </section>

    <script src="{{ asset('js/dashboard/ajax.js')}}"></script>

@endsection