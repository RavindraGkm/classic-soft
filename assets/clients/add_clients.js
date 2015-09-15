var CKE = CKE ||{};
CKE.Addclients=function(){
    this.initialize();
}

CKE.Addclients.prototype={
    initialize:function(){
        this.add_clients();
    },
    add_clients:function(){
        $('#btn-submit').click(function(){
            $.ajax({
                url: "add-new-client",
                type: "POST",
                dataType: 'JSON',
                data: {
                    clientAdd: true,
                    f_name:$('#fullname').val(),
                    c_contact: $('#contact').val(),
                    c_address: $('#address').val()
                },
                beforeSend: function () {
                    $('#btn-submit').html("Inserting...");
                },
                error: function (data) {
                    console.log(data);
                },
                success: function (data) {
                    if(data.status==200) {
                        $.smallBox({
                            title : data.msg,
                            content : "<i class='fa fa-clock-o'></i> <i>1 second ago...</i>",
                            color : "#296191",
                            iconSmall : "fa fa-thumbs-up bounce animated",
                            timeout : 4000
                        });
                    }
                }
            });
        });
    }
}
