var CKE = CKE || {};

CKE.EditItems = function (base_url) {
  this.base_url = base_url;
  this.initialize();
}

CKE.EditItems.prototype = {
  initialize: function () {
    this.editItems();
    this.updateItems();
  },
  editItems: function () {
    var self = this;
    $.ajax({
      url: self.base_url + 'items/get-item-by-id',
      type: 'GET',
      dataType: 'JSON',
      data: {
        item_id: $("#item_id").val()
      },
      success: function (data) {
        console.log(data);
        if (data.count == 1) {
          $("#select-category").val(data.item_category);
          $("#itemname").val(data.item_name);
          $("#itemcode").val(data.item_code);
          $("#d1").val(data.d1);
          $("#d2").val(data.d2);
          $("#d3").val(data.d3);
          $("#d4").val(data.d4);
        }
      }
    });
  },
  updateItems: function () {
    var self = this;
    $('#btn-updateItem').click(function () {
      $.ajax({
        url: self.base_url + 'items/update-item',
        type: "POST",
        dataType: "JSON",
        data: {
          item_id: $('#item_id').val(),
          category: $('#select-category').val(),
          item_name: $('#itemname').val(),
          item_code: $('#itemcode').val(),
          d1: $('#d1').val(),
          d2: $('#d2').val(),
          d3: $('#d3').val(),
          d4: $('#d4').val()
        },
        beforeSend: function () {
          $('#btn-updateItem').html("Updating...");
        },
        error: function (data) {
          console.log(data);
        },
        success: function (data) {
          console.log(data);
          $('#btn-updateItem').html("Updated Successfully");
        }
      })
    });
  }
}
