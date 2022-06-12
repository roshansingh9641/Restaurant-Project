<!DOCTYPE html>
<html lang="en">
<head>

        <base href="/public">

     <title>Eatery Cafe and Restaurant Template</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Eatery <span>.</span> Cafe</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Chef</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         <li class="smoothScroll" style="background-color: red;">
                              
                         @auth

                         <a href="{{url('/showcart',Auth::user()->id)}}">
                         Cart{{$count}}

                         </a>


                         @endauth


                         @guest

                         Cart[0]

                         @endguest
                    </a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                         <a href="#footer" class="section-btn">Reserve a table</a>
                         <li>
                         @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       <li> <x-app-layout>
    
                            </x-app-layout>
                       </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                         </li>
                    </ul>
               </div>

          </div>
     </section>


<div >
    

     <table align="center" bgcolor="yellow">

            <tr>
                <div style="padding: 30px;">Cart Table</div>
                <th style="padding: 30px;">Food Name</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Quantity</th>
                <th style="padding: 30px;">Action</th>



            </tr>

<form action="{{url('orderconfirm')}}" method="POST" >

@csrf


            @foreach($data as $data)

            <tr align="center">

                <td>
                <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">     
                {{$data->title}}</td>
                <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                <td>{{$data->price}}</td>
                <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                <td>{{$data->quantity}}</td>
                

            </tr>

@endforeach




@foreach($data2 as $data2)

<tr style="position:  relative; top: -60px;  right: -360px; ">

<td>
    
<a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a></td>

</tr>

@endforeach

     </table>

<div  align="center" style="padding: 10px;">

<button class="btn btn-primary"  type="button" id="order">Order Now </button>


</div>



<div id="appear" align="center" style="padding: 30px; display: none">
          <div style="padding: 10px;">
               <label>Name</label>
               <input type="text" name="name" placeholder="Name">

          </div>

          <div style="padding: 10px;">
               <label>Phone</label>
               <input type="number" name="phone" placeholder="Phone Number">

          </div>

          <div style="padding: 10px;">
               <label>Address</label>
               <input type="text" name="address" placeholder="Address">

          </div>

          <div style="padding: 10px;">
              
               <input class="btn btn-success" type="submit" value="Order Confirm">

               <button id="close" type="button" class="btn btn-danger">Close</button>

          </div>

</div>

</form>


</div>

<script type="text/javascript">

     $("#order").click(
          function()
          {
               $("#appear").show();

          }

     );

     $("#close").click(
          function()
          {
               $("#appear").hide();

          }

     );


</script>


          <!-- SCRIPTS -->
          <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>