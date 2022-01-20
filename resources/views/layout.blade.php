<html>
<head>
    <title>Producten</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body style="font-family: 'Raleway', sans-serif; letter-spacing: 1px;">

<main class=" pb-5">
   <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">   
      <a class="navbar-brand" href="#">Home</a>
      <div class="main-section">
            <div class="dropdown container-fluid">
                <button  type="button" class="btn btn-light" data-toggle="dropdown">
                    <i  class="fa fa-shopping-cart" aria-hidden="true"></i> Winkelmand <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu ">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6 ">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span> 
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['serienummer'] * $details['aantal'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6     total-section text-left">
                            <p> <span class="text-info">     {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 pl-4 cart-detail-img">
                                    <img class="img-fluid" src="{{ $details['image'], $details['serienummer'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['serienummer'] }}</span> <span class="count"> Quantity:{{ $details['aantal'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row ">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary mt-3">Bekijk winkelmand</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
  
      
</div>

    </main >
  
<div class="container">
    <div class="row">
        
  
<br/>
<div class="container">
  
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
  
    @yield('content')
</div>
  
@yield('scripts')


<script>
        gsap.from('.container', {{}
            opacity: 0, duration: 1, delay: 1.7, y: 30, stagger: 0.2,
        })
     
      gsap.from('button', {opacity: 0, duration: 1, delay: 1.7, y: 40, stagger: 0.2,})

      gsap.to('h3, p, h2 ', {opacity: 1, duration: 1, delay: 2.1,  stagger: 0.2,})
          gsap.to('h2', {opacity: 1, duration: 1, delay: 1.1,  stagger: 0.2,})
    
    </script>
     
</body>
</html>