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

                                <tr>
                                    <td>1.</td>
                                    <td>SKK-123-2017-YUYU</td>
                                    <td>Sukarni</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-red">55%</span></td>
                                    <td>
                                        <button class="btn btn-primary">Process</button>
                                        <button class="btn btn-primary">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>SKK-123-2017-YUYU</td>
                                    <td>Sukarni</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-yellow">70%</span></td>
                                    <td>
                                        <button class="btn btn-primary">Process</button>
                                        <button class="btn btn-primary">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>SKK-123-2017-YUYU</td>
                                    <td>Sukarni</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-blue">30%</span></td>
                                    <td>
                                        <button class="btn btn-primary">Process</button>
                                        <button class="btn btn-primary">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>SKK-123-2017-YUYU</td>
                                    <td>Sukarni</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-green">90%</span></td>
                                    <td>
                                        <button class="btn btn-primary">Process</button>
                                        <button class="btn btn-primary">Detail</button>
                                    </td>
                                </tr>
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