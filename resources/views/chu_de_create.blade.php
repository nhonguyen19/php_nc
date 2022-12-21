@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'category',
    'namePage' => 'TOPIC',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">TOPIC LIST</h4>
                    </div>
                    <form method="post" action="{{ route('chu_des.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Topic name') }}</label>
                                    <input type="" name="name" value="{{old('name')}}" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>{{ __('Status') }}</label>
                                    <select name="status" value="{{old('status')}}" class="form-control" >
                                    <option value='1' class="text-danger">Acctive</option>
                                    <option value='0' class="text-danger">InActive</option>
                                    </select>
                                </div>
                                 <br>@if($errors->has('name')) {{$errors->first('name')}} <br>@endif     
                        </div>
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('ADD')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection