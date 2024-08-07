@extends('layouts.appbo')

@section('content_title', 'Founder Booking List')

@section('style')

<style>
    
</style>

@endsection

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('bookfounder.create') }}">
        <i class="fas fa-lg fa-plus"></i>
    </a>
</li>

<li class="nav-item">
    <a id="btnSubmit" class="nav-link" href="#">
        <i class="fas fa-lg fa-search"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('bo.bookfounder.data-list-filters')
    </div>
@endsection

@section('content')

        <nav class="navbar navbar-expand ">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookfounder.index.today') }}" style="font-weight: bold;">
                        Today
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookfounder.index.cancel') }}" style="font-weight: bold;">
                        Cancel
                    </a>
                </li>

                <li class="nav-item" style="border-bottom: 5px solid red;">
                    <a class="nav-link" href="{{ route('bookfounder.index.custom') }}" style="font-weight: bold;">
                        Custom
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookfounder.index') }}" style="font-weight: bold;">
                        All
                    </a>
                </li>

            </ul>

        </nav>

        @if (!isset($viewModel->data->datalist))
        <!-- Form Custom Search -->
        <div>

            <form role="form" id="frmData" method="POST" action="{{ route('bookfounder.index.custom.post') }}" enctype="multipart/form-data">
                @csrf

                @if ($customError !== null)

                <div class="alert alert-danger alert-dismissible" style="width: 50%;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <p>{{$customError}}</p>
                </div>

                @endif

                <div style="display: flex; justify-content=center;">
                    @include('bo.bookroom.index-custom-fields')
                </div>
            </form>

        </div>        
        @endif

        @if (isset($viewModel->data->datalist))
            <div style="margin-top: 10px;">
                @include('bo.bookroom.index-custom-list')
            </div>
        @endif


@endsection

@section('js')

    @include('bo.bookfounder._script')
    @include('bo.bookroom._script_list')

@endsection

