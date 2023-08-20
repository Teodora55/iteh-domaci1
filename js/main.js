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

  $('.deleteBtn').click(function(){
   const id = $(this).data("value");
   const row = $(this).closest("tr")[0];

    req = $.ajax({
      url: 'handler/delete-order.php',
      type:'post',
      data: {'id':id}
  });

  req.done(function(res){
      if(res=="Success"){
         row.remove();
         alert('Obrisana narudzbina');
      }else {
        alert("Narudzbina nije obrisana");
      }
      console.log(res);
  });
  })
});
