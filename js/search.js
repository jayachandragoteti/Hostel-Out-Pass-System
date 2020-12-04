$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
mobiscroll.settings = {
    theme: 'ios',
    display: 'bubble'
};

$(function () {

    var now = new Date();

    $('#demo-datetime').mobiscroll().datetime({
        dateWheels: '|D M d|',
        onInit: function (event, inst) {
            inst.setVal(now, true);
        }
    });

    $('#demo-datetime-expanded').mobiscroll().datetime({
        onInit: function (event, inst) {
            inst.setVal(now, true);
        }
    });

    $('#demo-datetime-date').mobiscroll().date({
        onInit: function (event, inst) {
            inst.setVal(now, true);
        }
    });

    $('#demo-datetime-time').mobiscroll().time({
        onInit: function (event, inst) {
            inst.setVal(now, true);
        }
    });

    $('#demo-datetime-non-form').mobiscroll().datetime({
        onInit: function (event, inst) {
            inst.setVal(now, true);
        }
    });

    var instance = $('#demo-datetime-external').mobiscroll().datetime({
        showOnTap: false,
        showOnFocus: false,
        onInit: function (event, inst) {
            inst.setVal(new Date(), true);
        }
    }).mobiscroll('getInst');

    $('#show-demo-datetime-external').click(function () {
        instance.show();
        return false;
    });

});