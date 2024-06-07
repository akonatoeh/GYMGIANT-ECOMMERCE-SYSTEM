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
              <li class="nav-item">
                <a class="nav-link" href="{{url('about_us')}}">
                  About Us
                </a>
              </li>
              <li class="nav-item active">
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
            <h1>Privacy Policy of GYMGIANT</h1>
            <p>At GYMGIANT, we are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and protect your personal information when you visit our website and use our services.</p>
            
            <h2>Information We Collect</h2>
            <ul>
              <li><strong>Personal Information:</strong> When you make a purchase or create an account, we collect personal information such as your name, email address, shipping address, and payment information.</li>
              <li><strong>Usage Data:</strong> We collect information on how you access and use our website, including your IP address, browser type, and the pages you visit.</li>
              <li><strong>Cookies:</strong> Our website uses cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings.</li>
            </ul>
            
            <h2>How We Use Your Information</h2>
            <ul>
              <li><strong>To Process Orders:</strong> We use your personal information to process and fulfill your orders, including shipping and billing.</li>
              <li><strong>To Improve Our Services:</strong> We analyze usage data to improve our website, products, and services.</li>
              <li><strong>To Communicate With You:</strong> We use your contact information to send order updates, promotional offers, and respond to your inquiries.</li>
            </ul>
            
            <h2>How We Protect Your Information</h2>
            <ul>
              <li><strong>Data Security:</strong> We implement a variety of security measures to protect your personal information, including encryption and secure servers.</li>
              <li><strong>Access Control:</strong> Access to your personal information is restricted to authorized personnel only.</li>
            </ul>
            
            <h2>Sharing Your Information</h2>
            <ul>
              <li><strong>Third-Party Service Providers:</strong> We may share your information with third-party service providers who assist us in operating our website and conducting our business.</li>
              <li><strong>Legal Requirements:</strong> We may disclose your information if required by law or in response to valid requests by public authorities.</li>
            </ul>
            
            <h2>Your Rights</h2>
            <ul>
              <li><strong>Access and Update:</strong> You have the right to access and update your personal information at any time by logging into your account.</li>
              <li><strong>Opt-Out:</strong> You can opt-out of receiving promotional emails by following the unsubscribe link in any email we send you.</li>
            </ul>
            
            <p>Thank you for trusting GYMGIANT with your personal information. We are committed to protecting your privacy and ensuring a safe and secure shopping experience.</p>
          </div>

  </div>

  @include('home.footer')

</body>

</html>
