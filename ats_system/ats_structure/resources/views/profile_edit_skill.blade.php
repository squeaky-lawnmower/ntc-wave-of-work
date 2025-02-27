@extends('layout')
@section('title', 'Edit Skills')
@section('content')
    <div><p>&nbsp;</p></div>
    <div class='mt-5'>
        @if(session()->has('error'))
            <div class='alert alert-danger'>{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
            <div class='alert alert-success'>{{session('success')}}</div>
        @endif
    </div>
    <div class="card-container ms-auto me-auto mt-10 mb-10 col-sm-6">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1">
                <h3><a href="/profile" class="anchor-regular"><i class="fa fa-angle-left">&nbsp;&nbsp;</i></a></h3>
            </div>
            <div class="col-10 col-sm-10 col-md-10">
                <span>
                    <h1 class="text-darkbluegreen text-center">Edit Skills</h1>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background: #FAFAFA;" class="mt-5 mb-5">            
                <form action="{{route('registration.post')}}" method="POST">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-11  col-sm-11 col-md-11">
                            <input type="text" class="form-control" name="company"  value="">
                            @if($errors->has('company'))
                            <div class="text-danger">{{ $errors->first('company') }}</div>
                            @endif
                        </div>
                        <div class="col-1  col-sm-1 col-md-1 mb-3">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12" style="background: #FAFAFA;" class="mt-5 mb-5">            
                <form action="{{route('registration.post')}}" method="POST">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-11  col-sm-11 col-md-11 justify-content-center">
                            <h6>Marksmanship</h6>
                        </div>
                        <div class="col-1  col-sm-1 col-md-1 mb-3">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <hr style="color: #C3C3C3"/>
                    <div class="row">
                        <div class="col-11  col-sm-11 col-md-11 justify-content-center">
                            <h6>Patrolling</h6>
                        </div>
                        <div class="col-1  col-sm-1 col-md-1 mb-3">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <hr style="color: #C3C3C3"/>
                    <div class="row">
                        <div class="col-11  col-sm-11 col-md-11 justify-content-center">
                            <h6>Navigation</h6>
                        </div>
                        <div class="col-1  col-sm-1 col-md-1 mb-3">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <hr style="color: #C3C3C3"/>
                    <div class="row">
                        <div class="col-11  col-sm-11 col-md-11 justify-content-center">
                            <h6>Knot Tying</h6>
                        </div>
                        <div class="col-1  col-sm-1 col-md-1 mb-3">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-8"><h3>&nbsp;</h3></div>
@endsection