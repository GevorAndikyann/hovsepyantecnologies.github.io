// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();








//
//
// $(document).ready(function(){
//     // $(document).on('keyup',"#search",function(){
//     //     let query = $(this).val();
//     //     $.ajax({
//     //         url: "/actions/searchPostAction.php/",
//     //         type:"POST",
//     //         data:{q:query},
//     //         dataType:'html',
//     //         success: function(result){
//     //             $(".postbox").html(result);
//     //         }
//     //     });
//     // });
//
//
//     $('#email').on('blur', function() {
//         let email = $(this).val();
//         let $that = $(this);
//         $.ajax({
//             url: "../actions/checkEmail.php",
//             type: "POST",
//             data: {
//                 'email' : email
//             },
//             dataType: 'json',
//             success: function(response) {
//                 if(response.error){
//                     $that.css({'border':'1px solid red'});
//                 }else{
//                     $that.css({'border':'1px solid green'});
//                 }
//                 $that.after("<span>"+response.message+"</span>")
//
//             },
//             error: function(data){
//
//             }
//         });
//     });
// });
//
//     $(document).ready(function(){
//
//     $(document).on('click','#Insert',function(){
//         var name_user=$("#name_user").val();
//         var text_user=$("#text_user").val();
//         var action="insert_data";
//         if (name_user == "" || text_user == "") {
//             $(".Alerts").html('<div class="alert alert-danger" role="alert">Fields are required</div>');
//         }else{
//             $.ajax({
//                 url:"code.php",
//                 type:"post",
//                 data:{name_user:name_user,text_user:
//                     text_user,action:action},
//                 success:function(data)
//                 {
//                     $(".Alerts").html(data);
//                     fetch_text_user();
//                 }
//             });
//         }
//     });
//     fetch_text_user();
//     function fetch_text_user()
// {
//     var action="fetch_data";
//     $.ajax({
//     url:"code.php",
//     type:"post",
//     data:{action:action},
//     success:function(data)
// {
//     $("#text_val").html(data);
// }
// });
// }
//
