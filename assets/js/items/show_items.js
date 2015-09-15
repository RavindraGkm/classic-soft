var CKE = CKE ||{};
CKE.Showitems=function(){
    this.initialize();
}

CKE.Showitems.prototype={
    initialize:function(){
        this.show_items();
    },
    show_items:function(){
        $.ajax({
            url: "show-all-item",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                for(var i=0;i<data.length;i++)
                    $("#item-data-json").append("<tr><td>"+data[i].id+"</td><td>" + data[i].item_name + "</td><td>" + data[i].item_category + "</td><td>" + data[i].item_code +"</td><td>"+data[i].d1+"'X"+data[i].d2+"'X"+data[i].d3+"'+"+data[i].d4+"'"+"</td><td><a href='edit-items/"+data[i].id+"'>Edit Item</a></td></tr>");
            }
        });
    }
}
