@extends('layout')
@section('title', 'Education')
@section('content')
    <div><p>&nbsp;</p></div>
    <div class="card-container ms-auto me-auto mt-10 mb-10 col-sm-6">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1">
                <h3><a href="{{route('profile', ['id' => auth()->user()->id])}}" class="anchor-regular"><i class="fa fa-angle-left">&nbsp;&nbsp;</i></a></h3>
            </div>
            <div class="col-11 col-sm-11 col-md-11">
                <span>
                    <h1 class="text-darkbluegreen text-center">Education</h1>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background: #FAFAFA;" class="mt-5 mb-5">            
                <form action="{{route('profile.edit.experience.post', ['id' => auth()->user()->id])}}" method="POST">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-12  col-sm-12 col-md-12">
                            <label class="form-label">School</label>
                            <input type="text" class="form-control" name="school"  value="">
                            @if($errors->has('school'))
                            <div class="text-danger">{{ $errors->first('school') }}</div>
                        @endif
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12  col-sm-12 col-md-12">
                            <label class="form-label">Degree</label>
                            <input type="text" class="form-control" name="degree" value="">
                            @if($errors->has('degree'))
                                <div class="text-danger">{{ $errors->first('degree') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3  col-sm-3 col-md-3">
                            <select class="form-select" name="start_month">
                                <option selected disabled>- Start Month -</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                            </select>
                        </div>
                        <div class="col-3  col-sm-3 col-md-3">
                            <select class="form-select" name="start_year">
                                <option selected disabled>- Start Year -</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                            </select>
                        </div>
                        <div class="col-3  col-sm-3 col-md-3">
                            <select class="form-select" name="end_month">
                                <option selected disabled>- End Month -</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                            </select>
                        </div>
                        <div class="col-3  col-sm-3 col-md-3">
                            <select class="form-select" name="end_year">
                                <option selected disabled>- End Year -</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  col-sm-12 col-md-12 mt-3 mb-3">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($experiences as $experience)
        <hr style="color: #C3C3C3"/>    
        <div class="row">
                <div class="col-12" class="mt-5 mb-5">            
                    <form action="{{route('profile.edit.experience.post', ['id' => auth()->user()->id, 'expId' => $experience->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mt-2">
                            <div class="col-12  col-sm-12 col-md-12">
                                <label class="form-label">Company</label>
                                <input type="text" class="form-control" name="company"  value="{{$experience->company}}">
                                @if($errors->has('company'))
                                <div class="text-danger">{{ $errors->first('company') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12  col-sm-12 col-md-12">
                                <label class="form-label">Position</label>
                                <input type="text" class="form-control" name="position" value="{{$experience->position}}">
                                @if($errors->has('position'))
                                    <div class="text-danger">{{ $errors->first('position') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12  col-sm-12 col-md-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows=4>{{$experience->description}}</textarea>
                                @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>                    
                        <div class="row mt-2">
                            <div class="col-3  col-sm-3 col-md-3">
                                <select class="form-select" name="start_month">
                                    <option selected disabled>- Start Month -</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                </select>
                            </div>
                            <div class="col-3  col-sm-3 col-md-3">
                                <select class="form-select" name="start_year">
                                    <option selected disabled>- Start Year -</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                </select>
                            </div>
                            <div class="col-3  col-sm-3 col-md-3">
                                <select class="form-select" name="end_month">
                                    <option selected disabled>- End Month -</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                </select>
                            </div>
                            <div class="col-3  col-sm-3 col-md-3">
                                <select class="form-select" name="end_year">
                                    <option selected disabled>- End Year -</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  col-sm-12 col-md-12 mt-3 mb-3">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
    <div class="mt-8"><h3>&nbsp;</h3></div>
@endsection