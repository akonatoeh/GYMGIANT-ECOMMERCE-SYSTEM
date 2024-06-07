<!DOCTYPE html>
<html>

<head>
  
@include('home.css')

</head>

<body>
  <div class="hero_area">
    
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span style="font-size: 80px">
            GymGiant
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('shop')}}">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('why_us')}}">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about_us')}}">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('privacy_page')}}">
                Privacy Policy
              </a>
            </li>
          </ul>
          <div class="user_option">
  
            @if (Route::has('login'))
  
            @auth
  
            <a class="btn btn-warning" href="{{url('myorders')}}" style="font-weight: bold; color: black;">
              My Orders
            </a>
  
            <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-bag fa-2x" style="color: orange;" aria-hidden="true"></i>
              {{$count}}
            </a>
  
            <form style="padding: 15px" method="POST" action="{{ route('logout') }}">
              @csrf
  
             <input class="btn btn-warning" type="submit" value="Logout" style="font-weight: bold; color: black;">
          </form>
  
            @else
  
              <a href="{{url('/login')}}">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="{{url('/register')}}">
                  <i class="fa fa-vcard" aria-hidden="true"></i>
                  <span>
                    Register
                  </span>
  
                </a>
  
                @endauth
  
                @endif
  
                
  
            
      
          </div>
        </div>
      </nav>
    </header>
    
    

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Products
        </h2>
      </div>
      <div class="row">

        @foreach ($product as $products)
            
        
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{url('product_details',$products->id)}}">
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{$products->title}}</h6>
                <h6>Price:
                  <span style="color: orange">${{$products->price}}</span>
                </h6>
              </div>
            </a>
          </div>
          <div class="d-flex justify-content-center" style="padding: 5px">
                
            <a class="btn btn-warning" style="color: black;" href="{{url('add_cart',$products->id)}}">Add to Cart</a>
          </div>
        </div>
        
        @endforeach
      
      </div>
    </div>
  </section>

  <!-- end shop section -->


  <!-- contact section -->

  

  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')

</body>

</html>
