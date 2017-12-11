@extends("layouts.app")

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Nomer Bon :SKK-123-2017-YUYU</h3>
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
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputEmail3" placeholder="Nama Customer" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">No Telp/Hp/Email</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPassword3" placeholder="Nomer Telepon" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Data Print</label>

                                <div class="col-sm-10 no-padding">
                                    <div class="row" id="wrap-data-print">
                                        <div class="col-md-12 div-data-print">
                                            <div class="col-md-11">
                                                <div class="col-sm-1 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">Sumber</label>
                                                        <select name="" id="" class="form-control flat">
                                                            <option value="">File</option>
                                                            <option value="">CD</option>
                                                            <option value="">Dll</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">File</label>
                                                        <input class="form-control" id="exampleInputEmail1" placeholder="Pilih File" type="file">
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">Hal</label>
                                                        <input class="form-control" id="exampleInputEmail1" placeholder="Jumlah Halaman" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">@print</label>
                                                        <input class="form-control" id="exampleInputEmail1" placeholder="" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">Jenis Kertas</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">A3</option>
                                                            <option value="">A2</option>
                                                            <option value="">A1</option>
                                                            <option value="">A</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">Ukuran Kertas</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">A3</option>
                                                            <option value="">A2</option>
                                                            <option value="">A1</option>
                                                            <option value="">A</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">Duplex</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Short</option>
                                                            <option value="">Long</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 no-padding">
                                                    <div class="form-group cuz-form-group">
                                                        <label for="exampleInputEmail1">Box</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-1 div-delete">
                                                <div class="form-group cuz-form-group form-delete">
                                                    <button class="btn btn-danger btn-delete">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!-- ./data print -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                <div class="col-sm-12">
                                    <button class="btn btn-primary pull-right" id="add-data-print">Tambah</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Simpan</button>
                        </div>
                        <!-- /.box-footer -->
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