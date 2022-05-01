@extends('layouts.app')
@section('content')

<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-bg" data-background="{{ asset('img/bg/RR2.jpg') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Articles</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Articles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-us-area -->
    <section class="about-us-area about-style-four pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center pb-30">
                <div class="col-lg-6 col-md-10">
                    <div class="about-wrapper">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="about-img">
                                    <img src="{{ asset('img/images/DD1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-img">
                                    <img src="{{ asset('img/images/Dar.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-45">
                    <div class="section-title mb-15">
                        <h6 class="sub-title">Articles</h6>
                        <h2 class="title">Caring for the elderly</h2>
                    </div>
                    <div class="about-us-content">
                        <p> The old man “elderly.”That is, he grew old, and he grew old, 
                            and the elderly, or the elderly, are plural of the word (the elderly), 
                            knowing that this word is associated with sociologists with a specific age,
                             which is the age of sixty years; An elderly man is one who is over sixty years old, 
                             and the elderly are: individuals who have exceeded the official age for retirement;
                              That is, they have reached the age of retirement, and this age ranges between 65-70 years, 
                              In addition, the elderly are: those who entered the stage of old age,
                               which represents a biological fact that characterizes the final development in the stages of human life,
                                and some of them define the elderly as: every individual is unable to take care of himself and serve it;
                                 Because of advancing age, and not because of a disability
                                 , or a specific disease, and it is worth noting that there are those who classify old age into: first old age,
                             which is between 65-74 years, and advanced old age 86. </p>
                            
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                   <ol>
                      <b> <p> 
                        The elderly should receive an adequate amount of attention and care by parents, and even members of society, as this is represented by various means, the most important of which are: </b> 
                    </br>
                     <li>  Medical means:These include treating diseases in the elderly, correcting the deficiency in his sensory organs,
                          and preventing him from using medicines without medical advice,
                           in addition to providing auxiliary medical devices, such as: a wheelchair,
                            and tools for maintaining balance, and taking care of conducting periodic examinations. </li>
                    </br>
                     <li>   Environmental means: They are represented by the use of household tools that suit the condition of the elderly, 
                         improving the lighting condition, not using polished or uneven floors, choosing shoes or insoles suitable for the elderly,
                          and other measures that guarantee the safety and health of the elderly. </li>
                    </br>

                     <li>  Performing routine chores: The elderlys performance of routine chores during the day contributes greatly to improving and maintaining their health.</li>
                    </br>

                      <li>  Attention to physical activities: The elderly can protect himself from health problems, 
                          by practicing sports activities that include the movement of the body; they help burn fat, strengthen muscles, and improve bowel movement. </li>
                        
                    </br>
                    <li>   Attention to social activities: by keeping the elderly away from isolation, 
                        engaging him with people, helping him find old friends,
                         maintaining his mental health, and not feeling depressed, through mental and mental stimulation. </li>
                        </p>
                    </ol>
                </div>
            </div>
    </section>
    <!-- about-us-area-end -->

</main>









@endsection
