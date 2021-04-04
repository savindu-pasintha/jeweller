$(document).ready(function () {
  $("#submit").click(function (event) {
    event.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    // var formData = $("#subform").serialize();
    alert(username + "-" + password);
    // $.post(URL, data, callback);
    $.post("dt.php", formData, function (data, status) {
      if (data == "record-added" && status == "success") {
        $(".progress").addClass("hidden");
        $(".success").removeClass("hidden");
      }
    });
  });
});
