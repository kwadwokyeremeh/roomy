function preview_images()
{
var total_file=document.getElementById("images").files.length;
for(var i=0;i<total_file;i++)
{
$('#image_preview').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
}
}
function preview_images1()
{
var total_file=document.getElementById("images1").files.length;
for(var i=0;i<total_file;i++)
{
$('#image_preview1').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
}
}
function preview_images2()
{
var total_file=document.getElementById("images2").files.length;
for(var i=0;i<total_file;i++)
{
$('#image_preview2').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
}
}
function preview_images3()
{
var total_file=document.getElementById("images3").files.length;
for(var i=0;i<total_file;i++)
{
$('#image_preview3').prepend("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
}
}
