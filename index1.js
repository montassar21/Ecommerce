
$(document).ready(function(){
$(document).on('click','#load_more',function(event){
event.preventDefault();
var id=$('#load_more').data('id');
$.ajax({
    url:"load.php",
    type:"post",
    data:{id:id},
    success:function(response){
        $('#load_more').remove();
        $('.prod').append(response);
    }
})
});
})
$(document).ready(function(){
$(".pro").counterUp({
delay:10,
time:3000
})
})