@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'Câu hỏi',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
           
                <div class="card">
                    <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">DANH SÁCH CÂU HỎI</h4>
                        <a href="{{ route('Question-Create-get') }}" class="btn btn-fill btn-success">Thêm Câu Hỏi</a>
                    </div>
                </div>
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Chủ Đề
                                        </th>
                                        <th>
                                            Câu Hỏi
                                        </th>
                                        <th>
                                            A
                                        </th>
                                        <th>
                                            B
                                        </th>
                                        <th>
                                            C
                                        </th>
                                        <th>
                                            D
                                        </th>
                                        <th>
                                            Đáp Án Đúng
                                        </th>
                                        <th>
                                            Trạng Thái
                                        </th>
                                        <th>
                                           Ngày tạo
                                        </th>
                                        </tr>
                                </thead>
                               
                                @foreach($lst as $p)
                                    <div class="namePage">   
                                        @csrf    
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>
                                            <p>{{$p->id}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->category}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->question}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->a}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->b}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->c}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->d}}</p>
                                        </td>
                                        <td>
                                            <p>
                                            @if($p->correct_answer==1)
                                                {{$p->a }}
                                            @elseif($p->correct_answer==2)
                                                {{$p->b }}
                                            @elseif($p->correct_answer==3)
                                                {{$p->c }}
                                            @elseif($p->correct_answer==4)
                                                {{$p->d }}
                                            
                                            @endif
                                            </p>
                                        </td>
                                        <td>
                                            <p>{{$p->status==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->created_at}}</p>
                                        </td>
                                       </div>
                                       
                                    <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Sửa</a>  
                                            <a class="dropdown-item" href="#">Xoá</a>             
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                                
                            </table>
                    </div>
                </div>
        </div>
    </div>
@endsection
