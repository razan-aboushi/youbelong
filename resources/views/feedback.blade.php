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
                        <h2 class="title">feedback</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">feedback</li>
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

</main>
<!-- main-area-emd -->

@endsection
