@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'category',
    'namePage' => 'TOPIC',
])

@section('content')
    <header></header>
    <script language="JavaScript" type="text/javascript">
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xóa');
        }
        function checkStatus() {
            return confirm('Không thể xóa câu hỏi này vì đang được sử dụng!!');
        }
    </script>
    </header>

    <div class="panel-header panel-header-sm">
    </div>

    <div class="content">

        <div class="row">

            <div class="card">
                <div class="card-body">

           
                <div class="card">

                    <div class="card-body">

                    <div class="col-8">
                        <h4 class="card-title">TOPIC QUESTION LIST</h4>
                        <a href="{{ route('chu_des.create') }}" class="btn btn-fill btn-success">ADD TOPIC</a>
                    </div>

                </div>

                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Topic
                            </th>update
                            <th>
                                Status
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                    </thead>

                    @foreach ($lst as $c)
                        <div class="namePage">
                            @csrf
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p> {{ $c->id }}</p>

                    <div class="card">
                        <h5 class="title">Chủ đề câu hỏi</h5>
                        <div class="table-responsive">

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
                                            <p> {{ $p->id}}</p>
                                        </td>
                                        <td>
                                            <p>   {{ $p->name }}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->status==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                                        </td>
                                        <td>
                                            <p>   {{ $p->created_at }}</p>
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
                                    <td>
                                        <p> {{ $c->name }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $c->status == 1 ? 'Active' : 'InActive' }}</p>
                                    </td>
                                    <td>
                                        <p> {{ $c->created_at }}</p>
                                    </td>
                        </div>

                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="{{ route('chu_des.edit', ['chu_de' => $c->id]) }}">Edit</a>
                                    <form method="post" action="{{ route('chu_des.destroy', ['chu_de' => $c->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        @foreach($lstQuestion as $d)
                                        @if($c->status == 1 && $d->category == $c->name)
                                        @php
                                        $xoa = 0
                                        @endphp
                                        @break
                                        @elseif($c->status == 1 && $d->category != $c->name)
                                        @php
                                        $xoa = 1
                                        @endphp    
                                        @endif    
                                      @endforeach
                                      @if($xoa = 0)
                                      <input value="Delete" onclick="return checkStatus()" class="dropdown-item" readonly>
                                      @elseif($xoa = 1)
                                        <input type="submit" value="Delete" onclick="return confirmDelete()" class="dropdown-item">     
                             
                                      @endif
                                </form>
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
