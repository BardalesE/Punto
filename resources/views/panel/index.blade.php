@extends('layouts.app')

@section('title', 'Panel')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        body {
            font-family: 'Roboto', sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: none;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card-text {
            color: #666;
        }

        .card-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .text-primary {
            color: #007bff;
        }

        .text-secondary {
            color: #6c757d;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Panel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Panel</li>
        </ol>
        <div class="row">
            <!-- Clientes -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-users card-icon"></i><span class="card-title">Clientes</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Cliente;
                                
                                $clientes = count(Cliente::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $clientes }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('clientes.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Categorías -->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-bullhorn card-icon"></i><span class="card-title">Categorias</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Categoria;
                                
                                $categorias = count(Categoria::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $categorias }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('categorias.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Marcas -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-bullhorn card-icon"></i><span class="card-title">Marcas</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Marca;
                                
                                $marcas = count(Marca::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $marcas }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('marcas.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Modulos -->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-box-archive card-icon"></i><span class="card-title">Módulos</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Presentacione;
                                
                                $presentaciones = count(Presentacione::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $presentaciones }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('presentaciones.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Productos -->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-box-archive card-icon"></i><span class="card-title">Productos</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Producto;
                                
                                $productos = count(Producto::all());
                                ?>

                                <p class="text-center fw-bold fs-4">{{ $productos }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('productos.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Proveedores -->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-box-archive card-icon"></i><span class="card-title">Proveedor</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Proveedore;
                                
                                $proveedores = count(Proveedore::all());
                                ?>

                                <p class="text-center fw-bold fs-4">{{ $proveedores }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('proveedores.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!----Users--->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-box-archive card-icon"></i><span class="card-title">Usuarios</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\User;
                                
                                $users = count(User::all());
                                ?>

                                <p class="text-center fw-bold fs-4">{{ $users }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('users.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>



            <!-- Ventas -->

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-primary mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fas fa-box-archive card-icon"></i><span class="card-title">Ventas</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\Venta;
                                
                                $ventas = count(Venta::all());
                                ?>

                                <p class="text-center fw-bold fs-4">{{ $ventas }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-primary stretched-link" href="{{ route('ventas.index') }}">Ver más</a>
                        <div class="small text-primary"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!---script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script--->
    <!---script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script--->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
@endpush
