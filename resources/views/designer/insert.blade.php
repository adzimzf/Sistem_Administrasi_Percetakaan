@extends("layouts.app")

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form SPK</h3>
                        <div class="pull-right">
                            <div class="pull-left">
                                <label class="control-label">Date</label>
                            </div>

                            <div class="pull-right">
                                <input class="form-control" id="inputPassword3" placeholder="text" type="password">
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
                                    <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">No Telp/Hp/Email</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPassword3" placeholder="text" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Data Print</label>

                                <div class="col-sm-8">
                                    <div class="col-sm-2 no-padding">
                                        <div class="form-group cuz-form-group">
                                            <label for="exampleInputEmail1">Sumber</label>
                                            <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 no-padding">
                                        <div class="form-group cuz-form-group">
                                            <label for="exampleInputEmail1">File</label>
                                            <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 no-padding">
                                        <div class="form-group cuz-form-group">
                                            <label for="exampleInputEmail1">Hal</label>
                                            <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 no-padding">
                                        <div class="form-group cuz-form-group">
                                            <label for="exampleInputEmail1">@print</label>
                                            <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 no-padding">
                                        <div class="form-group cuz-form-group">
                                            <label for="exampleInputEmail1">Jenis Kertas</label>
                                            <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 no-padding">
                                        <div class="form-group cuz-form-group">
                                            <label for="exampleInputEmail1">Ukuran Kertas</label>
                                            <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-1">
                                    <div class="form-group cuz-form-group">
                                        <button class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ./data print -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label"></label>

                                <div class="col-sm-2 col-sm-offset-8">
                                    <button class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Sign in</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection