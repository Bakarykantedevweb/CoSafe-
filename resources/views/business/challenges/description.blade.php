@extends('layouts.business')

@section('content')
<style>
.btn-primary, .btn-primary.disabled {
    /* background: #e42d29; */
    /* border: 1px solid#e42d29; */
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in;
}
</style>
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#f4f4f4 url({{asset('assetsfront/img/background/4.png') }});"
         data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="text-center">{{ $challenge->nomchallenge }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Our Story Start ================================== -->
    <section class="single-pdt-page bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-pdt-wrapper">
                        <div class="row">
                            <div class="col-lg-7 col-xl-7 mt-2 mt-md-5 mt-lg-0">

                                <div class="tab-blk-style bg-white ">
                                    <!-- /pdt-item-nav -->
                                    <div class="tab-content">
                                        <div class="fade show tab-pane product-tab active" id="product-details">
                                            <div class="tab-content-wrapper p-4">
                                                <h3 class="mb-3">Description du campus challenge</h3>
                                                <p>{{ $challenge->description }}</p>
                                                <h3 class="mb-3">Critères </h3>
                                                <p>{{ $challenge->criteres }}</p>
                                                <img class="img-fluid thumbnail" src="{{ asset('storage/app/'.$challenge->image)}}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /tab-content -->
                                </div>
                                <div class="share-info-card bg-white mt-4 p-4">
                                    <span data-feather="tag" class="mr-3 text-theme"></span>
                                    <h5 class="text-grey d-inline-block align-middle">Dotation (Gains)</h5>
                                    <hr class="my-4">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div
                                                class="alert alert-custom-color alert-dismissible py-1 px-2 d-inline-block float-left mr-3">
                                                <span class="font-xs mr-3">{{ $challenge->dotation }}</span>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="{{ route('documents.show', ['filename' => $challenge->fichier])}}" class="btn btn-lg btn-warning btn-block"> <i class="fa fa-file-word"></i>  Fichier explicatif</a>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <a href="{{ route('conditions.show', ['filename' => $challenge->conditions])}}" class="btn btn-lg btn-outline-warning btn-block"> <i class="fa fa-file-word"></i> Conditions particulières</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /col-md-8 -->
                            <div class="col-lg-5 col-xl-5">
                                <aside class="sidebar sidebar-user mt-lg-0" style="top: 0;">
                                    <div class="seller-info-card bg-white p-4 mb-4">
                                        <div class="">
                                            <span data-feather="mail" class="mr-3 text-theme"></span>
                                            <h5 class="text-grey d-inline-block align-middle">A propos
                                                du promoteur</h5>
                                        </div>
                                        <hr class="my-4">
                                        <div class="media">

                                                <div class="media-body">
                                                    <h4><i class="fa fa-user"></i> {{ $challenge->nomcomplet }}<span data-feather="award"
                                                                                          data-toggle="tooltip"
                                                                                          title="Top Rated Seller"
                                                                                          class="ml-2 text-green"></span>
                                                    </h4>
                                                    <a class="d-inline-block my-3"><span data-feather="phone-call"
                                                                                         class="text-theme mr-2"></span><span
                                                            class="text-grey d-inline-block align-middle"><i class="fa fa-phone"></i>  {{ $challenge->numero }}</span></a>
                                                    <p class="text-grey"><span data-feather="calendar"
                                                                               class="text-theme mr-2"></span><span
                                                            class="text-grey d-inline-block align-middle"><i class="fa fa-map-marker"></i> Localisation : {{ $challenge->pays }}, {{ $challenge->region }}, {{ $challenge->ville }}</span>
                                                    </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="pdt-info-card bg-white">
                                        <div class="price-blk">
                                            <div class="d-block d-lg-flex justify-content-between">
                                                <strong>Type: {{ $challenge->type }}</strong>
                                            </div>
                                            <div class="d-block justify-content-between align-items-center mt-4">
                                                <p> Secteurs d'activités:</p>
                                                <h4 class="font-bold text-theme">
                                                     {{ $challenge->secteurs }}

                                                </h4><br>
                                                <p class="mt-4 mt-lg-0 text-red font-xs d-inline-block font-bold align-middle">
                                                    <span data-feather="clock" class="animate-blink mr-2"></span>Date
                                                    lancement: {{ $challenge->datelancement }} <br>
                                                    Date cloture: {{ $challenge->datecloture }}
                                                    </p>
                                            </div>
                                            <hr class="my-4">
                                            <ul class="font-bold list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-theme">Pays du challenge:</span>
                                                   {{ $challenge->payschallenge }}, {{ $challenge->villechallenge }}
                                                </li>

                                                <li class="list-item">
                                                    <span class="text-theme"> Campus:</span>
                                                    {{ $challenge->campus }}
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="my-4">
                                        <div class="add-to-cart-blk">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>Email candidature</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a class="btn btn-success btn-lg mt-4 d-block text-light"><span
                                                            class="mr-2 fa fa-envelope"></span> {{ $challenge->email }}</a>

                                                    <div class="modal" id="myModal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Envoyer ma candidature:</h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;
                                                                    </button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <form method="post"
                                                                          action="{{ route('enregistrercandidat') }}"
                                                                          enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="form-group mb-3">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" name="email"
                                                                                   class="form-control"
                                                                                   value="{{ Auth::user()->email }}">
                                                                            <input type="hidden" name="id_job"
                                                                                   class="form-control"
                                                                                   value="{{ $challenge->id }}">
                                                                            <input type="hidden" name="id_recruteur"
                                                                                   class="form-control"
                                                                                   value="{{ $challenge->id_user }}">

                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <label for="pwd">Upload CV:</label>
                                                                            <input type="file" class="form-control"
                                                                                   name="cv" required>
                                                                        </div>
                                                                        <button type="button" class="btn btn-danger"
                                                                                data-dismiss="modal">Annuler
                                                                        </button>
                                                                        <button type="submit" class="btn btn-success">
                                                                            Postuler
                                                                        </button>
                                                                    </form>
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <hr class="my-4">

                                        </div>
                                    </div>


                                    <div class="share-info-card bg-white mt-4 p-4">
                                        <span data-feather="share-2" class="text-theme mr-3"></span>
                                        <h5 class="text-grey d-inline-block align-middle">Partager le challenge</h5>
                                        <hr class="my-4">
                                        <ul class="list-inline social-share-list">
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-facebook "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-twitter valign"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-google valign"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="JavaScript:;"
                                                   class="position-relative custom-square d-block text-grey">
                                                    <i class="lni-linkedin valign"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
