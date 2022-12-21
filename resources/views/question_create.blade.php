@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'QUESTION',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">ADD QUESTION</h4>
                    </div>
                    <form method="post" action="{{ route('questions.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf
                            <div class="form-group" >
                                <label for="country-floating">Topic</label>
                                <select name='category' class="form-control">
                                    @foreach($lsType as $item)
                                    <option>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Question') }}</label>
                                <input type="" name="question" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 1') }}</label>
                                <input type="" name="a" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 2') }}</label>
                                <input type="" name="b" class="form-control">
                            </div>
                           

                            <div class="form-group">
                                <label>{{ __('Answer 3') }}</label>
                                <input type="" name="c" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 4') }}</label>
                                <input type="" name="d" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Select Answer') }}</label>
                                <select name="correct_answer" class="form-control" >
                                        <option value='1' class="text-danger">Answer 1</option>
                                        <option value='2' class="text-danger">Answer 2</option>
                                        <option value='3' class="text-danger">Answer 3</option>
                                        <option value='4' class="text-danger">Answer 4</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Active</option>
                                <option value='0' class="text-danger">InActive</option>
                                </select>
                            </div>
                            
                            </div>
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('ADD ')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection

