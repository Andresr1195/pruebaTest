@extends('layouts.estructura')

    @section('title', 'Historial Bitcoin')

    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/datatable/datatables.min.css')}}">
    @endsection

    @section('body')
        <div class="container p-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between mt-1">
                                <div class="mt-1">
                                    <h5>Historico Bitcoin</h5>
                                </div>
                                <div class="">
                                    <a class="btn btn-sm btn-warning" href="{{route('bitcoin-index')}}"> Inicio</a>
                                </div>
                              </div>
                        </div>
                        <div class="card-content mt-2">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table data-table text-center table-striped table-bordered rounded">
                                        <thead>
                                            <tr>
                                                <th>Criptomoneda</th>
                                                <th>Monto</th>
                                                <th>Moneda</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>              
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        @section('scripts-page')

            <script src="{{asset('vendors/js/datatable/vfs_fonts.js')}}"></script>
            <script src="{{asset('vendors/js/datatable/datatables.min.js')}}"></script>
            <script src="{{asset('vendors/js/datatable/datatables.buttons.min.js')}}"></script>
            <script src="{{asset('vendors/js/datatable/buttons.html5.min.js')}}"></script>
            <script src="{{asset('vendors/js/datatable/buttons.print.min.js')}}"></script>
            <script src="{{asset('vendors/js/datatable/buttons.bootstrap.min.js')}}"></script>
            <script src="{{asset('vendors/js/datatable/datatables.bootstrap4.min.js')}}"></script>

            <script src="{{asset('js/history.js')}}"></script>
        @endsection

    @endsection

    
