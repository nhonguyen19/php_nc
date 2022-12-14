@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'chu_de',
    'namePage' => 'Chủ đề câu hỏi',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card">
                        <h5 class="title">Chủ đề câu hỏi</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Chủ đề
                                    </th>
                                </thead>
                                @foreach ($lst as $p)
                                <tbody>
                                    <tr>
                                        <td>
                                           {{ $p->id}}
                                        </td>
                                        <td>
                                            {{ $p->name }}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
