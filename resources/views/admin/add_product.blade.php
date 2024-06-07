<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -1%;
            margin-left: auto; /* Center horizontally */
            margin-right: auto; /* Center horizontally */
            border: 2px solid orange; /* Change border color to yellow */
            border-radius: 5px; /* Add rounded corners */
            padding: 20px; /* Add padding for space inside the border */
            background-color: #f0f0f0; /* Add background color */
            width: 700px; /* Set width to create a compact box */
        }
    
        h1 {
            color: black; /* Change color */
            text-align: center; /* Center align */
            margin-bottom: 20px; /* Add margin for space below */
        }
    
        label {
            display: inline-block;
            width: 180px;
            font-size: 18px!important;
            color: black!important; /* Change color */
            margin-bottom: 10px; /* Add margin for space between elements */
        }
    
        input[type='text'] {
            width: calc(100% - 20px); /* Calculate width to fit inside container with padding */
            height: 50px;
            margin-bottom: 10px; /* Add margin for space between elements */
            border-radius: 5px; /* Add rounded corners */
            border: 1px solid #ccc; /* Add border */
            padding: 10px; /* Add padding */
        }
    
        textarea {
            width: calc(100% - 20px); /* Calculate width to fit inside container with padding */
            height: 80px;
            margin-bottom: 10px; /* Add margin for space between elements */
            border-radius: 5px; /* Add rounded corners */
            border: 1px solid #ccc; /* Add border */
            padding: 10px; /* Add padding */
        }
    
        .input_deg 
        {
            padding: 15px;
        }
        
    </style>
    
  </head>
  <body>
    
    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="color: orange">Add Product</h1>

            <div class="div_deg">

                <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="input_deg">
                        <label>Product Title</label>
                        <input type="text" name="title" required>
                    </div>

                    <div class="input_deg">
                        <label>Description</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div class="input_deg">
                        <label>Price</label>
                        <input type="text" name="price">
                    </div>

                    <div class="input_deg">
                        <label>Quantity</label>
                        <input type="number" name="qty">
                    </div>

                    <div class="input_deg">
                        <label>Product Category</label>

                        <select name="category" required>

                            <option>Select a Option</option>

                            @foreach ($category as $category)
                                
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="input_deg">
                        <label>Product Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="input_deg">
                        
                        <input class="btn btn-warning" type="submit" value="Add Product">
                    </div>

                </form>

            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
