$(document).ready(function () {
  $("#add-button").click(function () {
    const $form = $("#new-order");
    const $input = $form.find("input,select,button");
    const serijalizacija = $form.serialize();

    if ($("#selector").val() !== "" && $("#amount").val() !== "") {
      request = $.ajax({
        url: "handler/add-order.php",
        type: "post",
        data: serijalizacija,
      });

      request.done(function (response, textStatus, jqXHR) {
        if (response === "Success") {
          console.log(response);
          alert("Uspesno dodata porudzbina");
          location.reload(true);
        } else {
          console.log(response);
          alert("Porudzbina nije dodata" + response);
        }
      });

      request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error("Greska: " + textStatus, errorThrown);
      });
    }
    else{
        alert('Morate popuniti formu!');
    }
  });
});
