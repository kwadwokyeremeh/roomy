// Same floor yes or no trigger
$('#r11').on('click', function(){
$(this).parent().find('a').trigger('click')
});

$('#r12').on('click', function(){
$(this).parent().find('a').trigger('click')
});
//Dynamically Add or Remove input fields in PHP with JQuery
$(document).ready(function(){
var i=1;
$('#add').click(function(){
i++;
$('#dynamic_field').prepend('<tr id="row'+i+'">' +
    '<td>' + '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span>'+''+
            '<input type="text" name="roomType[]" placeholder="Enter the room type" class="form-control name_list" />' +'</label>'+ '</td>' + '' + '' + '<td>' +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default vk-border-radius btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
});


$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id");
$('#row'+button_id+'').remove();
});

$('#submit').click(function(){
$.ajax({
url:"name.php",
method:"POST",
data:$('#add_name').serialize(),
success:function(data)
{
alert(data);
$('#add_name')[0].reset();
}
});
});

});
