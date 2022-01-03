@extends('layouts.layout')

@section('content')
<main class="page-content">
            <!-- Breadcrumbs & Page title-->
            <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                <div class="shell shell-fluid">
                    <div class="range range-condensed">
                        <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                            <p class="h3 text-white">Menu</p>
                            <ul class="breadcrumbs-custom offset-top-10">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Menu</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-50 section-sm-100">
                <div class="shell">
                    <div class="range range-xs-center">   
                    <div>
                        <div class="img-wrapper">
                          <a href="{{url('pizza')}}">
                             <img class="inner-img" src="https://static.toiimg.com/thumb/56933159.cms?imgsize=686279&width=800&height=800" />
                          </a>  
                        </div>
                        <h5>Pizza</h5>
                    </div>
                    <div>
                        <div class="img-wrapper">
                          <a href="{{url('desset')}}">
                             <img class="inner-img" src="https://media.istockphoto.com/photos/fresh-cakes-picture-id497959594?k=20&m=497959594&s=612x612&w=0&h=Pzq7lXr-_J2p9aNEio4QrV3pquWUr4TIAu3yRMqeV_E=" style=" width: 350px;
  height: 380px;
  object-fit: cover;"/>
                          </a>  
                        </div>
                        <h5>Desserts</h5>
                    </div>
                    <div>
                        <div class="img-wrapper">
                          <a href="{{url('hotsips')}}">
                             <img class="inner-img" src="https://imgk.timesnownews.com/story/Hot1.png?tr=w-1200,h-900" style=" width: 350px;
  height: 380px;
  object-fit: cover;"/>
                          </a>  
                        </div>
                        <h5>Hotsips</h5>
                    </div>
                    <div>
                        <div class="img-wrapper">
                          <a href="{{url('sandwich')}}">
                             <img class="inner-img" src="https://static.toiimg.com/thumb/54714340.cms?width=1200&height=900" style=" width: 350px;
  height: 380px;
  object-fit: cover;"/>
                          </a>  
                        </div>
                        <h5>Sandwich</h5>
                    </div>
                    <div>
                        <div class="img-wrapper">
                          <a href="{{url('juice')}}">
                             <img class="inner-img" src="https://southwestvending.com/blog/wp-content/uploads/2018/03/AdobeStock_166731373.jpg" style=" width: 350px;
  height: 380px;
  object-fit: cover;"/>
                          </a>  
                        </div>
                        <h5>Juice & Snacks</h5>
                    </div>
                    <div>
                        <div class="img-wrapper">
                          <a href="{{url('munchies')}}">
                             <img class="inner-img" src="https://bsfseeds.com/uk/wp-content/uploads/sites/8/2021/08/%C2%BFQue-son-los-munchies-y-como-funcionan-Principal-1024x640.jpg" style=" width: 350px;
  height: 380px;
  object-fit: cover;"/>
                          </a>  
                        </div>
                        <h5>Munchies</h5>
                    </div>
                    


                    </div>
                    <div class="offset-top-50 offset-sm-top-100 text-center divider-custom">
                        <div><a href="#" class="btn btn-md btn-shape-circle btn-primary-lighter">download full menu</a></div>
                    </div>
                </div>
            </section>
            <section>
                <!-- RD Parallax-->
                <div data-on="false" data-md-on="true" class="rd-parallax rd-parallax-light">
                    <div data-speed="0.2" data-type="media" data-url="images/parallax-02.jpg" class="rd-parallax-layer"></div>
                    <div data-speed="0.05" data-type="html" class="rd-parallax-layer">
                        <div class="shell section-80 section-sm-130">
                            <div class="range range-xs-center range-lg-bottom">
                                <div class="cell-md-9">
                                    <div class="group-sm">
                                        <h3 class="text-baseline">Fast Delivery</h3>
                                        <div class="group-sm offset-top-15 offset-lg-top-0">
                                            <hr class="hr divider-xs bg-primary-lighter text-top veil reveal-lg-inline-block">
                                            <p class="big offset-lg-top-0 text-top">Enjoy our free, fast, and reliable delivery service.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-lg-3"><a href="#" class="btn btn-shape-circle btn-white-outline btn-min-width-md">Learn more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection