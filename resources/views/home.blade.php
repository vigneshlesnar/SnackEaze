@extends('layouts.layout')


@section('content')
<main class="page-content">
            <!-- Swiper variant 3-->
            <section class="bg-gray-darker">
                <div class="swiper-variant-1">
                    <div data-slide-effect="fade" data-min-height="600px" class="swiper-container swiper-slider">
                        <div class="swiper-wrapper">
                            <div data-slide-bg="images/home-slide-1-1920x800.jpg" class="swiper-slide">
                                <div class="swiper-slide-caption text-center">
                                    <div class="shell">
                                        <div class="range range-sm-middle">
                                            <div class="cell-sm-6 cell-md-5 cell-lg-4 text-uppercase">
                                                <div class="group-sm">
                                                    <div data-caption-animate="fadeInLeftSm" data-caption-delay="200" class="label-swiper h6 text-italic text-white"><span>Homely</span><span>Healthy And Tasty</span></div>
                                                    <h1 data-caption-animate="fadeInRightSm" data-caption-delay="100" class="text-italic text-white"></h1>
                                                </div>
                                                <h4 data-caption-animate="fadeInUpSmall" data-caption-delay="600" class="text-primary-lighter offset-top-5">Contact-less <br>&<br> On-Time Delivery @Door Step</h4>
                                                <!-- <a href="#" data-caption-animate="fadeInUpSmall" data-caption-delay="800" class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20"></a> -->
                                            </div>
                                            <div class="cell-sm-6 cell-md-7 cell-lg-8 text-lg-right veil reveal-sm-inline-block">
                                                <div style="position:relative;z-index:2;">
                                                    <div data-caption-animate="fadeInLeftSm" data-caption-delay="1500"><img src="{{asset('images/slide-caption-image-6-100x118.png')}}" alt="" width="100" height="118" class="img-caption-5 img-responsive veil reveal-lg-inline-block" />
                                                    </div>
                                                    <div data-caption-animate="fadeInRotate" data-caption-delay="100"><img src="{{asset('images/1.png')}}" alt="" width="599" height="596" class="img-responsive reveal-inline-block" />
                                                    </div>
                                                </div>
                                                <div data-caption-animate="fadeInRightSm" data-caption-delay="600" class="img-caption-1"><img src="{{asset('images/slide-caption-image-2-346x336.png')}}" alt="" width="346" height="336" class="img-responsive veil reveal-lg-inline-block" />
                                                </div>
                                                <div data-caption-animate="fadeInRightSm" data-caption-delay="900" class="img-caption-2"><img src="{{asset('images/slide-caption-image-3-228x310.png')}}" alt="" width="228" height="310" class=" img-responsive veil reveal-lg-inline-block" />
                                                </div>
                                                <div data-caption-animate="fadeInLeftSm" data-caption-delay="800" class="img-caption-3"><img src="{{asset('images/slide-caption-image-4-179x213.png')}}" alt="" width="179" height="213" class=" img-responsive veil reveal-lg-inline-block" />
                                                </div>
                                                <div data-caption-animate="fadeInLeftSm" data-caption-delay="1000" class="img-caption-4"><img src="{{asset('images/slide-caption-image-5-522x343.png')}}" alt="" width="522" height="343" class="img-responsive veil reveal-lg-inline-block" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-slide-bg="images/home-slide-2-1920x800.jpg" class="swiper-slide">
                                <div class="swiper-slide-caption slide-caption-2 text-center">
                                    <div class="shell">
                                        <div class="range range-sm-middle">
                                            <div class="cell-sm-6 cell-md-5 cell-lg-4">
                                                <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="100" class="text-italic font-secondary text-white">Touch-Free Cooking & Packing
