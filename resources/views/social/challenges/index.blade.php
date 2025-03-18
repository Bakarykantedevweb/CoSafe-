@extends('layouts.social')
@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Listes des Challenges</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="{{ url('social/challenges/create') }}" class="btn btn-primary">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
                        <h4 class="mb-0">Recent Posts</h4>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                                id="courseDropdown1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Settings</span>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                </a>
                            </span>
                        </span>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-hover table-centered">
                            <thead class="table-light">
                                <tr>
                                    <th>Titre</th>
                                    <th>Categorie</th>
                                    <th>Date Debut</th>
                                    <th>Date Fin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($challenges as $challenge)
                                    <tr>
                                        <td>
                                            <h5 class="mb-0">
                                                {{ $challenge->nomchallenge }}
                                            </h5>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">
                                                {{ $challenge->categorie }}
                                            </h5>
                                        </td>
                                        <td>
                                            <a href="#" class="text-inherit">{{ $challenge->datelancement }}</a>
                                        </td>
                                        <td>{{ $challenge->datecloture }}</td>
                                        <td>
                                            <span class="dropdown dropstart">
                                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                    role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                    <span class="dropdown-header">Settings</span>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-move dropdown-item-icon"></i>
                                                        Move
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-copy dropdown-item-icon"></i>
                                                        Copy
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-toggle-left dropdown-item-icon"></i>
                                                        Publish
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-toggle-right dropdown-item-icon"></i>
                                                        Unpublish
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                        Delete
                                                    </a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
