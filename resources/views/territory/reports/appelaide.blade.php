@extends('layouts.territory')
@section('content')
    <section class="container-fluid p-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12 text-center">
                <!-- Titre principal centré -->
                <h1 class="mb-2 h2 fw-bold">Répondre à un appel à l'aide</h1>
                <p class="mb-4">Vous souhaitez apporter votre aide à un membre de la communauté ?</p>
                
                <!-- Boîte grise explicative -->
                <div class="bg-light p-3 mb-4 text-center">
                    <p class="mb-0">
                        Cette rubrique permet de consulter et répondre de manière citoyenne aux Appels à l'aide des
                        citoyens, des collectivités, des commerces et d'autres acteurs locaux.
                    </p>
                    <p class="fw-bold mb-0">
                        Faites la différence avec un engagement impactant !
                    </p>
                </div>
                
                <!-- Section "Comment répondre" -->
                <h2 class="h4 fw-bold mb-3">Comment répondre à un appel à l'aide ?</h2>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2">
                        <span class="text-success me-2">✅</span> Consultez les appels à l'aide.
                    </li>
                    <li class="mb-2">
                        <span class="text-success me-2">✅</span> Proposez votre aide.
                    </li>
                    <li class="mb-2">
                        <span class="text-success me-2">✅</span> Réagissez, partager l'Appel à l'aide
                    </li>
                </ul>
                
                <p class="mb-4">Consultez ci-dessous les Appel à l'aide selon vos critères</p>
                
                <!-- Tableau de recherche -->
                <div class="table-responsive mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pays</th>
                                <th>Ville</th>
                                <th>Date</th>
                                <th>Catégories d'aide</th>
                                <th>Source de l'Alerte</th>
                                <th>Chercher</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td>
                                    <select class="form-select form-select-sm">
                                        <option>Tous</option>
                                        <option>France</option>
                                        <option>Belgique</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm">
                                        <option>Toutes</option>
                                        <option>Paris</option>
                                        <option>Lyon</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" class="form-control form-control-sm" />
                                </td>
                                <td>
                                    <select class="form-select form-select-sm">
                                        <option>Toutes</option>
                                        <option>Aide alimentaire</option>
                                        <option>Hébergement</option>
                                        <option>Transport</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm">
                                        <option>Toutes</option>
                                        <option>Particuliers</option>
                                        <option>Associations</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Rechercher</button>
                                </td>
                            </tr>
                        </tbody> --}}
                    </table>
                </div>
                
                <!-- Message d'affichage -->
                <p class="fst-italic text-muted">
                    Affichage ici des Appels à l'aide lancées par les auteurs des incidents
                </p>
            </div>
        </div>
    </section>
@endsection

