$(function(){
    $("#main_form").on('click',"#submit", function(event){
     e.preventDefault();
     $.ajax({
        url:$(this).attr('action'),
        method:$(this).attr('method'),
        data:new FormData(this),
        processData:false,
        dataType:'json',
        contentType:false,
        beforeSend:function(){

        },
        success:function(data){

        }
     
    });
     
    });
 });

//  <script>
//     $(document).ready(function() 
//     {
//         $('body').on('click', '#wishlistBtn', function(event) {
//             var productId = $('#productId').val();
//             $.ajax({
//                 type : 'POST',
//                 dataType : 'json',
//                 url  : '{{route('product.wishlist')}}',
//                 data : {
//                     _token: "{{ csrf_token() }}",
//                     productId : productId,
//                 },
//                 success :  function(result) {

//                     if(result.status == 'true')
//                     {
//                         $('#heart').css('color','red');
//                     }
//                     else
//                     {
//                         $('#heart').css('color','black');
//                     }
//                     alert(result.message);
//                 },
//                 error : function(result) {
//                 }
//             });
//         });
//     });
// </script>