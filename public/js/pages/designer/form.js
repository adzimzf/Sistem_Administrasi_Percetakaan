$(function () {
    date = new Date();
    tanggal = date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate();
    $('.datepicker').val(tanggal);
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoClose: true,
    });

    $("#add-data-print").click(function () {
        data = $(".div-data-print:last").clone();
        $("#wrap-data-print").append(data);
    });

    $("#wrap-data-print").on("click", ".btn-delete", function() {
        $(this).parents(".div-data-print").remove();
    });

    //for banner jenis kertas
    $("#wrap-data-print").on("change",".jenis-kertas",function () {
        if($(this).val() == "5" || $(this).val() == "6") {
            $(this).parents(".div-data-print").find(".ukuran-kertas-input").removeClass("hide");
            $(this).parents(".div-data-print").find(".ukuran-kertas-select").addClass("hide");
            setDetailKertas($(this).parents(".div-data-print"), "inp");
        }else {
            $(this).parents(".div-data-print").find(".ukuran-kertas-input").addClass("hide");
            $(this).parents(".div-data-print").find(".ukuran-kertas-select").removeClass("hide");
            setDetailKertas($(this).parents(".div-data-print"), "sel");
        }
    });

    $("#wrap-data-print").on("keyup",".inp-ukuran-kertas",function () {
        setDetailKertas($(this).parents(".div-data-print"), "inp");
    });

    function setDetailKertas(dataDiv, jen) {
        id = dataDiv.find(".jenis-kertas").val();
        ukuran = dataDiv.find("."+jen+"-ukuran-kertas").val();
        detailKertas = id+":"+ukuran;
        dataDiv.find('.detail-kertas').val(detailKertas);
    }
});