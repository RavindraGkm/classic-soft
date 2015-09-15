var CKE = CKE || {};
CKE.AddClients = function () {
  this.initialize();
}
CKE.AddClients.prototype = {
  initialize: function () {
    this.add_clients();
  },
  add_clients: function () {
    $('#btn-submit').click(function () {
      $.ajax({
        url: "add-new-client",
        type: "POST",
        dataType: 'JSON',
        data: {
          clientAdd: true,
          f_name: $('#fullname').val(),
          c_contact: $('#contact').val(),
          c_address: $('#address').val()
        },
        beforeSend: function () {
          $('#btn-submit').html("Adding Client..");
        },
        error: function (data) {
          console.log(data);
        },
        success: function (data) {
          if(data.status == 200) {
            $.smallBox({
              title: data.msg,
              content: "<i class='fa fa-clock-o'></i> <i>1 seconds ago...</i>",
              color: "#296191",
              iconSmall: "fa fa-thumbs-up bounce animated",
              timeout: 4000
            });
          }
          else {
            $.smallBox({
              title: data.msg,
              content: "<i class='fa fa-clock-o'></i> <i>1 seconds ago...</i>",
              color: "#c26565",
              iconSmall: "fa fa-thumbs-down bounce animated",
              timeout: 4000
            });
          }
        },
        complete: function() {
          $('#btn-submit').html("Add Client");
        }
      });
    });
  }
}
