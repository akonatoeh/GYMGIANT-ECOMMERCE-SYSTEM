<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @include('home.css')

    <style type="text/css">
    
    .div_center
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table
    {
      border: 3px solid orange;
      text-align: center;
      width: 800px;
    }

    th
    {
      border: 3px solid orange;
      background-color: white;
      color: black;
      font-size: 19px;
      font-weight: bold;
      text-align: center;
    }

    td
    {
      border: 3px solid orange;
      padding: 10px;
    }
    
    
    </style>
</head>

    <body>
        <div class="hero_area">
          
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
                    <li class="nav-item">
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

          <div class="div_center">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>

                @foreach ($order as $order)

                <tr>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>{{$order->status}}</td>
                <td>
                  <img height="200" width="200" src="products/{{$order->product->image}}" alt="">
                </td>
                </tr>

                @endforeach
            </table>
          </div>
        </div>


  @include('home.footer')

</body>
</html>