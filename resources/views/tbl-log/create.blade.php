@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tbl Log
@endsection

@section('content')
<br> <br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tbl Log</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tbl-logs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tbl-log.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
