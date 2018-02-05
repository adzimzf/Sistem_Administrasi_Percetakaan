@extends("layouts.app")

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <div class="pull-right">
                                <input class="form-control datepicker" id="inputPassword3" placeholder="text" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nomer Bon</th>
                                        <th>Nama</th>
                                        <th>Process</th>
                                        <th>Pembayaran</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($data as $data)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                            if ($data->total2 != 0) {
                                                $persen = round(($data->uang_muka/$data->total2)*100);
                                                if ($persen < 30) {
                                                    echo "<span class=\"badge bg-red\">$persen%</span></td>";
                                                }elseif ($persen < 70) {
                                                    echo "<span class=\"badge bg-orange\">$persen%</span></td>";
                                                }elseif ($persen < 90) {
                                                    echo "<span class=\"badge bg-blue\">$persen%</span></td>";
                                                }elseif ($persen == 100) {
                                                    echo "<span class=\"badge bg-green\">$persen%</span></td>"    ;
                                                }
                                            }else{
                                                echo "<span class=\"badge bg-red\">0%</span></td>"    ;
                                            }
                                            @endphp
                                        <td>
                                            <a href="{{url('/kasir/process/'.$data->id)}}" class="btn btn-primary">Process</a>
                                            <a href="{{url('/kasir/detail/'.$data->id)}}" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection

@push('css')
    {!! Html::style('/css/pages/designer/form.css') !!}
    {!! Html::style('/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') !!}
@endpush

@push('scripts')
    {!! Html::script('/js/pages/designer/form.js') !!}
    {!! Html::script('/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}
@endpush