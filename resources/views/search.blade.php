@extends('layout.layout')
@section('title','Booking4U')

@section('content')
<section class="detail-heading">
    <div class="container" style="margin-top: 7rem">
            <div class="image__item" >
                @foreach($results as $element)
                    <div class="items-content">
                        <div class="image">
                            <a href=""><img src="{{ asset('uploads/photos/'.$element->image_hotel) }}"></a>
                        </div>
                        <div class="bottom-content">
                            <div class="text">
                            <div class="">
                                {{ $element->hotel_name }}
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
                                <span>{{ $element->province }}</span>
                            </div>
                            </div>
                            <a href="{{ url('selecteddetails/'.$element->id) }}"><button class="btn-viewDeal">View Deal</button></a>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>
    </section>

@endsection