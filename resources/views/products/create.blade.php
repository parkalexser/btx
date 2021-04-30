@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Art:</strong>
                    <input type="text" name="art" class="form-control" placeholder="Art">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <select class="form-control" name="status" id="cars">
                        <option value="available">available</option>
                        <option value="unavailable">unavailable</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data:</strong>
                    <textarea class="form-control" style="height:50px" name="data"
                              placeholder="key1 => value1, key2 => value2,"></textarea>
                </div>
            </div>
            {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                {{--<div class="form-group">--}}
                    {{--<strong>Location:</strong>--}}
                    {{--<input type="text" name="location" class="form-control" placeholder="Location">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                {{--<div class="form-group">--}}
                    {{--<strong>Cost:</strong>--}}
                    {{--<input type="number" name="cost" class="form-control" placeholder="Cost">--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection