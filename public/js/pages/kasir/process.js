var sum;
var sum2;
var DP;
var sisaTotal;
$(function () {
    $(".harga-satuan").keyup(function () {
        qty = $(this).parent().prev().prev().text();
        harga_satuan = $(this).val() == "" ? 0 : $(this).val();
        sum = parseInt(qty)*parseInt(harga_satuan);
        $(this).parent().next().text(sum);
        setTotal();
    });

    $("#uang_muka").keyup(function () {
        setTotal();
    });

    function setTotal() {
        sum = 0;
        $('.sum').each(function(){
            sum += $(this).text() == "" ? 0: parseInt($(this).text());  // Or this.innerHTML, this.innerText
        });
        $("#sumTotal").text(sum);


        setTotalAndSisa()
    }

    function setTotalAndSisa() {
        sum2    = 0;
        sum1     = $("#sumTotal").text() == "" ? 0 : $("#sumTotal").text();
        biSeting = $("#biayaSeting").text() == "" ? 0 :  $("#biayaSeting").text();
        biEdit   = $("#biayaEdit").text() == "" ? 0 : $("#biayaEdit").text();
        sum2     = parseInt(sum1)+parseInt(biSeting)+parseInt(biEdit)
        $("#sumTotal2").text(sum2)

        DP = $("#uang_muka").val() == "" ? 0:parseInt($("#uang_muka").val());
        sisaTotal = sum2-DP;
        $("#sumSisa").text(sisaTotal);
    }

    $("#btn-simpan").click(function () {
        url  = "/kasir/setharga"
        //build form data
        data = new FormData();
        data.append("_token", $("input[name=_token]").val())
        data.append("id", $("#surat-jalan-id").val());
        data.append("total1", sum);
        data.append("total2", sum2);
        data.append("uang-muka", DP);
        data.append("sisa", sisaTotal);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: url,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success     : function (has) {
                console.log("success :"+has)
            },
            error       : function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest+textStatus+errorThrown)
                console.log("err")
            }
        })
    });
})