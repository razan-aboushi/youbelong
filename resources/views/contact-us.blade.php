@extends('layouts.app')
@section('content')

<!-- main-area -->
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <div class="contact-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-wrap">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" placeholder="Enter full name">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" placeholder="Enter your email">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <select class="custom-select">
                                            <option selected="">Select Subject</option>
                                            <option>medical care</option>
                                            <option>resident care</option>
                                            <option>independent</option>
                                            <option>memory care</option>
                                        </select>
                                        <i class="fal fa-arrow-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <textarea name="message" id="message" placeholder="Enter messages"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <button class="btn">submit your quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->

    <div class="contact-map" data-background="img/bg/contact_map.jpg"></div>

    <!-- contact-area -->
    <div class="contact-info-area pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="contact-info-box mb-30">
                        <div class="contact-info-box-head">
                            <h3>Tokyo Branch Office</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adi</span>
                        </div>
                        <div class="contact-info-box-content">
                            <ul>
                                <li>
                                    <i class="fal fa-phone"></i>
                                    <span>987-098-876-98</span>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <span>info@webmail.com</span>
                                </li>
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>14/A, Monster Tower City Hall
                                    New York, US</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="contact-info-box mb-30">
                        <div class="contact-info-box-head">
                            <h3>Tokyo Branch Office</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adi</span>
                        </div>
                        <div class="contact-info-box-content">
                            <ul>
                                <li>
                                    <i class="fal fa-phone"></i>
                                    <span>987-098-876-98</span>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <span>info@webmail.com</span>
                                </li>
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>14/A, Monster Tower City Hall
                                    New York, US</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="contact-info-box mb-30">
                        <div class="contact-info-box-head">
                            <h3>Tokyo Branch Office</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adi</span>
                        </div>
                        <div class="contact-info-box-content">
                            <ul>
                                <li>
                                    <i class="fal fa-phone"></i>
                                    <span>987-098-876-98</span>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <span>info@webmail.com</span>
                                </li>
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>14/A, Monster Tower City Hall
                                    New York, US</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->

</main>
<!-- main-area-emd -->

@endsection
