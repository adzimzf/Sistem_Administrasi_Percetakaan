$(function () {
    date = new Date();
    tanggal = date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate();
    $('.datepicker').val(tanggal);
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $("#add-data-print").click(function () {
        data = $(".div-data-print:last").clone();
        $("#wrap-data-print").append(data);
    });

    $("#wrap-data-print").on("click", ".btn-delete", function() {
        $(this).parents(".div-data-print").remove();
    });
});