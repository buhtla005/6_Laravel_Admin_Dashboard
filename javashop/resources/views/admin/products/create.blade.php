@extends('admin.layouts.master')

@section('page')

    Add Product

@endsection


@section('content')

    <div class="row">
        <div class="col-lg-10 col-md-10">
            @include('admin.layouts.message')
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Product</h4>
                </div>

<!--
                @if($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
-->

                <div class="content">
                <!-- jer koristimo resource Rutu ici ce direktno na create metodu -->
                    {!! Form::open(['url' => 'products', 'files'=>'true'])!!}
                    <div class="row">
                        <div class="col-md-12">
                           @include('admin.products._fields')

                           <div class="form-group">
                                {{Form::submit('Add Product', ['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection