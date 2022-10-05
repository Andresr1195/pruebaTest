@extends('layouts.estructura')

    @section('title', 'Precio Bitcoin')

    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('welcome.css')}}">
    @endsection

    @section('body')
        <div class="container p-5">
            <div class="row p-5">
                {{-- Version Escritorio --}}
                <div class="d-none d-sm-none d-md-block">
                    <div class="card p-5">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-lg-6 col-sm-12">
                                    <img class="px-5" src="https://s2.coinmarketcap.com/static/img/coins/200x200/1.png" alt="">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="row text-center">
                                        <h3>Precio Bitcoin</h3> 
                                    </div>
                                    <div class="row text-center mt-5 p-3 rounded tarjetas" style="background-color: gray; color: white">
                                        <h1 class="showAmount"></h1> 
                                    </div>
                                    <div class="row text-center mt-3 px-5">
                                        <a class="btn btn-sm btn-warning" href="{{route('bitcoin-historial')}}"> Ver Historial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Version Movil --}}
                <div class="d-block d-sm-block d-md-none">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-6 col-sm-12">
                                <img class="img-fluid mx-auto d-block" src="https://s2.coinmarketcap.com/static/img/coins/200x200/1.png" alt="">
                            </div>
                            <div class="col-lg-6 col-sm-12 mt-1">
                                <div class="row text-center">
                                    <h5>Precio Bitcoin</h5> 
                                </div>
                                <div class="row text-center mt-5 p-3 rounded tarjetas" style="background-color: gray; color: white">
                                    <h5 class="showAmount"></h5> 
                                </div>
                                <div class="row text-center mt-3 px-5">
                                    <a class="btn btn-sm btn-warning" href="{{route('bitcoin-historial')}}"> Ver Historial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @section('scripts-page')
            <script src="{{asset('js/welcome.js')}}"></script>
        @endsection

    @endsection

    
