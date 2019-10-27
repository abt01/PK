@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <!--	<li class="home"><a href="#">Page <i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
        <li><a href="#">About</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12 col-xs-12">

            <div class="about-us about-demo-1">
                <div class="row">
                    <!--	<div class="col-lg-5 col-md-5 about-image"> <img src="img/demo/cms/peezarkhana.png')}}" alt="About Us"> </div> -->
                    <div class="col-xs-12 col-lg-7 col-md-7 about-info">
                        <h3 class="about-title"><span>About Us</span></h3>
                        <div class="about-text">
                            <p> PEEZAR KHANA is the house of kheri. Good shoes take you to the Good places. We provide best cultural shoes for men. These shoes are fit for every type of "Shalwar Kamiz " Sherwani Pajama".</p>
                            <p>We provide shoes that are hand stitched and are made of water resistant thread. Each item line in store has been carefully hand-picked to let the personal style of the wearer shine through   </p>
                            <p> We have variety of cultural shoes for men. Our goal is to provide our customers with the best product at their door steps.</p>

                        </div>
                    </div>
                </div>

                <!--				<div class="row">
                                    <div class="col-xs-12 col-lg-12 col-md-12 our-team">
                                        <div class="our-team-content">
                                            <h2 class="about-title line-hori"><span>Our Team</span></h2>
                                            <div class="our-team-slider">
                                                <div class="owl-carousel carousel-member" data-loop="yes" data-nav="yes" data-dots="no" data-margin="15" data-items_xs="1" data-items_sm="3" data-items_md="4">
                                                    <div class="member">
                                                        <div class="member-image"> <img src="img/demo/about/ourmember04.png" alt="Image Client"> </div>
                                                        <div class="member-info">
                                                            <h3 class="name-member">Jennifer lawrence</h3>
                                                            <p class="job-member">Co Founder</p>
                                                            <p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                                            <ul class="social-member">
                                                                <li class="social-icon rss"><a class="fa fa-rss" href="#" title="RSS"><span>RSS</span></a>
                                                                </li>
                                                                <li class="social-icon facebook"><a class="fa fa-facebook" href="#" title="Facebook"><span>Facebook</span></a>
                                                                </li>
                                                                <li class="social-icon twitter"><a class="fa fa-twitter" href="#" title="Twitter"><span>Twitter</span></a>
                                                                </li>
                                                                <li class="social-icon google"><a class="fa fa-google" href="#" title="Google"><span>Google</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="member">
                                                        <div class="member-image"> <img src="img/demo/about/ourmember01.png" alt="Image Client"> </div>
                                                        <div class="member-info">
                                                            <h3 class="name-member">Jennifer lawrence</h3>
                                                            <p class="job-member">Co Founder</p>
                                                            <p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                                            <ul class="social-member">
                                                                <li class="social-icon rss"><a class="fa fa-rss" href="#" title="RSS"><span>RSS</span></a>
                                                                </li>
                                                                <li class="social-icon facebook"><a class="fa fa-facebook" href="#" title="Facebook"><span>Facebook</span></a>
                                                                </li>
                                                                <li class="social-icon twitter"><a class="fa fa-twitter" href="#" title="Twitter"><span>Twitter</span></a>
                                                                </li>
                                                                <li class="social-icon google"><a class="fa fa-google" href="#" title="Google"><span>Google</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="member">
                                                        <div class="member-image"> <img src="img/demo/about/ourmember02.png" alt="Image Client"> </div>
                                                        <div class="member-info">
                                                            <h3 class="name-member">Jennifer lawrence</h3>
                                                            <p class="job-member">Co Founder</p>
                                                            <p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                                            <ul class="social-member">
                                                                <li class="social-icon rss"><a class="fa fa-rss" href="#" title="RSS"><span>RSS</span></a>
                                                                </li>
                                                                <li class="social-icon facebook"><a class="fa fa-facebook" href="#" title="Facebook"><span>Facebook</span></a>
                                                                </li>
                                                                <li class="social-icon twitter"><a class="fa fa-twitter" href="#" title="Twitter"><span>Twitter</span></a>
                                                                </li>
                                                                <li class="social-icon google"><a class="fa fa-google" href="#" title="Google"><span>Google</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="member">
                                                        <div class="member-image"> <img src="img/demo/about/ourmember03.png" alt="Image Client"> </div>
                                                        <div class="member-info">
                                                            <h3 class="name-member">Jennifer lawrence</h3>
                                                            <p class="job-member">Co Founder</p>
                                                            <p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                                            <ul class="social-member">
                                                                <li class="social-icon rss"><a class="fa fa-rss" href="#" title="RSS"><span>RSS</span></a>
                                                                </li>
                                                                <li class="social-icon facebook"><a class="fa fa-facebook" href="#" title="Facebook"><span>Facebook</span></a>
                                                                </li>
                                                                <li class="social-icon twitter"><a class="fa fa-twitter" href="#" title="Twitter"><span>Twitter</span></a>
                                                                </li>
                                                                <li class="social-icon google"><a class="fa fa-google" href="#" title="Google"><span>Google</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="member">
                                                        <div class="member-image"> <img src="img/demo/about/ourmember04.png" alt="Image Client"> </div>
                                                        <div class="member-info">
                                                            <h3 class="name-member">Jennifer lawrence</h3>
                                                            <p class="job-member">Co Founder</p>
                                                            <p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
                                                            <ul class="social-member">
                                                                <li class="social-icon rss"><a class="fa fa-rss" href="#" title="RSS"><span>RSS</span></a>
                                                                </li>
                                                                <li class="social-icon facebook"><a class="fa fa-facebook" href="#" title="Facebook"><span>Facebook</span></a>
                                                                </li>
                                                                <li class="social-icon twitter"><a class="fa fa-twitter" href="#" title="Twitter"><span>Twitter</span></a>
                                                                </li>
                                                                <li class="social-icon google"><a class="fa fa-google" href="#" title="Google"><span>Google</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
            </div>
        </div>
    </div>
@endsection
