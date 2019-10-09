@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proveedor</div>
                <div class="card-body">
                    <p><strong>Nombre  </strong>{{ $provider->name }}</p>
                    <p><strong>Email  </strong>{{ $provider->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
