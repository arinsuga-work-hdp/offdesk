@extends('layouts.appbo')

@section('content_title', 'Product Edit')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ url()->previous() }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<li class="nav-item">
    <a onclick="event.preventDefault(); document.getElementById('frmData').submit();"
       class="nav-link" href="#">
        <i class="fas fa-lg fa-save"></i>
    </a>
</li>

@endsection

@section('content')

<form role="form" id="frmData" method="POST" action="{{ route('product.update', ['product' => $viewModel->data->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('bo.product.data-field-items')
</form>

@endsection

@section('js')

    @include('bo.product._script')

@endsection
