 <!-- MENU-->
 <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Tea Time &amp; Dining</h4>
                         </div>
                    </div>
                         @foreach($data as $data)

                         <form action="{{url('/addcart',$data->id)}}" method="post">

                              @csrf

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              
                                   <img src="foodimage/{{$data->image}}" class="img-responsive" alt="">
                                           
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>{{$data->title}}</h3>
                                             <p>{{$data->description}}</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>{{$data->price}}</span>
                                        </div>
                                   </div>

                                   
                                   <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  text-align: center;
  color: black;
}

</style>
</head>
<body>
<div class="container">


                       <div>      
                              <b>     <input style="color:blue;" type="number"  name="quantity" min="1" value ="1" style="width: 50px">
                                  <input style="color:blue;" type="submit"  value="add cart"></b>

                                  </div> 
                                  </div>

</body>
</html>
                              </a>

                              
                         </div>
                    </div>
                    
                          </form>

                    @endforeach

                    <div class="col-md-4 col-sm-6">
                      


               </div>
          </div>
     </section>