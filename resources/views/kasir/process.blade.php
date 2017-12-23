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
                           <div class="col-md-12 my-data-detail">
                               <div class="col-md-2 bold">
                                   Nama
                               </div>
                               <div class="col-md-10">
                                   Adzim zul fahmi
                               </div>
                           </div>
                            <div class="col-md-12 my-data-detail">
                                <div class="col-md-2 bold">
                                    Nomer Telepon/ Email
                                </div>
                                <div class="col-md-10">
                                    087830250895
                                </div>
                            </div>

                            <div class="col-md-12 my-data-detail">
                                <div class="col-md-2 bold">
                                    Detail
                                </div>
                            </div>

                            <div class="col-md-12 col-off">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama</th>
                                            <th>Banyaknya</th>
                                            <th>Jenis Bahan</th>
                                            <th>Harga</th>
                                            <th style="width: 150px">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Spanduk 1x2</td>
                                            <td class="qty">2</td>
                                            <td>FLEXY CHINA</td>
                                            <td>
                                                <input class="form-control harga-satuan form-input-khusus" type="number" value="5000">
                                            </td>
                                            <td class="sum text-right"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Spanduk 1x2</td>
                                            <td class="qty">4</td>
                                            <td>FLEXY CHINA</td>
                                            <td>
                                                <input class="form-control harga-satuan form-input-khusus" type="number" value="5000">
                                            </td>
                                            <td class="sum text-right"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-right bold">Biaya Seting</td>
                                            <td id="sumTotal" class="text-right">10000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right bold">Biaya Edit</td>
                                            <td id="sumTotal" class="text-right">10000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right bold">Total</td>
                                            <td id="sumTotal" class="text-right">10000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right bold">Uang Muka</td>
                                            <td >
                                                <input id="uang_muka" class="form-control text-right form-input-khusus" type="text" value="1000">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right bold">Sisa</td>
                                            <td id="sumSisa" class="text-right">10000</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>


                        </div>
                        <!-- box footer -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Simpan</button>
                        </div>
                        <!-- ./box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection

@push('css')
    {!! Html::style('/css/pages/kasir/process.css') !!}
    {!! Html::style('/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') !!}
@endpush

@push('scripts')
    {!! Html::script('/js/pages/kasir/process.js') !!}
    {!! Html::script('/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}
@endpush