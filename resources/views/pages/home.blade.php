@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        
              <div class="card text-center">
                <div class="card-header"><h4> <h4> Welcome   {{ Auth::user()->name }} </h4> </div>
                <p>we are here to meet your needs 
                </p> 
              </div>
        </div>
    </div>
</div>

{{--  cards --}}
<div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
        <img src="{{asset('cards/belts.png')}} " width="150" height="80" alt="belt">
        <p class="card-text">men's belt</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
          <img src="{{asset('cards/fagraces.png')}} " width="150" height="80" alt="">
        <p class="card-text">Frangraces</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
            <img src="{{asset('cards/men_clothes.png')}} " width="150" height="80" alt="">          
        <p class="card-text">Men's clothes</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
            <img src="{{asset('cards/sphones.png')}} " width="150" height="80" alt="">  
        <p class="card-text">Mobile phones</p>
      </div>
    </div> 
    <div class="card bg-light">
      <div class="card-body text-center">
            <img src="{{asset('cards/women_clothes.png')}} " width="150" height="80" alt="">  
        <p class="card-text">Women clothes</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
            <img src="{{asset('cards/refrigerator.png')}} " width="150" height="80" alt="">  
        <p class="card-text"> Refregerator</p>
      </div>
    </div>
  </div>

  <div class="card " style="background-color:red;">
        <div class="card-header"><h4  style="color:white; float:left"> Deals of the day</h4>  <h4  style="color:white; float:right"> Avaliable while stock last >>>></h4></div>
        <div class="card-header"> </div>
        <h2> </h2>
      </div>

      {{-- card 2 --}}

      <div class="card-columns">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="{{asset('cards/shoe.png')}} " width="200" height="200" alt="belt">
                <p class="card-text"> Men shoe</p>
                <p># 5200.00</p>
              </div>
            </div>
            <div class="card bg-light">
              <div class="card-body text-center">
                  <img src="{{asset('cards/walk_about.png')}} " width="200" height="200" alt="">
                <p class="card-text">Walk about</p>
                <p> # 3700.00</p>
              </div>
            </div>
            <div class="card bg-light">
              <div class="card-body text-center">
                    <img src="{{asset('cards/gionee.jpg')}} " width="200" height="200" alt="">          
                <p class="card-text">Gionee f106 </p>
                <p> # 39500.00</p>
              </div>
            </div>
           
          
        
          </div>
@endsection
