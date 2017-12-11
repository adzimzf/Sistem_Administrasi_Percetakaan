$(function () {
    $(".harga-satuan").keyup(function () {
        qty = $(this).parent().prev().prev().text();
        harga_satuan = $(this).val();
        sum = parseInt(qty)*parseInt(harga_satuan);
        $(this).parent().next().text(sum);
        setTotal();
    });

    $("#uang_muka").keyup(function () {
        setTotal();
    });

    function setTotal() {
        var sum = 0;
        $('.sum').each(function(){
            sum += parseInt($(this).text());  // Or this.innerHTML, this.innerText
        });
        console.log(sum);
        $("#sumTotal").text(sum);

        var DP = parseInt($("#uang_muka").val());
        var sisaTotal = sum-DP;
        $("#sumSisa").text(sisaTotal);
    }
})