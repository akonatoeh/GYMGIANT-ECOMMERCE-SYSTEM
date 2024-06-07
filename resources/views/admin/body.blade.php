<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
  <title>Dashboard</title>
  <style>
    .statistic-block {
      background: #fff;
      border: 2px solid orange;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 10px rgba(225, 136, 12, 0.1);
    }
    .statistic-block .icon {
      font-size: 2em;
      color: black;
    }
    .statistic-block .title {
      display: flex;
      align-items: center;
      font-size: 1.2em;
      color: black;
    }
    .statistic-block .title strong {
      margin-left: 10px;
    }
    .statistic-block .number {
      font-size: 2em;
      font-weight: bold;
    }
    .progress-template {
      height: 10px;
      margin-top: 10px;
      background: #e9ecef;
      border-radius: 5px;
    }
    .progress-bar-template {
      border-radius: 5px;
    }
    .dashbg-1 { background-color: #ff6384; }
    .dashbg-2 { background-color: #36a2eb; }
    .dashbg-3 { background-color: #ffce56; }
    .dashbg-4 { background-color: #4bc0c0; }
    .footer {
      background: #f8f9fa;
      padding: 10px 0;
      position: fixed;
      width: 100%;
      bottom: 0;
    }

    section
    {
      padding-top: 50px;
      padding-bottom: 50px;
      border-bottom: 2px solid orange;
    }
  </style>
</head>
<body>

<header class="header" style="border-bottom: 2px solid orange ">
  <div class="container-fluid">
    <h2 class="h1 no-margin-bottom" style="color: orange">Dashboard</h2>
  </div>
</header>

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fas fa-users"></i></div><strong>Clients</strong>
            </div>
            <div class="number dashtext-1">{{$user}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fas fa-boxes"></i></div><strong>Total Products</strong>
            </div>
            <div class="number dashtext-2">{{$product}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fas fa-shopping-cart"></i></div><strong>Total Orders</strong>
            </div>
            <div class="number dashtext-3">{{$order}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fas fa-truck"></i></div><strong>Total Delivered</strong>
            </div>
            <div class="number dashtext-4">{{$delivered}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
