$(document).ready(function(){
    // like and unlike click
    $(".like, .unlike").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");
        var text = split_id[0];
        var postid = split_id[1];  // postid
        // Finding click type
        var type = 0;
        if(text == "like"){
            type = 1;
        }else{
            type = 0;
        }
        // AJAX Request
        $.ajax({
            url: '../actions/setLikeDislikeAction.php',
            type: 'post',
            data: {postid:postid,type:type},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                var unlikes = data['unlikes'];
                $("#likes_"+postid).text(likes);        // setting likes
                $("#unlikes_"+postid).text(unlikes);    // setting unlikes
                if(type == 1){
                    $("#like_"+postid).css("color","#ffa449");
                    $("#unlike_"+postid).css("color","lightseagreen");
                }
                if(type == 0){
                    $("#unlike_"+postid).css("color","#ffa449");
                    $("#like_"+postid).css("color","lightseagreen");
                }
            }
        });
    });
});









// $(document).ready(function(){
//
//     // like and unlike click
//     $(".like, .unlike").click(function(){
//         var id = this.id;   // Getting Button id
//         var split_id = id.split("_");
//
//         var text = split_id[0];
//         var postid = split_id[1];  // postid
//
//         // Finding click type
//         var type = 0;
//         if(text == "like"){
//             type = 1;
//         }else{
//             type = 0;
//         }
//
//         // AJAX Request
//         $.ajax({
//         url:'../actions/setLikeDislikeAction.php',
//             type: 'post',
//             data: {postid:postid,type:type},
//             dataType: 'json',
//             success: function(data){
//                 var likes = data['likes'];
//                 var unlikes = data['unlikes'];
//
//                 $("#likes_"+postid).text(likes);        // setting likes
//                 $("#unlikes_"+postid).text(unlikes);    // setting unlikes
//
//                 if(type == 1){
//                     $("#like_"+postid).css("color","#ffa449");
//                     $("#unlike_"+postid).css("color","lightseagreen");
//                 }
//
//                 if(type == 0){
//                     $("#unlike_"+postid).css("color","#ffa449");
//                     $("#like_"+postid).css("color","lightseagreen");
//                 }
//
//             }
//         });
//
//     });
//
// });
//
//









































// function setLikeDislike(type,id){
//     jQuery.ajax({
//         url:'../actions/setLikeDislikeAction.php',
//         type:'post',
//         data:'type='+type+'&id='+id,
//         success:function(result){
//             result=jQuery.parseJSON(result);
//             if(result.opertion=='like'){
//                 jQuery('#like_'+id).removeClass('far');
//                 jQuery('#like_'+id).addClass('fas');
//                 jQuery('#dislike_'+id).addClass('far');
//                 jQuery('#dislike_'+id).removeClass('fas');
//             }
//             if(result.opertion=='unlike'){
//                 jQuery('#like_'+id).addClass('far');
//                 jQuery('#like_'+id).removeClass('fas');
//             }
//
//             if(result.opertion=='dislike'){
//                 jQuery('#dislike_'+id).removeClass('far');
//                 jQuery('#dislike_'+id).addClass('fas');
//                 jQuery('#like_'+id).addClass('far');
//                 jQuery('#like_'+id).removeClass('fas');
//             }
//             if(result.opertion=='undislike'){
//                 jQuery('#dislike_'+id).addClass('far');
//                 jQuery('#dislike_'+id).removeClass('fas');
//             }
//
//
//             jQuery('#post'+id+' #like').html(result.like_count);
//             jQuery('#post'+id+' #dislike').html(result.dislike_count);
//         }
//
//     });
// }























































// $(document).ready(function(){
//     // like and unlike click
//     $(".like, .unlike").click(function(){
//         var id = this.id;   // Getting Button id
//         var split_id = id.split("_");
//         var text = split_id[0];
//         var postid = split_id[1];  // postid
//         // Finding click type
//         var type = 0;
//         if(text == "like"){
//             type = 1;
//         }else{
//             type = 0;
//         }
//         // AJAX Request
//         $.ajax({
//             url: 'likeunlikeAction.php',
//             type: 'post',
//             data: {postid:postid,type:type},
//             dataType: 'json',
//             success: function(data){
//                 var likes = data['likes'];
//                 var unlikes = data['unlikes'];
//                 $("#likes_"+postid).text(likes);        // setting likes
//                 $("#unlikes_"+postid).text(unlikes);    // setting unlikes
//                 if(type == 1){
//                     $("#like_"+postid).css("color","#ffa449");
//                     $("#unlike_"+postid).css("color","lightseagreen");
//                 }
//                 if(type == 0){
//                     $("#unlike_"+postid).css("color","#ffa449");
//                     $("#like_"+postid).css("color","lightseagreen");
//                 }
//             }
//         });
//     });
// });