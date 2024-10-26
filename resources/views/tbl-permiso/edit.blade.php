@extends('layouts.app')

@section('title')
   EDITAR PERMISOS
@endsection

@section('content')
    <section class="content container-fluid mt-5">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar permisos</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tbl-permisos.update', $tblPermiso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tbl-permiso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
