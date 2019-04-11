  {{-- nav2 --}}
  <ul class="nav nav-tabs bg-dark " style="">
    <li class="nav-item">
      <a class="nav-link text-white " href="{{route('fashion')}} ">Fashion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('phone')}} ">Phones and Tablets</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('personal_services')}} ">personal Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('baby_toys')}} ">Toys</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('computers')}} ">Computers and Accessories</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('kitchen')}} ">Home and kitchen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{route('cart_index')}} ">
          <i class="fa fa-shopping-cart" style="font-size:48px;color:red"></i>
          <span class="badge">{{Cart::instance('default')->count()}} </span></a>
      </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('electronics')}} ">Electronics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('personal_services')}} ">Personal Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('personal_services')}} ">Wine and other categories</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('personal_services')}} ">Houses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('personal_services')}} ">Food</a>
    </li>
    
   
  </ul>
  <div style="float:inherit; padding-top:10px;">  <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></div>