@extends('layouts.app')
@section('title')
    Cuentas
@endsection
@section('template_title')
    Cuentas
@endsection

@section('content')
    <br>
    <br>
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuentas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th >ID</th>
                                        <th >Nombre</th>
                                        <th >Descripcion</th>
                                        <th >Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->withQueryString()->links() !!}
            </div>
        </div>
    </div>

@endsection