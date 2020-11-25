 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord={

destroy: function(id){
   var ajaxSetting={
      method: 'delete',
      url: './blogs/'+id,
      //data: {
      success: function(data){
        //alert(data); 
         $('.back-pannel').html(data.table); //!!!.back-pannel
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy($(this).attr('id'));
            return false;
         });         
      },
   };
   $.ajax(ajaxSetting);
},


};