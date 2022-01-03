@extends('layouts.layout')

@section('content')
<main class="page-content">
            <!-- Breadcrumbs & Page title-->
            <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                <div class="shell shell-fluid">
                    <div class="range range-condensed">
                        <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                            <p class="h3 text-white">Juice & Snacks</p>
                            <ul class="breadcrumbs-custom offset-top-10">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Categories</a></li>
                                <li class="active">Pizza</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery grid-->
            <section class="section-50 section-sm-80">
   <div class="shell isotope-wrap">
      <div class="range range-sm-center">
         <div class="cell-xs-12 offset-top-40">
            <!-- Isotope Content-->
            @foreach($juices as $item)
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                              <a href="{{$item['gallery']}}" data-photo-swipe-item="" data-size="1200x800" class="thumbnail thumbnail-variant-1">
                                 <figure style="height:280px">
                                   <img src="{{$item['gallery']}}" alt="" width="370" height="278" class="img-boxed" />
                                 </figure>
                                 <div class="caption">
                                    <h5>{{$item['name']}}</h5>
                                    <hr class="hr divider-xs bg-white" />
                                    <p>{{$item['description']}}</p>
                                    <svg x="0px" y="0px" width="35px" height="35px" viewbox="0 0 127.725 127.65">
                                       <g>
                                          <defs>
                                             <rect y="0" width="127.725" height="127.65" class="SVGID_1"></rect>
                                          </defs>
                                          <clippath class="SVGID_2_">
                                             <use xlink:href=".SVGID_1_" overflow="visible"></use>
                                          </clippath>
                                          <path clip-path="url(.SVGID_2_)" d="M58.613,117.275h-0.004c-15.646-0.001-30.359-6.09-41.43-17.141    C-5.702,77.289-5.73,40.088,17.115,17.208C28.193,6.112,42.93,0,58.61,0c15.645,0,30.358,6.089,41.43,17.142    c22.881,22.845,22.91,60.045,0.065,82.927C89.027,111.165,74.29,117.275,58.613,117.275 M58.61,5.235    c-14.28,0-27.701,5.565-37.79,15.672C0.014,41.744,0.041,75.623,20.879,96.427c10.082,10.067,23.482,15.612,37.731,15.612h0.003    c14.278,0,27.697-5.564,37.788-15.669c20.805-20.838,20.778-54.717-0.059-75.522C86.258,10.781,72.858,5.235,58.61,5.235"></path>
                                          <path clip-path="url(.SVGID_2_)" d="M125.108,127.65c-0.669,0-1.339-0.255-1.85-0.766l-26.855-26.812    c-1.023-1.022-1.024-2.678-0.002-3.702c1.02-1.024,2.678-1.025,3.701-0.003l26.856,26.812c1.022,1.022,1.023,2.68,0.001,3.702    C126.449,127.394,125.779,127.65,125.108,127.65"></path>
                                          <path clip-path="url(.SVGID_2_)" d="M58.636,96.435c-1.444,0-2.616-1.171-2.617-2.615l-0.054-70.361    c-0.002-1.445,1.17-2.618,2.615-2.618h0.002c1.445,0,2.617,1.17,2.618,2.614l0.054,70.361c0.001,1.445-1.17,2.618-2.616,2.619    H58.636z"></path>
                                          <path clip-path="url(.SVGID_2_)" d="M23.428,61.283c-1.444,0-2.616-1.17-2.617-2.615    c-0.002-1.447,1.169-2.618,2.615-2.619l70.36-0.056h0.002c1.446,0,2.617,1.171,2.618,2.615c0.001,1.446-1.169,2.618-2.616,2.62    l-70.36,0.055H23.428z"></path>
                                       </g>
                                    </svg>
                                 </div>
                              </a>
                              <h5>₹ {{$item['price']}}</h5>
                              <button class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20" style="margin-bottom:25px">Add To Cart</button>  
                                                                              <!-- <a href="#" data-caption-animate="fadeInUpSmall" data-caption-delay="800" class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20">Add to Cart</a> -->


                           </div>
                          
                           <input type="hidden" value="{{$item['id']}}" name="id">
                        <input type="hidden" value="{{$item['name']}}" name="name">
                        <input type="hidden" value="{{$item['price']}}" name="price">
                        <input type="hidden" value="{{$item['gallery']}}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                       
                                                                                                      <!-- <a href="#" data-caption-animate="fadeInUpSmall" data-caption-delay="800" class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20">Add to Cart</a> -->

                    </form>
            
            
         @endforeach
      </div>
   </div>
   </div>
   </div>
</section>

        </main>
@endsection