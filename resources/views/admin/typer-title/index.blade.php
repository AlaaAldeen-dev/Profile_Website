@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">

            <h1>Typer Title</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Title</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.typer-title.create') }}" class="btn btn-primary">Create New <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-striped" id="table-sub">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($typerTitles as $typerTitle)
                                            <tr>
                                                <td>{{$typerTitle->id}}</td>
                                                <td>{{$typerTitle->title}}</td>

                                                <td>
                                                    <a href="{{route('admin.typer-title.edit',$typerTitle->id)}}"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="{{route('admin.typer-title.destroy',$typerTitle->id)}}"
                                                        class="btn btn-danger delete-item"><i
                                                            class="fas fa-trash-alt"></i></a>
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
    </section>
@endsection

@push('scripts')
    <script>
            $("#table-sub").dataTable({
                "columnDefs": [{
                    "sortable": false,
                    "targets": [2,3]
                }],
                "order":[
                    [0, 'desc']
                ]
            });

    </script>
@endpush