</h5>
                                                <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="400" class="text-uppercase text-white offset-top-0">Contact-less  </h5>
                                                <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="700" class="text-white offset-top-0">&</h5>
                                                <h4 data-caption-animate="fadeInUpSmall" data-caption-delay="1000" class="text-primary-lighter offset-top-10">On-Time Delivery at Door Step</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-slide-bg="images/home-slide-3-1920x800.jpg" class="swiper-slide">
                                <div class="swiper-slide-caption text-uppercase text-center">
                                    <div class="shell">
                                        <div class="range range-sm-middle">
                                            <div class="cell-sm-6 cell-md-5 cell-lg-4">
                                                <div data-caption-animate="fadeInUpSmall" data-caption-delay="100" class="label-swiper label-swiper-var-2">
                                                    <h4 class="text-italic">Strict Safety Precautions</h4>
                                                </div>
                                                <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="400" class=" text-white">Contact-less & </h5>
                                                <h4 data-caption-animate="fadeInUpSmall" data-caption-delay="700" class="text-primary-lighter offset-top-0">On-Time Delivery at Door Step</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper Navigation-->
                        <div class="swiper-pagination-wrap">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-6 cell-md-5 cell-lg-4">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-50 section-sm-100">
                <div class="shell-wide">
                    <div class="range range-xs-center">
                        <div class="cell-sm-6 cell-md-4 view-animate zoomInSmall delay-04"><a href="menu-single.html" class="thumbnail-variant-3"><img src="images/index-01-566x401.jpg" alt="" width="566" height="401" class="img-responsive"/>
                  <div class="caption text-center">
                    <h3 class="text-italic">For Vegans</h3>
                    <p class="big">Burger + French Fries + Drink</p>
                  </div></a></div>
                        <div class="cell-sm-6 cell-md-4 view-animate zoomInSmall delay-06"><a href="menu-single.html" class="thumbnail-variant-3"><img src="images/index-02-566x401.jpg" alt="" width="566" height="401" class="img-responsive"/>
                  <div class="caption text-center">
                    <h3 class="text-italic">Order Online</h3>
                    <p class="big">Available Every Day 9:00–23:00</p>
                  </div></a></div>
                        <div class="cell-sm-6 cell-md-4 offset-sm-top-30 offset-md-top-0 view-animate zoomInSmall delay-02"><a href="menu-single.html" class="thumbnail-variant-3"><img src="images/index-03-566x401.jpg" alt="" width="566" height="401" class="img-responsive"/>
                  <div class="caption text-center">
                    <h3 class="text-italic">Cakes Specials</h3>
                    <p class="big">Every Friday Only ₹0.99</p>
                  </div></a></div>
                    </div>
                </div>
            </section>
            <section class="section-50 section-sm-top-80 section-sm-bottom-100 bg-gray-lighter">
                <h3>Our Menu</h3>
                <div class="responsive-tabs responsive-tabs-button responsive-tabs-horizontal responsive-tabs-carousel offset-top-40">
                    <ul class="resp-tabs-list">
                        <li>Hot Sips</li>
                        <li>Sandwich</li>
                        <li>Pizzas</li>
                        <li>Desserts</li>
                        <li>Fresh Juice & Snacks</li>
                        <li>Munchies</li>
                    </ul>
                    <div class="resp-tabs-container text-left">
                        <!--hamburger-->
                        <div>
                            <!-- Slick Carousel-->
                            <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-center-mode="true" data-center-padding="10" class="slick-slider slick-tab-centered">
                               
                            <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/1.png" alt="" width="310" height="160" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Mexican Burger</a></h5>
                                            <p class="text-italic">This Mexican-style burger is pumped up with flavor from chili powder, cilantro, and jalapeno pepper. Served on buns topped with lettuce.</p>
                                            <p class="price">12.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/menu-modern-3-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Mini Burger</a></h5>
                                            <p class="text-italic">Mini burgers, known by many as sliders, are the hottest little food trend sweeping the nation, with the half size of a classic burger.</p>
                                            <p class="price">10.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/menu-modern-2-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Classic Burger</a></h5>
                                            <p class="text-italic">Chicken beef cooked over charcoal and onions on the grill, hot pepper, lettuce, tomatoes, double American cheddar cheese sauce.</p>
                                            <p class="price">13.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/menu-modern-6-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">California Burger</a></h5>
                                            <p class="text-italic">Alfalfa sprouts crown these juicy burgers. A combination of regular ground turkey and ground turkey breast offers superior texture.</p>
                                            <p class="price">17.97</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/menu-modern-5-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Double Burger</a></h5>
                                            <p class="text-italic">Two signature flame-grilled beef patties topped with a simple layer of melted American cheese and crinkle cut pickles.</p>
                                            <p class="price">25.00</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/menu-modern-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Chicken Burger</a></h5>
                                            <p class="text-italic">Our Chicken Burger features a savory grilled chicken burger patty topped with juicy tomatoes, fresh lettuce, and mayonnaise.</p>
                                            <p class="price">9.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Toasts-->
                        <div>
                            <!-- Slick Carousel-->
                            <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-center-mode="true" data-center-padding="10" class="slick-slider slick-tab-centered">
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/toast-1-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Tomato Toast</a></h5>
                                            <p class="text-italic">Enjoy this amazing combination of cheese and tomato with a little bit of salad and cucumbers on the freshly baked bread.</p>
                                            <p class="price">12.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/toast-2-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Cheese Toast</a></h5>
                                            <p class="text-italic">This toast is one of the most popular in our menu, and it’s no wonder why – it’s as tasty as it’s original and easy to make.</p>
                                            <p class="price">10.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/toast-3-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Beef Toast</a></h5>
                                            <p class="text-italic">Tender, flavorful and perfectly seasoned roast beef, sliced thin, topped with smoked Gouda cheese and served on a baguette.</p>
                                            <p class="price">13.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/toast-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Italian Toast</a></h5>
                                            <p class="text-italic">Experience the flavor of true Italian cuisine with this toast, which includes Provolone Cheese, fresh tomatoes, and freshly baked bread.</p>
                                            <p class="price">17.97</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/toast-5-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Mediterranean Toast</a></h5>
                                            <p class="text-italic">Warm, toasty and hearty, this toast will satisfy your appetite with Zippy Hummus, Roasted Red Peppers, and Fried Bacon.</p>
                                            <p class="price">25.00</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/toast-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Chicken Toast</a></h5>
                                            <p class="text-italic">We reimagined the original Chicken Sandwich, and now you can enjoy the taste of our Chicken Toast with cherry tomatoes and salad.</p>
                                            <p class="price">9.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Pizzas-->
                        <div>
                            <!-- Slick Carousel-->
                            <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-center-mode="true" data-center-padding="10" class="slick-slider slick-tab-centered">
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/pizzas-1-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Hawaiian</a></h5>
                                            <p class="text-italic">Fresh pineapple, applewood smoked ham and slivered scallions make this pizza #1 among our youngest visitors.</p>
                                            <p class="price">12.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/pizzas-2-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Sicilian</a></h5>
                                            <p class="text-italic">Rustic meets refined in this flavorful pizza with spicy marinara, Italian sausage, spicy Capicola ham, salami, and Mozzarella.</p>
                                            <p class="price">10.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/pizzas-3-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Classic Cheese</a></h5>
                                            <p class="text-italic">Large round pizza from QuickFood topped with 100% Mozzarella and Muenster cheeses, hot out of the oven and ready when you are.</p>
                                            <p class="price">13.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/pizzas-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Margherita</a></h5>
                                            <p class="text-italic">The classic that everyone loves. Try our Margherita with Italian tomatoes, fresh Mozzarella, fresh basil and Parmesan.</p>
                                            <p class="price">17.97</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/pizzas-5-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Neapolitan</a></h5>
                                            <p class="text-italic">One of our most popular dishes, this pizza includes fresh tomatoes, cheese, oil, and garlic and is served with numerous toppings.</p>
                                            <p class="price">25.00</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/pizzas-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Pepperoni</a></h5>
                                            <p class="text-italic">An American favorite of all times! Experience the taste of original Pepperoni cooked and delivered hot by the team of QuickFood.</p>
                                            <p class="price">9.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Salads-->
                        <div>
                            <!-- Slick Carousel-->
                            <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-center-mode="true" data-center-padding="10" class="slick-slider slick-tab-centered">
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/salads-1-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Buffalo Bleu</a></h5>
                                            <p class="text-italic">Chopped romaine &amp; iceberg blend, all-natural chicken, original buffalo new york spicy sauce, grape tomatoes, and banana peppers.</p>
                                            <p class="price">12.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/salads-2-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Greek Salad</a></h5>
                                            <p class="text-italic">Cucumbers, grape tomatoes, red onions, banana peppers, black olives, and feta cheese with balsamic vinaigrette dressing.</p>
                                            <p class="price">10.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/salads-3-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Turkey Salad</a></h5>
                                            <p class="text-italic">Chopped romaine &amp; iceberg blend, radiatorre pasta, roasted turkey, crispy bacon, tomatoes, and buttermilk ranch dressing</p>
                                            <p class="price">13.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/salads-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Mediterranean</a></h5>
                                            <p class="text-italic">Spring mix, all-natural chicken, quinoa, black olives, marinated tomatoes, sunflower seeds, feta cheese, and balsamic vinaigrette.</p>
                                            <p class="price">17.97</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/salads-5-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Farmhouse salad</a></h5>
                                            <p class="text-italic">Baby kale, spring mix, roasted turkey, roasted butternut squash, roasted brussels sprouts, glazed pecans, and goat cheese.</p>
                                            <p class="price">25.00</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/salads-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Chicken Caprese</a></h5>
                                            <p class="text-italic">Romaine hearts, blackened chicken, avocado, chopped tomatoes, fresh mozzarella and balsamic vinaigrette combined perfectly.</p>
                                            <p class="price">9.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Drinks-->
                        <div>
                            <!-- Slick Carousel-->
                            <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-center-mode="true" data-center-padding="10" class="slick-slider slick-tab-centered">
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/drinks-1-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Diet Coke</a></h5>
                                            <p class="text-italic">Try a crisp and refreshing no-calorie Diet Coke, refreshing classics that compliments any dish of our menu.</p>
                                            <p class="price">12.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/drinks-2-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Blue Moon</a></h5>
                                            <p class="text-italic">Blue Moon cocktail is a fun, frozen martini featuring blue curaçao, vanilla syrup, fresh orange juice, and whipped cream.</p>
                                            <p class="price">10.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/drinks-3-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Sparkling Water</a></h5>
                                            <p class="text-italic">A perfect choice for those who want a refreshing drink in hot weather. A wide range of flavors is available!</p>
                                            <p class="price">13.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/drinks-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Red Dawn</a></h5>
                                            <p class="text-italic">The Red Dawn- a strong and flavorful cocktail comprised of Southern Comfort, lemon-lime soda &amp; cranberry juice.</p>
                                            <p class="price">17.97</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/drinks-5-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Pina Colada</a></h5>
                                            <p class="text-italic">Our specialty frozen Pina Colada made with Don Q Rum, pineapple juice, and Coco Lopez, topped with toasted coconut.</p>
                                            <p class="price">25.00</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/drinks-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Classic Lemonade</a></h5>
                                            <p class="text-italic">Refreshing lemonade with a touch of mint and ginger. Refreshing lemon drinks that make for the perfect sip, when you are chilling.</p>
                                            <p class="price">9.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--deserts-->
                        <div>
                            <!-- Slick Carousel-->
                            <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-center-mode="true" data-center-padding="10" class="slick-slider slick-tab-centered">
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/deserts-1-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">French macaroons</a></h5>
                                            <p class="text-italic">French macaroons are thin, flavorful meringue cookies that are sandwiched together with some kind of filling.</p>
                                            <p class="price">12.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/deserts-2-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Blueberry muffins</a></h5>
                                            <p class="text-italic">Big Blueberry muffins with a crusty sugar topping. The blueberries and the sweet batter are fabulous and taste amazing.</p>
                                            <p class="price">10.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/deserts-3-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Donuts</a></h5>
                                            <p class="text-italic">Homemade and filled with a delightful vanilla cream pudding and topped with sweet white icing, these donuts will delight you.</p>
                                            <p class="price">13.90</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/deserts-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Ice Cream</a></h5>
                                            <p class="text-italic">Our premium sweet-cream, classic vanilla ice cream is pure pleasure. Perfect for sundaes, with a slice of cake, or just heavenly when flying solo.</p>
                                            <p class="price">17.97</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/deserts-5-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Pancakes</a></h5>
                                            <p class="text-italic">Get the deliciousness of this all-American dish—in half the time. Enjoy the unforgettable taste of our pancakes!</p>
                                            <p class="price">25.00</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail-menu-modern">
                                        <figure><img src="images/deserts-4-310x260.png" alt="" width="310" height="260" class="img-responsive" />
                                        </figure>
                                        <div class="caption">
                                            <h5><a href="menu-single.html" class="link link-default">Chocolate Fudge Cake</a></h5>
                                            <p class="text-italic">Finished with chunks of chocolate brownie and served with vanilla ice cream, this cake is a must if you enjoy tasty desserts.</p>
                                            <p class="price">9.50</p><a href="{{url('pizza')}}" class="btn btn-shape-circle btn-burnt-sienna offset-top-15">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--banner-->
            <section class="bg-image-5">
                <!-- RD Parallax-->
                <div data-on="false" data-md-on="true" class="rd-parallax rd-parallax-light">
                    <div data-speed="0.35" data-type="media" data-url="images/parallax-03.png" class="rd-parallax-layer"></div>
                    <div data-speed="0" data-type="html" class="rd-parallax-layer">
                        <div class="shell section-80 section-sm-top-140 section-sm-bottom-150 text-center">
                            <div class="range range-xs-center">
                                <div class="cell-sm-10 cell-lg-6">
                                    <h4 class="text-italic divider-custom-small-primary">Free Delivery</h4>
                                    <h2 class="text-uppercase text-italic offset-top-10 offset-sm-top-0">Sandwich Day</h2>
                                    <div class="label-price offset-top-10">
                                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                            <div class="unit-left">
                                                <h1 class="text-primary">3<sup class="h3 text-primary">99</sup></h1>
                                            </div>
                                            <div class="unit-body">
                                                <ul class="big text-left">
                                                    <li>Sandwich</li>
                                                    <li>Salad</li>
                                                    <li>Drink</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><a href="menu-classic.html" class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-15">order online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--services-->
            <section class="section-50 section-sm-130">
                <div class="shell">
                    <div class="range range-xs-center">
                        <div class="cell-sm-6 cell-md-3 view-animate fadeInUpBigger delay-04">
                            <!-- Box icon-->
                            <article class="box-icon box-icon-variant-1">
                                <div class="icon-wrap"><i class="fa fa-truck" style="font-size:36px;"></i></div>
                                <div class="box-icon-header">
                                
                                    <h5>Fast Delivery</h5>
                                </div>
                                <hr class="divider-xs bg-primary" />
                                <p>Everything you order at QuickFood will be quickly delivered to your door.</p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-sm-top-0 view-animate fadeInUpBigger delay-08">
                            <!-- Box icon-->
                            <article class="box-icon box-icon-variant-1">
                                <div class="icon-wrap"><i class='	fa fa-leaf' style='font-size:36px'></i></div>
                                <div class="box-icon-header">
                                    <h5>fresh food</h5>
                                </div>
                                <hr class="divider-xs bg-primary" />
                                <p>We use only the best ingredients to cook the tasty fresh food for you.</p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0 view-animate fadeInUpBigger delay-04">
                            <!-- Box icon-->
                            <article class="box-icon box-icon-variant-1">
                                <div class="icon-wrap"><i class='	fa fa-database' style='font-size:36px'></i></div>
                                <div class="box-icon-header">
                                    <h5>experienced chefs</h5>
                                </div>
                                <hr class="divider-xs bg-primary" />
                                <p>Our staff consists of chefs and cooks with years of experience.</p>
                            </article>
                        </div>
                        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0 view-animate fadeInUpBigger delay-06">
                            <!-- Box icon-->
                            <article class="box-icon box-icon-variant-1">
                                <div class="icon-wrap"><i class='	fa fa-cutlery' style='font-size:36px'></i></div>
                                <div class="box-icon-header">
                                    <h5>a variety of dishes</h5>
                                </div>
                                <hr class="divider-xs bg-primary" />
                                <p>In our menu you’ll find a wide variety of dishes, desserts, and drinks.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!--section gallery-->
            <section>
                <div data-photo-swipe-gallery="gallery" class="range range-condensed">
                    <div class="cell-xs-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="images/index-gallery-1-1200x800_original.jpg" data-author="" class="thumbnail-gallery"><img src="images/index-gallery-1-480x394.jpg" alt="" width="480" height="394"/></a></div>
                    <div class="cell-xs-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="images/index-gallery-2-1200x800_original.jpg" class="thumbnail-gallery"><img src="images/index-gallery-2-480x394.jpg" alt="" width="480" height="394"/></a></div>
                    <div class="cell-xs-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="images/index-gallery-3-1200x800_original.jpg" class="thumbnail-gallery"><img src="images/index-gallery-3-480x394.jpg" alt="" width="480" height="394"/></a></div>
                    <div class="cell-xs-6 cell-md-3"><a data-photo-swipe-item="" data-size="1200x800" href="images/index-gallery-4-1200x800_original.jpg" class="thumbnail-gallery"><img src="images/index-gallery-4-480x394.jpg" alt="" width="480" height="394"/></a></div>
                </div>
            </section>
            <section>
                <!-- RD Google Map-->
                <div data-zoom="15" data-y="40.623180" data-x="-73.9874068" data-styles="" class="rd-google-map rd-google-map__model">
                    <ul class="map_locations">
                        <li data-y="40.623180" data-x="-73.9874068">
                            <p><span class="icon"><img src="images/gmap-24x34.png" alt="" width="24" height="34"/></span>267 Park Avenue New York, NY 90210</p>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
@endsection