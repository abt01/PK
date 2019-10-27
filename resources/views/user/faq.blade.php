@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li>   Faq</li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h3>Got Questions? We’ve Got Answers!</h3>

            <div class="row">
                <div class="col-sm-12">
                    <ul class="yt-accordion">
                        <li class="accordion-group">
                            <h3 class="accordion-heading"><i class="fa fa-plus-square"></i><span>Do I need to set up an account to place order?</span></h3>
                            <div class="accordion-inner">
                                <p>You can shop at peezarkhana.com, either by registering with us or using a guest account to checkout. </p>

                            </div>
                        </li>
                        <li class="accordion-group">
                            <h3 class="accordion-heading"><i class="fa fa-plus-square"></i><span>How do I place order at Peezar khana?</span></h3>
                            <div class="accordion-inner">
                                <p>Once your desired item is added to the shopping cart just click on the shopping cart icon on the top right corner and select proceed to checkout,you can checkout by signing up or if you have an account then login to your account.Then you have to provide your personal details, select the payment method and then select place order button..</p>
                            </div>
                        </li>
                        <li class="accordion-group">
                            <h3 class="accordion-heading"><i class="fa fa-plus-square"></i><span>Are all the sizes available?</span></h3>
                            <div class="accordion-inner" >
                                <p>Sizes from 6 to 12 are available. If you want to order any other size then we can make them on special order</p>
                            </div>
                        </li>
                        <li class="accordion-group">
                            <h3 class="accordion-heading"><i class="fa fa-plus-square"></i><span>Does Shoes make on special order have higher prices?</span></h3>
                            <div class="accordion-inner">
                                <p>Yes the shoes that are made on special order will have a bit higher prices, the price of each item will be different depending upon the item you are ordering.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>


        </div>
    </div>
@endsection
