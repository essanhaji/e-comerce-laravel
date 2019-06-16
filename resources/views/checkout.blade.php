@extends('layouts.master')

@section('content')


<div class="page-content">
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="/" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        checkout  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start checkout content -->
    <div class="checkout-content-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4 class="cart-title">CHECKOUT</h4>
                </div>
                <div class="checkout-content ">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="checkout-sidebar mb-5">
                            <h4>YOUR CHECKOUT PROGRESS</h4>
                            <ul>
                                <li><a href="#">Billing Address</a></li>
                                <li><a href="#">Shiping Price</a></li>
                                <li><a href="#">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>

                    <form action="{{ route('checkout.store')}}" method="POST" >
                    {{ csrf_field() }}
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                                
                                <div class="panel sauget-accordion">
                                    <div id="headingTwo" role="tab" class="panel-heading">
                                        <h4 class="panel-title">
                                            <a aria-controls="billingInformation" aria-expanded="false" href="#billingInformation" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                <span>1</span> Billing Information
                                            </a>
                                        </h4>
                                    </div>
                                    <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse" id="billingInformation" aria-expanded="false" style="height: 0px;">
                                        <div class="content-info">
                                            <div class="billing-info">
                                                <div class="form-group" style='margin-right:20px'>
                                                    <label>Billing name <sup>*</sup></label>
                                                    <input type="text" value="{{auth()->user()->name}}" class="form-control" name="name">            
                                                </div>   
                                                <div class="form-group" style='margin-right:20px'>
                                                    <label>Your email <sup>*</sup></label>
                                                    <input type="text" value="{{auth()->user()->email}}" class="form-control" name="email" >            
                                                </div>

                                                <div class="form-group" style='margin-right:20px'>
                                                        <label>Billing City <sup>*</sup></label>
                                                        <input type="text" value="{{auth()->user()->city}}" name="city" class="form-control" >            
                                                </div>  

                                                <div class="form-group" style='margin-right:20px'>
                                                        <label>Billing Postal code <sup>*</sup></label>
                                                        <input type="text" value="{{auth()->user()->postalCode}}" name="postalCode" class="form-control" >            
                                                </div>  

                                                <div class="form-group" style='margin-right:20px'>
                                                        <label>Billing address <sup>*</sup></label>
                                                        <input type="text" value="{{auth()->user()->address}}" class="form-control" name="address" >            
                                                </div> 
                                                <div class="form-group" style='margin-right:20px'>
                                                        <label>Billing Phone <sup>*</sup></label>
                                                        <input type="text" value="{{auth()->user()->tele}}" class="form-control" name="phone" >            
                                                </div>                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel sauget-accordion">
                                    <div id="headingThree" role="tab" class="panel-heading">
                                        <h4 class="panel-title">
                                            <a aria-controls="shippingMethod" aria-expanded="false" href="#shippingMethod" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                <span>2</span> Shipping Price
                                            </a>
                                        </h4>
                                    </div>
                                    <div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse" id="shippingMethod" aria-expanded="false">
                                        <div class="content-info">
                                            <div class="shiping-method">
                                                <p><small>Flat Rate</small></p>
                                                <p>Fixed ( $ )<b></b></p>
                                                <div class="form-group" style='margin-right:20px'>
                                                @if(!session()->has('coupon'))
                                                    <input id="price" type="text" value="{{Cart::Subtotal()}}"   class="form-control" name="totalPrice" readonly="readonly" >
                                                @else
                                                    <input id="price" type="text" value="{{$new_total}}"   class="form-control" name="totalPrice" readonly="readonly">        
                                                @endif
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel sauget-accordion">
                                    <div id="headingFour" role="tab" class="panel-heading">
                                        <h4 class="panel-title">
                                            <a aria-controls="paymentInformation" aria-expanded="false" href="#paymentInformation" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                <span>3</span> Payment Process
                                            </a>
                                        </h4>
                                    </div>
                                    <div aria-labelledby="headingFour" role="tabpanel" class="panel-collapse collapse" id="paymentInformation" aria-expanded="false">
                                        <div class="content-info">
                                            <div class="checkout-option">
                                                
                                                <div class="master-card-info">
                                                    <div id="paypal-button-container"></div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    
                        <div class="block-area-button " style="float:right;margin-right:2px">
                            <button class="btn" type="submit">Continue</button>
                        </div> 
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End checkout content -->
</div>
<!-- End page content -->    
<!-- Start brand and client -->
<div class="brand-and-client mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="area-title">
                    <h3>BRAND & CLIENTS</h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="brand-logo featured-product-area">
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/2.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/5.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/6.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script
    src="https://www.paypal.com/sdk/js?client-id=AWLG3lCGMU6a2PsX6wm0TXKzNDkONDhG7y8wxkYnrxZwp58SNJ3SWBSqBClzdrz8luG4xadvcnG0_lpE">
</script>

<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        var price=document.getElementById('price').value;
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: price
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          
        //   document.getElementById("").style.display = "none";
          document.getElementById("paypal-button-container").innerHTML = 'You have paid succesfully, Thank you '; 
          alert('Transaction completed by ' + details.payer.name.given_name);
          // Call your server to save the transaction
          return fetch('/paypal-transaction-complete', {
            method: 'post',
            headers: {
              'content-type': 'application/json'
            },
            body: JSON.stringify({
              orderID: data.orderID
            })
          });
        });
      }
    }).render('#paypal-button-container');
</script>

@endsection