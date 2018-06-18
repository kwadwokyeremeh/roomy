//Dynamically Add or Remove input fields in PHP with JQuery
$(document).ready(function(){
var i=1;
$('#add_general').click(function(){
i++;
$('#general').prepend('<tr id="row'+i+'">' +
    '<td>' + '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span>'+''+
            '<input type="text" name="name[]" placeholder="Add any other facilities" class="form-control name_list" />' +'</label>'+ '</td>' + '' + '' + '<td>' +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
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
// Services add on
$(document).ready(function(){
var i=1;
$('#add_services').click(function(){
i++;
$('#services').prepend('<tr id="row'+i+'">' +
    '<td>' + '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span>'+''+
            '<input type="text" name="name[]" placeholder="Add any other services provided" class="form-control name_list" />' +'</label>'+ '</td>' + '' + '' + '<td>' +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
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
// Food and Drinks add on
$(document).ready(function(){
var i=1;
$('#add_food').click(function(){
i++;
$('#food').prepend('<tr id="row'+i+'">' +
    '<td>' + '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span>'+''+
            '<input type="text" name="name[]" placeholder="Add any Catering services provided" class="form-control name_list" />' +'</label>'+ '</td>' + '' + '' + '<td>' +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
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

}); // Entertainment add on
$(document).ready(function(){
var i=1;
$('#add_entertainment').click(function(){
i++;
$('#entertainment').prepend('<tr id="row'+i+'">' +
    '<td>' + '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span>'+''+
            '<input type="text" name="name[]" placeholder="Add any other entertainment facilities" class="form-control name_list" />' +'</label>'+ '</td>' + '' + '' + '<td>' +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
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
// Utilities add on
$(document).ready(function(){
var i=1;
$('#add_utilities').click(function(){
i++;
$('#utilities').prepend('<tr id="row'+i+'">' +
    '<td>' + '<label class="custom-checkbox custom-control">' +'<input type="checkbox" autocomplete="off" class="custom-control-input" value="other">'+
            '<span aria-hidden="true" class="custom-control-indicator">'+'</span>'+''+
            '<input type="text" name="name[]" placeholder="Add any other utilities provided" class="form-control name_list" />' +'</label>'+ '</td>' + '' + '' + '<td>' +
        '<button type="button" name="remove" id="'+i+'" class="vk-btn vk-btn-m  vk-btn-default btn_remove"><i class="fa fa-remove"></i></button></td></tr>');
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
