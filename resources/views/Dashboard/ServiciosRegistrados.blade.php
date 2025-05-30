@extends('../Layout/Layout')
@section('DataTablecss')
    <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('ServiciosRegistrados')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Servicios Registrados</h4>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                    <th>Dirección</th>
                                    <th>Ver más</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>Grupo Castores</th>
                                    <th>12/6/20025</th>
                                    <th>Tepotzotlan</th>
                                    <th><a href="#" class="btn btn-circle btn-primary">+</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
@section('Scripts')
    <script src="{{asset('js/DataTables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/DataTables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/DataTables/datatables-demo.js')}}"></script>
@endsection