var CKE = CKE || {};

CKE.EditClients = function (base_url) {
    this.base_url = base_url;
    this.initialize();
}

CKE.EditClients.prototype = {
    initialize: function () {
        this.editClients();
        this.updateClients();
    },
    editClients: function () {
        var self = this;
        $.ajax({
            url: self.base_url + 'clients/get-client-by-id',
            type: 'GET',
            dataType: 'JSON',
            data: {
                client_id: $("#client_id").val()
            },
            beforeSend: function (data) {
            },
            success: function (data) {
                if (data.count == 1) {
                    $("#fullname").val(data.client_name);
                    $("#contact").val(data.client_contact);
                    $("#address").val(data.client_address);
                }
            }
        });
    },
    updateClients: function () {
        var self = this;
        $('#btn-updateClient').click(function () {
            $.ajax({
                url: self.base_url + 'clients/update-client',
                type: "POST",
                dataType: "JSON",
                data: {
                    client_id: $('#client_id').val(),
                    client_name: $('#fullname').val(),
                    client_contact: $('#contact').val(),
                    client_address: $('#address').val()
                },
                beforeSend: function () {
                    $('#btn-updateClient').html("Updating...");
                },
                error: function (data) {
                    console.log(data);
                },
                success: function (data) {
                    console.log(data);
                    $('#btn-updateClient').html("Updated Successfully");
                }
            })
        });
    }
}

