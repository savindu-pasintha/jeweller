paypal
  .Buttons({
    style: {
      color: "gold",
      shape: "rect",
    },
    createOrder: function (data, actions) {
      return actions.order.create({
        purchase_units: [
          {
            amount: {
              value: "0.1",
            },
          },
        ],
      });
    },
    onApprove: function (data, actions) {
      return actions.order.capture().then(function (details) {
        console.log(details);
        //after succes payment
        alert("PAYMENT SUCESSFULL");
        window.location.replace(
          "http://localhost/AssignmentPhpSavinduPasintha/jewelerAspiration/index.php?type=all"
        );
      });
    },
    onCancel: function (data) {
      //when cancle the pay ment
      alert("PAYMENT CANCELED !.");
      window.location.replace(
        "http://localhost/AssignmentPhpSavinduPasintha/jewelerAspiration/index.php?type=all"
      );
    },
  })
  .render("#paypal-payment-button");
