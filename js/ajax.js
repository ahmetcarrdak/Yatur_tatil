$("#singUpButton").on("click", function () {
    var deger = $("#singUpForm").serialize();
    $.ajax({
        type: "post",
        url: "singRefactor.php",
        data: deger,
        success: function (sonuc) {
            if (sonuc !== "onay") {
                $("#singUpAlert").html(sonuc);
            } else {
                window.location.href = "acentaPanel/index";
            }
        },
    });
});

$("#singInButton").on("click", function () {
    var deger = $("#singInForm").serialize();
    $.ajax({
        type: "post",
        url: "singRefactor.php",
        data: deger,
        success: function (sonuc) {
            if (sonuc !== "onay") {
                $("#singInAlert").html(sonuc);
            } else {
                window.location.href = "acentaPanel/index";
            }
        },
    });
});
// Acenta Giriş İşlemlerinin Sonu

// Cookkies

$("#cookkiesButton").on("click", function () {
    var deger = $("#cerez").serialize();
    $.ajax({
        type: "post",
        url: "cerez.php",
        data: deger,
        success: function (sonuc) {
            if (sonuc == "onay") {
                $(".cookkies").hide();
            }
        },
    });
});

// Cookkies

$(".tourSingleFormButton").on("click", function () {
    var id = $(this).data("id");
    var deger = $("#tourSingleForm" + id).serialize();
    $.ajax({
        type: "post",
        url: "tourSingleEnd.php",
        data: deger,
        success: function (sonuc) {
            if (sonuc === "onay") {
                $(".tourSingleAlert" + id)
                    .css("display", "block")
                    .html(
                        "İstek Gönderildi. En Kısa Zamanda Sizinle\n" +
                        "İletişime Geçilecektir."
                    )
                    .fadeOut(2000);
                $("#tourSingleForm" + id).trigger("reset");
            } else {
                $(".tourSingleAlert" + id)
                    .css("display", "block")
                    .html(sonuc)
                    .fadeOut(2000);
            }
        },
    });
});

$("#contactButton").on("click", () => {
    let name = $("input[name='name']").val();
    let email = $("#email").val();
    let subject = $("input[name='subject']").val();
    let message = $("textarea[name='message']").val();
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
        $("#email").css("border-color", "red");
    } else {
        $("#email").css("border-color", "#ddd");
    }

    if (name === "") {
        $("input[name='name']").css("border-color", "red");
    } else {
        $("input[name='name']").css("border-color", "#ddd");
    }

    if (subject === "") {
        $("input[name='subject']").css("border-color", "red");
    } else {
        $("input[name='subject']").css("border-color", "#ddd");
    }

    if (message === "") {
        $("textarea[name='message']").css("border-color", "red");
    } else {
        $("textarea[name='message']").css("border-color", "#ddd");
    }

    var deger = $("#contactForm").serialize();
    $.ajax({
        type: "post",
        url: "contactpress.php",
        data: deger,
        success: function (sonuc) {
            if (sonuc === "onay") {
                $(".message-i").addClass("message-i-active");
                $(".fa-check").addClass("fa-check-active");
                $(".message-span").addClass("message-active");
                $(".success").css("max-height", "80px");
                $("#contactForm").trigger("reset");
                $("#contactButton").attr({
                    disabled: true,
                });
            } else {
            }
        },
    });
});

$("#searchButton").on("click", () => {
    let veri = $("#searchInput");
    return veri.val() !== "";
});