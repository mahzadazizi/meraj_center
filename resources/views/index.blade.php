@extends('layouts.master')


@section('title')

 index page 
 
@endsection 

@section('content')


    <!-- ======= Featured Section ======= -->

    <main>
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide/IMG-20230513-WA0007.jpg" class="carousel-image img-fluid" alt="...">
                            
                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>کلاس های هنری</h1>
                                
                                <p>در تما شاخه های هنر</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="images/slide/IMG-20230513-WA0004.jpg" class="carousel-image img-fluid" alt="...">
                            
                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>کلاس های کمک آموزشی</h1>
                                
                                <p>برای تمام مقاطع تحصیلی</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="images/slide/IMG-20230513-WA0010.jpg" class="carousel-image img-fluid" alt="...">
                            
                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>کلاس های تربیتی</h1>
                                
                                <p>در مباحث دینی و تربیتی</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">كانون فرهنگي تربيتي معراج </h2>
                <h2 class="mb-5"> مكاني براي پرورش خلاقيت دانش آموزان</h2>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Make a <strong>Donation</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="images/portrait-volunteer-who-organized-donations-charity.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h2 class="mb-0">Sandy Chan</h2>

                    <p class="text-muted mb-lg-4 mb-md-4">Co-Founding Partner</p>

                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>

                    <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 ms-auto">
                <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
            </div>

            <div class="col-lg-5 col-12">
                <a href="#" class="me-4">Make a donation</a>

                <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
            </div>

        </div>
    </div>
</section>

<section class="testimonial-section section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h2 class="mb-lg-3">Happy Customers</h2>
                
                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                               <div class="carousel-caption">
                                    <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Maria</span>, Boss</small>
                               </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Thomas</span>, Partner</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Jane</span>, Advisor</small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                    <small class="carousel-name"><span class="carousel-name-title">Bob</span>, Entreprenuer</small>
                               </div>
                            </div>

                              <ol class="carousel-indicators">
                                   <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                   </li>

                                   <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                   </li>

                                   <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                        <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                   </li>

                                   <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                        <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                   </li>
                              </ol>

                     </div>
                </div>
            </div>

        </div>
    </div>
</section>
    </main>
@endsection