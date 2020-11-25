$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

if (window.location.toString().indexOf('dashboard') != -1) {
  var url = './teachers/';
} else if (window.location.toString().indexOf('blogsdashboard') != -1) {
  var url = './blogs/';
} else if (window.location.toString().indexOf('coursedashboard') != -1) {
  var url = './courses/';
}

var BaseRecord={

destroy: function(id){
   var ajaxSetting={
      method: 'delete',
      url: url +id,
      //data: {
      success: function(data){
        //alert(data);
         $('.back-pannel').html(data.table); //!!!.back-pannel
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy($(this).attr('id'));
            return false;
         });
      },
      error: function (data) {
        alert(data.responseText)
      }
   };
   $.ajax(ajaxSetting);
},



};
