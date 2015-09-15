var CKE = CKE || {};

CKE.Login = function (base_url) {
    this.base_url=base_url;
    //console.log(base_url+" chusasuyhaud");
    this.initialize();
}
CKE.Login.prototype={
    initialize:function(){
        this.login();
    },
    login:function(){
        var self=this;
        $('#btn-signin').click(function(){
            $.ajax({
            url: "logins/login-check",
            type: "POST",
            dataType: "JSON",
            data:{
                username: $("#txtusername").val(),
                password: $("#password").val()
            },
            beforeSend: function(data) {
                $("#btn-signin").html('Processing...');
            },
            error: function(data){
                console.log(data);
            },
            success: function (data) {
                console.log(data);
                if(data.status==200) {
                    window.location = self.base_url+"items/show-items";
                }
                else if(data.status==401) {
                    alert(data.msg);
                }
                $("#btn-signin").html('Sign in');
            }

        });
        });
    }
}
