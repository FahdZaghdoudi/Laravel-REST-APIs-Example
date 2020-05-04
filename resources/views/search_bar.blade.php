
<!DOCTYPE html>
<html>
 <head>
  <title>Autocomplete</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br/>
  <div class="container box">
   <h3 align="center">Autocomplete textbox</h3><br />
   
   <div class="form-group">
    <input type="text" name="title" id="title" class="form-control input-lg" placeholder="Enter title"/>
    <div id="carList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('#title').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('sbar.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#title').fadeIn();  
                    $('#carList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#title').val($(this).text());  
        $('#carList').fadeOut();  
    });  

});
</script>


