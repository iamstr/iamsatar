$(document).ready(function($) {
  $(".reach-form").submit(function(e) {
    e.preventDefault();

    if (!$("input[name=email]") !== "" || $("input[name=message]") !== "") {
      let url = new URL(location.href).hostname;
      $.ajax({
        method: "POST",
        url: `mail/send.php`,
        data: $(".reach-form").serialize(),
        dataType: "json",
        success: function(data) {
          console.log(data);
        }
      });
    }
  });
});
