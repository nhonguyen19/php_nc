@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'Câu hỏi',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">Sửa câu hỏi</h4>
                    </div>
                    <form method="post" action="{{ route('Question-Edit-put',['question'=>$p]) }}" enctype  = "multipart/form-data" autocomplete="off">
                                @csrf
                                @method('PUT')
                                @foreach($lsType as $question)
                                @if($question->id==old('question',$p->id))
                                <input type="hidden" value="{{$question->id}}" name ="id"  class="form-control" >
                    <div class="card-body">                                
                            <div class="form-group" >
                                <label for="country-floating">Category</label>
                                <select name='category' class="form-control">
                                    @foreach($lsType as $item)
                                    <option>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Câu Hỏi') }}</label>
                                <input name ="question" value="{{old('question', $p->question)}}"   class="form-control" >
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 1') }}</label>
                                <input name ="question" value="{{old('question', $p->a)}}"  class="form-control" >
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 2') }}</label>
                                <input name ="question" value="{{old('question', $p->b)}}" class="form-control">
                            </div>
                           

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 3') }}</label>
                                <input name ="question" value="{{old('question', $p->c)}}" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 4') }}</label>
                                <input name ="question" value="{{old('question', $p->d)}}" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Chọn Đáp Án') }}</label>
                                <select name="correct_answer" value="{{old('question', $p->d)}}" class="form-control" >
                                        <option value="{{old('question', $p->id)}}" class="text-danger" >Đáp án {{old('question',$p->correct_answer)}}</option>
                                        <option value='1' class="text-danger">Đáp án 1</option>
                                        <option value='2' class="text-danger">Đáp án 2</option>
                                        <option value='3' class="text-danger">Đáp án 3</option>
                                        <option value='4' class="text-danger">Đáp án 4</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label>{{ __('Trạng thái') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Hoạt động</option>
                                <option value='0' class="text-danger">Ngưng hoạt động</option>
                                </select>
                            </div>
                            
                            </div>
                            @endif
                        @endforeach
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('Sửa')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection 

