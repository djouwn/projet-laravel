<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PRIMAPOI</title>
    <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" type="text/css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   
</head>
<body>
   @include('header')
 
    <div class="container">
        <span class="slider" id="slider1"></span>
        <span class="slider" id="slider2"></span>
        <span class="slider" id="slider3"></span>
        <span class="slider" id="slider4"></span>
        <span class="slider" id="slider5"></span>
        <span class="slider" id="slider6"></span>
        <span class="slider" id="slider7"></span>

        <div class="imgContainer">

           <div class="slide_div" id="slide_1">
            <img src="https://img.freepik.com/free-photo/white-sneakers-woman-model_53876-97149.jpg?t=st=1722813452~exp=1722817052~hmac=f993ddd3e59c4d331214090b62687d3657e3a2b12159e9f200b18016a9c73c33&w=740" alt="" class="img" id="img1">
            <a href="#slider1" class="button" id="button1"></a>
           </div>
           <div class="slide_div" id="slide_2">
            <img src="https://img.freepik.com/free-photo/woman-legs-pink-pants-up-air_53876-88431.jpg?t=st=1722813494~exp=1722817094~hmac=ec63f6cf99d591e836b01a7fb1e6208dccc1d916b807e3761e71431b4b3d77d7&w=740" alt="" class="img" id="img2">
            <a href="#slider2" class="button" id="button2"></a>
           </div>
           <div class="slide_div" id="slide_3">
            <img src="https://img.freepik.com/free-photo/man-brown-suede-sneakers_53876-96611.jpg?t=st=1722813531~exp=1722817131~hmac=c3931a35b3c081468d7d133ecbc762551a39de998cef7655258b2968fcc0321f&w=740" alt="" class="img" id="img3">
            <a href="#slider3" class="button" id="button3"></a>
           </div>
           <div class="slide_div" id="slide_4">
            <img src="https://img.freepik.com/free-photo/teenager-with-skateboard_144627-9918.jpg?t=st=1722813860~exp=1722817460~hmac=95995e2a8bc9e566b04d7331885465f4250ce2126ed9cd41509fbd79b10f4574&w=740" alt="" class="img" id="img4">
            <a href="#slider4" class="button" id="button4"></a>
           </div>
           <div class="slide_div" id="slide_5">
            <img src="https://img.freepik.com/free-photo/young-handsome-man-choosing-shoes-shop_1303-19731.jpg?t=st=1722813656~exp=1722817256~hmac=b3c898aa54ba3c571937a059194de9180cfc1fe8a0ab612e418843bfdff97d4a&w=740" alt="" class="img" id="img5">
            <a href="#slider5" class="button" id="button5"></a>
           </div>
           <div class="slide_div" id="slide_6">
            <img src="https://img.freepik.com/free-photo/romantic-young-female-short-festive-black-evening-dress-posing-gray-studio-background-with-copy-space-ad_132075-10045.jpg?t=st=1722813735~exp=1722817335~hmac=428d0f817413768ac55a50dd9e0cfa8c90e51825be339e24a46f73b6c10a4ba5&w=740" alt="" class="img" id="img6">
            <a href="#slider6" class="button" id="button6"></a>
           </div>
           <div class="slide_div" id="slide_7">
            <img src="https://img.freepik.com/free-photo/still-life-say-no-fast-fashion_23-2149669602.jpg?t=st=1722813810~exp=1722817410~hmac=11c731adaf67e58c96ffa45ec96ccdc0d254e927750521f1ff11c0d7e1a84e04&w=740" alt="" class="img" id="img7">
            <a href="#slider7" class="button" id="button7"></a>
           </div>

        </div>
        
    </div>
    <center><h1>
    Shoes That Makes You Moove</h1>
  
    <div class="slide_div small-screen-only" id="slide_5">
    <img src="https://img.freepik.com/free-photo/young-handsome-man-choosing-shoes-shop_1303-19731.jpg?t=st=1722813656~exp=1722817256~hmac=b3c898aa54ba3c571937a059194de9180cfc1fe8a0ab612e418843bfdff97d4a&w=740" alt="" class="img" id="img5">
  
</div>

<div class="meupsider">
    <center>
        <p style="color:white;">Feel the Rhythm, Embrace the Journey!</p></center>
   
    </center>
    </div>
    <br><br>
    
    <center><h2>Explore our products</h2></center>
    <div class="parent-container">
    @foreach($products as $product)
            <div class="child-container">
                <div id="discount-container"style="margin-bottom:6px;">
                    
                <center> 
                <p style="color:white;">-{{ round(($product->discount /$product->price)*100,0) }}%</p></center> 
                <p>{{$product->price}}</p>
            </div>  
               <a href="/login"> <img src="{{ $product->image }}" alt="{{ $product->name }}"></a>
           <center>    <p style="font-weight:bold;font-size:18px;text-decoration:none;">{{$product->name}}</p></center> 
           
           <center>    <p style="font-weight:thin;font-size:13px;padding:10px;color:black;text-decoration:none;">{{$product->description}}</p></center> 
            </div>
            
        @endforeach
     
</div>
<div style="float: left; width: 50%;width: 90px;height: 80px;background-color:black;color:white;margin-left: 42px;"id="hidden">
    <br><br><br>
      <center>  MAN </center>
    </div>
    
    <div style="float: left;font-weight:bold; width: 50%;width: 160px;height: 300px;background-color:white;margin-left: 50px;margin-bottom:50px;"id="hidden">
<center>  <p> Stride with Confidence. <br> <br>Conquer with <br> Style</p>
<img src="{{ asset('assets/images/primapoi.png') }}" style="width:130px; height:130px;" alt="description of myimage">
</center> 
    </div>
   <br>
<center>

    <a href="/login">
<button style="color:white; background-color:black;width:300px;height:50px;">
         <p style="font-weight:bold;text-decoration:none;font-size:14px;" id="shop-now">SHOP NOW</p>
        </button></a></center>

        <br><br>
         
   @include('footer')





 
</body>
</html>
