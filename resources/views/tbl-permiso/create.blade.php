@extends('layouts.app')

@section('title')
    CREAR PERMISO
@endsection

@section('content')
    <section class="content container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear permisos</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tbl-permisos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tbl-permiso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
