$('#singInButton').on('click', function () {
    var deger = $("#formAuthentication").serialize();
    $.ajax({
        type: "post", url: "controls/logControl.php", data: deger, success: function (sonuc) {
            if (sonuc !== "onay") {
                $("#singInAlert").css("display", "block").html(sonuc).fadeOut(1000);
            } else {
                window.location.href = "index";
            }
        }
    });
});

$('#siteSettingsButton').on('click', function () {
    var deger = $("#siteSettingsForm").serialize();
    $.ajax({
        type: "post", url: "controls/siteControl.php", data: deger, success: function (sonuc) {
            if (sonuc !== "onay") {
                $("#settingsAlert").css("display", "block").html(sonuc).fadeOut(1000);
            } else {
                $("#settingsAlert").css("display", "block").html("Değişiklikler Kaydedildi").fadeOut(1000);
            }
        }
    });
});


$('.tourDetF').on('click', function () {
    var id = $(this).data("id");
    var deger = $("#" + id).serialize();
    //alert("#" + id);
    $.ajax({
        type: "post", url: "component/turDuzenle.php", data: deger, success: function (sonuc) {
            $(".tourCompAl").css("display", "block").html(sonuc).fadeOut(1000);
        }
    });
});


$('#tourInsertForm').submit(function (e) {
    $.ajax({
        url: 'controls/tourInsertControl.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (xhr) {

            if (xhr === "onay") {
                $("#tourInsertAlert").css("display", "block").html("Tur Kaydınız Yapılmıştır").fadeOut(1000);
                $("#tourInsertForm").trigger("reset");
            } else {
                $("#tourInsertAlert").css("display", "block").html(xhr).fadeOut(1000);
            }
        }
    });
    e.preventDefault();
});


$('#staffInsertForm').submit(function (e) {
    $.ajax({
        url: 'controls/staffInsertControl.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (xhr) {

            if (xhr === "onay") {
                $("#staffInsertAlert").css("display", "block").html("Personel Kaydedildi").fadeOut(1000);
                $("#staffInsertForm").trigger("reset");
            } else {
                $("#staffInsertAlert").css("display", "block").html(xhr).fadeOut(1000);
            }
        }
    });
    e.preventDefault();
});


$('#blogUpload').submit(function (e) {
    $.ajax({
        url: 'controls/blogUpload.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (xhr) {

            if (xhr === "onay") {
                $("#blogAlert").css("display", "block").html("Tur Kaydınız Yapılmıştır").fadeOut(1000);
                $("#blogUpload").trigger("reset");
            } else {
                $("#blogAlert").css("display", "block").html(xhr).fadeOut(1000);
            }
        }
    });
    e.preventDefault();
});