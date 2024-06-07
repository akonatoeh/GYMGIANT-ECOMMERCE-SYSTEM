<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
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