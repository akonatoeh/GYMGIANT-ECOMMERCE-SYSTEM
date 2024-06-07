<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .content {
      max-width: 1900px;
      margin: 0 auto;
      padding: 40px;
      background-color: white; /* Light orange background */
      border: 2px solid #f97316; /* Border color */
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .content h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 20px;
    }

    .content p,
    .content ul {
      font-size: 1rem;
      color: #666;
      line-height: 1.6;
    }

    .content ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    .content li {
      margin-bottom: 10px;
    }

    .content a {
      color: #f97316;
      text-decoration: underline;
    }

    .content a:hover {
      color: #ea580c;
    }

    @media (max-width: 768px) {
      .content {
        padding: 20px;
      }
    }
  </style>
 
</head>


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
              <li class="nav-item active">
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

    <body>
    <div class="content">
      <h1>Why Choose Us?</h1>
      <p>At our gym equipment store, we pride ourselves on providing top-quality fitness equipment along with exceptional customer service. Here are a few reasons why you should choose us:</p>
      <ul>
        <li><strong>Wide Range of Products:</strong> We offer a diverse selection of gym equipment, catering to all fitness levels and preferences.</li>
        <li><strong>High-Quality Equipment:</strong> Our products are built to last, made from durable materials to withstand rigorous workouts.</li>
        <li><strong>Expert Advice:</strong> Our knowledgeable staff is here to help you find the right equipment for your fitness goals and provide expert advice on usage and maintenance.</li>
        <li><strong>Competitive Prices:</strong> We offer competitive prices on all our products, ensuring you get the best value for your money.</li>
        <li><strong>Convenient Shopping Experience:</strong> Shop online from the comfort of your home or visit our store for a hands-on experience. We strive to make your shopping experience hassle-free and enjoyable.</li>
        <li><strong>Customer Satisfaction:</strong> Your satisfaction is our priority. We are committed to providing excellent service and support to ensure you are fully satisfied with your purchase.</li>
      </ul>
      <p>Whether you're setting up a home gym or outfitting a commercial fitness facility, we have the equipment and expertise to meet your needs. Shop with us today and experience the difference!</p>
    </div>

  </div>

  @include('home.footer')

</body>

</html>
