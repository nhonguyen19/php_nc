@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'Edit Question',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">EDIT QUESTION</h4>
                    </div>
                    <form method="post" action="{{ route('questions.update',['question'=>$p]) }}" enctype  = "multipart/form-data" autocomplete="off">
                        
                        <div class="card-body">
                                @csrf
                                @method('PUT')
                            <div class="form-group" >
                                <label for="country-floating">Toppic</label>
                                <select name='category' class="form-control">
                                    @foreach($lst as $item)
                                    <option>{{ $item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Question') }}</label>
                                <input name="question" value="{{old('question', $p->question)}}" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 1') }}</label>
                                <input name="a" value="{{old('a', $p->a)}}" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 2') }}</label>
                                <input name="b" value="{{old('b', $p->b)}}" class="form-control">
                            </div>
                           

                            <div class="form-group">
                                <label>{{ __('Answer 3') }}</label>
                                <input name="c" value="{{old('c', $p->c)}}" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 4') }}</label>
                                <input name="d" value="{{old('d', $p->d)}}" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Select Answer') }}</label>
                                <select name="correct_answer" class="form-control" >
                                        <option value="{{old('question', $p->id)}}" class="text-danger" > 
                                          @if(old('question',$p->correct_answer)==1)
                                          {{old('question',$p->a)}}
                                          @elseif(old('question',$p->correct_answer)==2)
                                          {{old('question',$p->b)}}
                                          @elseif(old('question',$p->correct_answer)==3)
                                          {{old('question',$p->c)}}
                                          @elseif(old('question',$p->correct_answer)==4)
                                          {{old('question',$p->d)}}
                                          @endif  
                                        </option>
                                        <option value='1' class="text-danger">{{old('question',$p->a)}}</option>
                                        <option value='2' class="text-danger">{{old('question',$p->b)}}</option>
                                        <option value='3' class="text-danger">{{old('question',$p->c)}}</option>
                                        <option value='4' class="text-danger">{{old('question',$p->d) }}</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Active </option>
                                <option value='0' class="text-danger">Inactive</option>
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

