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
              <li class="nav-item">
                <a class="nav-link" href="{{url('why_us')}}">
                  Why Us
                </a>
              </li>
              <li class="nav-item active">
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
        <h1>About GYMGIANT</h1>
        <p>Welcome to GYMGIANT, your premier destination for top-of-the-line gym equipment. We are dedicated to helping you achieve your fitness goals by providing the best products and services in the industry. Here’s more about who we are and what we stand for:</p>
        <ul>
          <li><strong>Our Mission:</strong> To empower individuals and fitness facilities by providing high-quality, durable, and effective gym equipment that meets the diverse needs of our customers.</li>
          <li><strong>Our Vision:</strong> To be the leading supplier of gym equipment globally, known for our commitment to quality, innovation, and customer satisfaction.</li>
          <li><strong>Our Values:</strong> Integrity, Excellence, Innovation, and Customer Focus. We believe in building strong relationships with our customers based on trust and reliability.</li>
          <li><strong>Our History:</strong> Established in 2005, GYMGIANT has grown from a small local business to an international brand, known for our extensive range of gym equipment and exceptional customer service.</li>
          <li><strong>Our Team:</strong> Our team consists of experienced professionals passionate about fitness and dedicated to helping you find the perfect equipment to match your fitness goals.</li>
          <li><strong>Community Engagement:</strong> We are committed to giving back to the community by supporting local fitness initiatives and promoting a healthy lifestyle through various programs and sponsorships.</li>
        </ul>
        <p>Thank you for choosing GYMGIANT. We look forward to helping you on your fitness journey. Join us today and experience the GYMGIANT difference!</p>
    </div>

  </div>

  @include('home.footer')

</body>

</html>
