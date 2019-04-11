@extends('layouts.app')
@section('content')

    {{-- errors stored in a session  --}}
<div class="cart-section container text-center">
    <div>
        @if (session()->has('success_message'))
        <div class="alert alert-success">{{session()->get('success_message')}} </div>
            
        @endif

        @if (count($errors)>0)
        <div class="alert alert-danger text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>

        </div>
            
        @endif
    </div>
    {{--  notification for total amount in cart. --}}
    @if (Cart::count() > 0)
    <h5 class="text-center text-white bg-success">{{Cart::count()}} item(s) in shopping cart. </h5>
        
   
</div>


<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                           {{-- upddate cart content --}}
            @foreach (Cart::content() as $item)
                <tr>
                    <td>  <a href="{{route('product_view',$item->model->slug)}} "><img src="{{asset('product/'.$item->model->slug.'.jpg')}} " width="50"  height="50"/></a>  </td> 
                    <td>{{$item->model->name}} </td>
                    <td>{{$item->model->details}} </td>
                    <td>
                    <select class="quantity text-right">
                    <option selected="">1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                    <option >5</option>
                </select>
                {{-- save for leter form link --}}
                <form action="{{route('saveForLater',$item->rowId)}}  " method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-sm" type="submit"> save for later</button>
                </form>
                    </td> 

                    <td class="text-right">  ₦ {{$item->model->presentPrice()}} </td>  

                                          {{-- delete product form --}}
                      <td><form action="{{route('cart_destory',$item->rowId)}} " method="POST">
                            {{method_field('DELETE')}}
                        @csrf
                       
                        <div class="text-right">
                             <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </div>  
                    </td>
                </form> 
                {{-- end of delete form --}}
                        </tr>
                        @endforeach                      
        @else 
        <h5 class=" text-center  ">No item in your cart </h5>
        @endif
          
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">₦ {{Cart::subtotal()}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">₦{{Cart::tax()}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>₦ {{Cart::total()}} </strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
         
        </div>
       
      
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-md btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

            {{-- save for later  --}}
            <div class="container">

            @if (Cart::instance('saveForLater')->count() > 0)
            <h5 class="text-center bg-info text-white">{{Cart::instance('saveForLater')->count()}} item(s) saved for letter</h5>
                
            <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-right">Price</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                       {{-- upddate cart save for letter --}}
                        @foreach (Cart::instance('saveForLater')->content() as $item)
                      
                           
                      
                            <tr>
                                <td>  <a href="{{route('product_view',$item->model->slug)}}"><img src="{{asset('product/'.$item->model->slug.'.jpg')}} " width="50"  height="50"/></a>  </td> 
                                <td>{{$item->model->name}} </td>
                                <td>{{$item->model->details}} </td>
                                <td>
                                <select class="quantity text-right">
                                <option selected="">1</option>
                                <option >2</option>
                                <option >3</option>
                                <option >4</option>
                                <option >5</option>
                            </select>
                            {{-- move to cart form --}}
                             {{-- save for leter form link --}}
                <form action="{{route('saveForLater',$item->rowId)}}  " method="POST">
                        {{ csrf_field() }}
                      
                        <button class="btn btn-sm" type="submit"> move to cart</button>
                    </form>
                                </td>  
            
                                <td class="text-right"> ₦ {{$item->model->presentPrice()}} </td>                          
                                
                                  <td>
                                      <form action=" " method="POST">
                                        {{method_field('DELETE')}}
                                    @csrf
                                   
                                    <div class="text-right">
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </div>  
                                </td>
                            </form> 
                            {{-- end of delete form --}}
                                    </tr>
                                    @endforeach
                    
                                </tbody>
                            </table>
                        </div>
                         
                        @else
                            <h5 class="text-center  "> no item saved for letter. </h5>
                        @endif
                    </div>
                        

            {{-- end of save for later --}}


        
{{-- Trending product --}}
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6>Might also like...</b></h6>
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
    </div>
@endsection