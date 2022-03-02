@extends('layouts.app')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <h5 class="page-title">Dashboard</h5>
                        <ul class="breadcrumb ml-2">
                            <li class="breadcrumb-item active">Centre</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title float-left">Centre</h4>
                        <div class="text-right">
                            <a href="{{ route('centre.create') }}" class="btn btn-dark px-3">Ajout d’un
                                centre</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                                <thead class="thead-light">
                                    <th>La description</th>
                                    <th>Communes</th>
                                    <th>Région</th>
                                    <th>Département</th>
                                    <th>Arrondissement</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($centres as $item)
                                        <tr>
                                            <td>
                                                {{ $item->description }}
                                            </td>
                                            <td>
                                                {{ $item->communes }}
                                            </td>
                                            <td>{{ $item->regions }}</td>
                                            <td>{{ $item->departments }}</td>
                                            <td>{{ $item->arrondissements }}</td>
                                            <td>
                                                <a class="text-dark"
                                                    href="{{ route('centre.show', ['id' => $item->id, 'rt' => time()]) }}"><i
                                                        class="feather-eye"></i></a>
                                                <a href="{{ route('centre.edit', ['id' => $item->id]) }}"
                                                    class="mx-2 text-dark"><i class="feather-edit"></i></a>
                                                <a class="text-dark"
                                                    onclick="return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');"
                                                    href="{{ route('centre.delete', ['id' => $item->id]) }}"><i
                                                        class="feather-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
