@extends('layouts.frontend')
@section('contend')
   <br><br><br><br><br>
     <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title">Les Inscriptions des acteurs</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-7">
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <img src="{{ asset('front/assets/images/blog/img-04.jpg') }}" alt="" class="img-fluid">
                                    <div class="card-body">
                                        <a href="#" class="primary-link"><h6 class="fs-17">Campus Angels</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="{{ url('campus/register') }}"><button class="btn btn-primary">Inscris-Toi</button></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-05.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        
                                        <a href="#" class="primary-link"><h6 class="fs-17">City Angels</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="{{ url('city/register') }}"><button class="btn btn-primary">Inscris-Toi</button></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-06.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                       
                                        <a href="#" class="primary-link"><h6 class="fs-17">Territory Guardians</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="{{ url('territory/register') }}"><button class="btn btn-primary">Inscris-Toi</button></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center min-vh-100"> 
                            <div class="col-lg-4 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-07.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        
                                        <a href="#" class="primary-link"><h6 class="fs-17">Business Guardians</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href="{{ url('business/register') }}"><button class="btn btn-primary">Inscris-Toi</button></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div>                       
                            <div class="col-lg-4 mb-4">
                                <div class="card blog-grid-box p-2">
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('front/assets/images/blog/img-08.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                       
                                        <a href="#" class="primary-link"><h6 class="fs-17">Social Sponsors</h6></a>
                                        <p class="text-muted">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>
                                        <div>
                                            <a href=""><button class="btn btn-primary">Inscris-Toi</button></a>
                                        </div>
                                    </div>
                                </div><!--end blog-grid-box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
