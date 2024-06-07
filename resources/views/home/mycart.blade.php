<!DOCTYPE html>
<html>

<head>
  
@include('home.css')

<style type="text/css">

.div_deg
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 60px;
}

table
{
    border: 2px solid orange;
    text-align: center;
    width: 800px;
}

th
{
    border: 2px solid orange;
    text-align: center;
    color: black;
    font: 20px;
    font-weight: bold;
    background-color: grey;
}

td
{
    border: 3px solid orange;
}

.cart_value
{
    text-align: center;
    margin-bottom: 70px;
    margin-left: 600px;
    padding: 18px;
}

.order_deg
{
    border: 2px solid orange;
    text-align: center;
    color: white;
    font: 20px;
    font-weight: bold;
    background-color: grey;
    margin-right: 200px;
}

label
{
    display: inline-block;
    width: 150px;
}

.div_gap
{
    padding: 20px;
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
   
  </div>
  
<div class="div_deg"> 

    <div class="order_deg">

        <form action="{{url('confirm_order')}}" method="Post">
            @csrf
            <div class="div_gap">
                <label>Receiver Name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>

            <div class="div_gap">
                <label>Receiver Address</label>
                <textarea name="address">{{Auth::user()->address}}</textarea>
            </div>

            <div class="div_gap">
                <label>Receiver Phone</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>

            <div class="div_gap">
                <input class="btn btn-warning" type="submit" value="Place Order">
            </div>
        </form>

    </div>

    <table>

        <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>

        <?php

        $value = 0;

        ?>

        @foreach ($cart as $cart)
             
        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td>
                <img width="100" src="/products/{{$cart->product->image}}">
            </td>

            <td>
                <a class="btn btn-warning" onclick="confirmation(event)" href="{{url('delete_cart', $cart->id)}}">Delete</a>

            </td>
            

        </tr>

        <?php 

        $value = $value + $cart->product->price;

        ?>

        @endforeach
    </table>
</div> 

<div class="cart_value">
    <h3>Total Value of Cart is: ${{$value}}</h3>
</div>

  @include('home.footer')

</body>

</html>