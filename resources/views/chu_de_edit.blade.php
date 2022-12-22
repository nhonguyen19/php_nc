@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'category',
    'namePage' => 'Edit Topic',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">EDIT TOPIC</h4>
                    </div>
                    <form method="post" action="{{ route('chu_des.update',['chu_de'=>$lst]) }}" enctype= "multipart/form-data" autocomplete="off">
                            <div class="card-body">
                                @csrf   
                                @method('PUT')  
                            <div class="form-group">    
                                <label>{{ __('Topic Name') }}</label>
                                <input name="name" value="{{old('name', $lst->name)}}" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Active </option>
                                <option value='0' class="text-danger">InActive</option>
                                </select>
                            </div>
                            
                            </div>
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('EDIT AND UPDATE')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection

