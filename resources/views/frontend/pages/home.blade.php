@extends('master')



@section('content')




<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">


            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12">
                <div class="post-content-area mb-50">
                    <!-- Catagory Area -->
                    <div class="world-catagory-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="title">Mais recentes</li>

                        </ul>

                        <div class="tab-content" id="myTabContent">


                            <div class="tab-pane fade show active" id="all-tab" role="tabpanel" aria-labelledby="tab1">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">


                                        @foreach($tutorials as $tutorial)


                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="_frontend/img/tutoriais/{{$tutorial->imagemDeCapa}}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">All</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>{{$tutorial->titulo}}</h5>
                                                    </a>
                                                    <p>{{$tutorial->descricao}}</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach




                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6">
                                        @foreach($tutorials as $tutorial)


                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="_frontend/img/tutoriais/{{$tutorial->imagemDeCapa}}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>{{$tutorial->titulo}}</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>


                                        @endforeach

                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>



                </div>
            </div>





            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12">
                <div class="post-content-area mb-50">
                    <!-- Catagory Area -->
                    <div class="world-catagory-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="title">Mais visualizados</li>

                        </ul>

                        <div class="tab-content" id="myTabContent">


                            <div class="tab-pane fade show active" id="all-tab" role="tabpanel" aria-labelledby="tab1">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">


                                        @foreach($tutorials as $tutorial)


                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="_frontend/img/tutoriais/{{$tutorial->imagemDeCapa}}" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">All</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>{{$tutorial->titulo}}</h5>
                                                    </a>
                                                    <p>{{$tutorial->descricao}}</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach




                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6">
                                        @foreach($tutorials as $tutorial)


                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="_frontend/img/tutoriais/{{$tutorial->imagemDeCapa}}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>{{$tutorial->titulo}}</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>


                                        @endforeach

                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>



                </div>
            </div>




        </div>



    </div>
</div>


@endsection