@extends('layouts.layout')
@section('content')

<main class="my-8">
@if ($message = Session::get('success'))
                          <div style="background:#5CB85C;padding:10px">
                              <p style="color:#fff">{{ $message }}</p>
                          </div>
                      @endif
            <div class="container ">
              
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white ">
                      <!-- @if ($message = Session::get('success'))
                          <div style="background:#5CB85C;padding:10px">
                              <p style="color:#fff">{{ $message }}</p>
                          </div>
                      @endif -->
                        <h5 class="">Cart List</h5>
                      <div class="table-responsive offset-top-10">
                        <table class="table table-shopping-cart">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class=""></th>
                              <th class="text-center">Name</th>
                              <th class="pl-5 lg:text-right lg:pl-0">
                                <span class="" title="Quantity"></span>
                                <span class="text-center ">Quantity</span>
                              </th>
                              <th class=" text-center "> price</th>
                              <th class="text-center"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              
                              <td style="width: 1px">
                                <div class="product-image">
                                  
                                <img src="{{$item->attributes->gallery}}" />
                                </div>
                                 
                               
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4" style="font-size:20px">{{$item['name']}}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <div class="form-group">
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                      </div>
                                     <div class="form-group">
                                     <input type="number" class="form-control" name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                     </div>
                                   
                                    <button type="submit"class="btn btn-primary ">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class=" text-center">
                                <span class="h5 text-sbold">
                                ₹{{ $item->price * $item->quantity }}
                                </span>
                              </td>
                              <td class=" text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="btn btn-burnt-sienna ">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <br>
                        <br>
                        <div class="h5 text-sbold text-right">
                         Total: ₹{{ Cart::getTotal() }}
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="">
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <!-- <div class="col-sm-4"><a href="{{url()->previous()}}" class="btn btn-success btn-shape-circle">Continue Shopping</a></div> -->
                            <div class="col-sm-4 " style="margin:15px"> <button class="btn btn-danger btn-shape-circle">Remove all</button></div>
                            <div class="col-sm-4 " style="margin:15px"><button class="btn btn-success btn-shape-circle">Make Payment</button></div>
                            
                           
                            
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

        <!-- <div class="table-responsive offset-top-10">
                                <table class="table table-shopping-cart">
                                    <tbody>
                                        <tr>
                                            
                                            <td style="width: 1px">
                                                <div class="inset-left-20">
                                                    <div class="product-image"><img src="{images/shop-cart-1-130x130.jpg}" width="130" height="130" alt=""></div>
                                                </div>
                                            </td>
                                            <td style="min-width: 340px;">
                                                <div class="inset-left-30 text-left"><span class="product-brand text-italic">Burgers</span>
                                                    <div class="h5 text-sbold offset-top-0"><a href="shop-single.html" class="link-default">Mini Burger</a></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="inset-left-20"><span class="h5 text-sbold">$34</span></div>
                                            </td>
                                            <td>
                                                <div class="inset-left-20"><a href="#" class="icon icon-sm mdi mdi-window-close link-gray-lightest"></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 1px">
                                                <div class="form-group stepper-type-2">
                                                    <input type="number" data-zeros="true" value="2" min="1" max="20" readonly class="form-control text-bold">
                                                </div>
                                            </td>
                                            <td style="width: 1px">
                                                <div class="inset-left-20">
                                                    <div class="product-image"><img src="images/shop-cart-2-130x130.jpg" width="130" height="130" alt=""></div>
                                                </div>
                                            </td>
                                            <td style="min-width: 340px;">
                                                <div class="inset-left-30 text-left"><span class="product-brand text-italic">Burgers</span>
                                                    <div class="h5 text-sbold offset-top-0"><a href="shop-single.html" class="link-default">Classic Burger</a></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="inset-left-20"><span class="h5 text-sbold">$90</span></div>
                                            </td>
                                            <td>
                                                <div class="inset-left-20"><a href="#" class="icon icon-sm mdi mdi-window-close link-gray-lightest"></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
 -->





                          

@endsection