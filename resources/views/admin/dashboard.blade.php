@extends('layouts.adminLayout')

@section('content')
<div class="card-header">
    <h4 class="mb-0">Icônes Disponibles</h4>
</div>
<div class="card-body ">
    <div class="row mt-3">
        <div class="col-lg-12"> <!-- Changer col-lg-6 à col-lg-12 -->
            <div class="card"> <!-- Couleur de fond blanche -->
                <div class="card-body">
                    <h5 class="card-title">Basic Table</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Row-->
</div>
@endsection
