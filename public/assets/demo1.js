$(document).ready(function(){
  $('#submit').on('click',function(){
    var id = $('#id').val();
    var name = $('#name').val();
    var address = $('#address').val();
    var mobile = $('#mobile').val();
    $.ajax({
      url : 'insertRecords',
      type : 'post',
      data: {
        id : id,
        name : name,
        address : address,
        mobile : mobile,
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    }).done(function(r){
        if (r == true) {
          alert('Record inserted');
          location.reload();
        } else {
          alert('Error');
          location.reload();
        }
    });
  });

  $('#delete').on('click',function(){
    $.ajax({
      url : 'deleteRecords',
      type : 'post',
      data : {
        id : $('#deleteId').val(),
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    }).done(function(r){
      if (r == true) {
        alert('Record deleted');
        location.reload();
      } else {
        alert('Error');
        location.reload();
      }
    });
  });
});
