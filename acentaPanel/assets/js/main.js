$(".tourSale").on('click', function () {
    var id = $(this).data("id");
    var deger = $("#" + id).serialize();
    //alert("#" + id);
    $.ajax({
        type: "post",
        url: 'component/sale.php',
        data: deger,
        success: function (sonuc) {
            if (sonuc === "onay") {
                $("#button" + id)
                    .text("Başvuruldu")
                    .prop('disabled', true)
                    .removeClass('tourSale');

            }
        }
    });
})

$("#acentaHesapFormButton").on("click", () => {
    var deger = $("#acentaHesapForm").serialize();
    $.ajax({
        type: "post",
        url: 'component/acentaHesap.php',
        data: deger,
        success: function (sonuc) {
            if (sonuc === "onay") {
                $("#acentaHesapFormAlert").css("display", "block").text("Değişiklikler Kaydedildi").fadeOut(1000);
            } else {
                $("#acentaHesapFormAlert").css("display", "block").text(sonuc).fadeOut(1000);
            }
        }
    });
})


$("#passOpen").on("click", () => {
    var inputType = $('#pass').attr('type');
    if (inputType === "text") {
        $('#pass').attr('type', "password");
    } else {
        $('#pass').attr('type', "text");
    }
})

let href = window.location.href;
let hrefAs = href.split("/");
let son = hrefAs.pop();

if (son === "") {
    $('.index').addClass("active");
} else {
    $("." + son).addClass("active");
}
