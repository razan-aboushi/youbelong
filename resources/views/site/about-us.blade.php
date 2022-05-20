@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/about_breadcrumb_bg.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">about us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        <section class="about-us-area about-style-four pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center pb-30">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-wrapper">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="about-img">
                                        <img src="{{ asset('img/images/t_about_img01.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="about-img">
                                        <img src="{{ asset('img/images/t_about_img02.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-45">
                        <div class="section-title mb-15">
                            <h6 class="sub-title">about us</h6>
                            <h2 class="title">Changing the way the world ages</h2>
                        </div>
                        <div class="about-us-content">
                            <p>Through this website, which links between nursing homes, individuals and organizations to facilitate the process of communication between them and to learn important information about nursing homes faster. It is also possible to know the needs of the different care homes through the announcement these and respond to.
                                And by joining and participating in the events that care homes create, providing psychological support to the elderly and talking to them, which increases their happiness. Let them know that they belong to us and are of great importance to this society, as they are its core and foundation.</p>
                                
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-12">
                        <p>And from our social responsibility, we decided to create this website to help solve many of the problems they face and provide them with assistance, and it aims to:</p>
                        <ul class="circled-list">
                            <li>Reducing the material needs of the nursing homes and increasing the possibility of accommodating a large number of elderlies.</li>
                            <li>In view of the indebtedness faced by the government, the site will contribute in reducing government expenses on nursing homes by providing the opportunity for donors to donate easily.</li>
                            <li>As the use of phones is increasing among youth and given the lack of volunteers in our Jordanian society, the site will help motivate young people and encourage them to participate and volunteer by knowing all the events that are being held and the ease of joining them.</li>
                            <li>Due to some questions that were directed to various groups of society, we found that the two most important reasons for the presence of the elderly in these homes are the family disintegration and the inability of their children to take responsibility. The participation of young people can compensate the elderly for what they went through in their lives by providing mental support for them.</li>
                            <li>Bringing happiness in the hearts of the elderly and making their days because they are virtuous fathers and mothers, and they are an integral part of our society.</li>
                            <li>Quick knowledge of elderly care homes and their whereabouts by providing information about them.</li>
                        </ul>
                    </div>
                </div>
        </section>

    </main>

@endsection
