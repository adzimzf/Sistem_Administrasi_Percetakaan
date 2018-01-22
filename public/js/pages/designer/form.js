$(function () {
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
        size = $(this).find("option:selected").attr("size");
        $(this).parents(".div-data-print").find(".inp-ukuran-kertas").val(size);
    });
})