@extends('layouts.app')

{{-- @section('title',{{$product->name}} ) --}}
    


@section('content')



  {{-- producr 2 --}}
  <div class="container">
        <div class="row">
           <div class="col-xs-4 item-photo">
                <img style="max-width:100%;" src="{{asset('product/'.$product->slug.'.jpg')}}" />
            </div>
            <div class="col-xs-5" style="border:0px solid gray">
                <!-- product details -->
                <h3>{{$product->name}} </h3>    
                <h5 style="color:#337ab7"> {{$product->details}} <small style="color:#337ab7">(5054 ventas)</small></h5>
    
                <!-- price-->
                <h6 class="title-price"><small>Best offer</small></h6>
                <h3 style="margin-top:0px;"> ₦ {{$product->presentPrice()}} </h3>
    
               
                          
    
                <!-- add to cart -->
                <form action="{{route('cart_store')}} " method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}} ">
                    <input type="hidden" name="name" value="{{$product->name}} ">
                    <input type="hidden" name="price" value="{{$product->price}} ">
                    <button class="btn btn-success" type="submit">
                            <span style="margin-right:20px"  aria-hidden="true">
                         </span> Add to cart</button>
                </form>
                <div class="section" style="padding-bottom:20px;">

                    

                    <h6>{{$product->description}} </h6>
                </div>                                        
            </div>                              
    
            <div class="col-xs-9">
                <ul class="menu-items">
                    <li class="active">Detalle del producto</li>
                    <li>Garantía</li>
                    <li>Vendedor</li>
                    <li>Envío</li>
                </ul>
                <div style="width:100%;border-top:1px solid silver">
                    <p style="padding:15px;">
                        <small>
                        Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go. 
    
                        With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                        </small>
                    </p>
                    <small>
                        <ul>
                            <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                            <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                            <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                            <li>MicroUSB and USB connectivity</li>
                            <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                            <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                            <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                            <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                            <li>Features 16 GB memory and 2 GB RAM</li>
                            <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                            <li>17 hours of talk time, 350 hours standby time on one charge</li>
                            <li>Available in white or black</li>
                            <li>Model I337</li>
                            <li>Package includes phone, charger, battery and user manual</li>
                            <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                        </ul>  
                    </small>
                </div>
            </div>		
        </div>
    </div>    

    {{-- Trending product --}}
    <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			  
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
                            @foreach ($trending_product as $product)
						<div class="col-sm-3">
                            <div class="thumb-wrapper">
                                    <div class="img-box">
                                          
                                      <a href="{{route('product_view',$product->slug)}} ">  <img src="{{asset('product/'.$product->slug.'.jpg')}} " class="img-responsive img-fluid" alt="belt"></a>
                                    </div>
                                    <div class="thumb-content">
                                        <h4>{{$product->description}} </h4>
                                        <p class="item-price"><strike>₦ 400.00</strike> <span>₦ {{$product->price}} </span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                      
                                    </div>						
                                </div>
                           
						
                        </div>
                        @endforeach
												
					
					</div>
				</div>
			
		
		</div>
		</div>
	</div>
</div>
@endsection