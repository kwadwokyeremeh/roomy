
    <section class="site-content-area">
        <div class="vk-gallery-grid-full-banner">
            <div class="vk-about-banner">
                <div class="vk-about-banner-destop">
                    <div class="vk-banner-img"></div>
                    <div class="vk-about-banner-caption">
                        <h2>Register your hostel</h2>
                        <h3>
                            <a href="#">Register your hostel</a>
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <a href="#">Layout</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-confirmation-content">
            <div class="container hostel-layout">
                <div class="vk-select-room-breakcrumb">
                    <ul>
                        <li class="completed">
                            <a href="javascript:void(0);" style="font-size: 0.55em">1.Basic Info</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>2.Hostel Details</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="make-a-reservation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">3.Add media</a>
                            <span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);" style="font-size: 0.55em">4.Amenities</a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li class="confirmation">
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>5.Layout</small></a>
                            <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">6.Policies</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">7.Payment</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" style="font-size: 0.55em">8.Confirmation</a>
                            <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                        </li>
                    </ul>
                </div>
                <div class="vk-shop-checkout-body">
                    <div class="container">
                        <main id="main" class="clearfix right_sidebar">
                            <div class="tg-container">
                                <div id="primary">


                                    <div class="entry-thumbnail">

                                        <div class="entry-content-text-wrappe clearfix">
                                            <div class="entry-content-wrappr">
                                                <div class="entry-conten">
                                                    <div class="woocommerc">

                                                        <div class="row">
                                                            <div class="vk-checkout-billing-left">

                                                                    <div class="woocommerce-billing-fields">
                                                                <form action="{{ route('hostel.registration.submit', [$step::$slug]) }}" method="POST">
                                                                            @csrf
                                                                        {{--<h3>Rooms and Prices</h3>--}}
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            {{--<p class="col-md-6 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="one_in_a_room" data-priority="10">
                                                                                <label for="one_in_a_room" class="">One in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text" name="one_in_a_room" id="one_in_a_room" placeholder="Please enter the price of the room" value="" autocomplete="">
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="two_in_a_room" data-priority="20">
                                                                                <label for="two_in_a_room" class="">Two in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="two_in_a_room" id="two_in_a_room" placeholder="Please enter the price of the room" value="" >
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="three_in_a_room" data-priority="20">
                                                                                <label for="three_in_a_room" class="">Three in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="three_in_a_room" id="three_in_a_room" placeholder="Please enter the price of the room" value="" >
                                                                            </p>
                                                                            <p class="col-md-6 form-row form-row-last validate-required" id="four_in_a_room" data-priority="20">
                                                                                <label for="four_in_a_room" class="">Four in a room <abbr class="required" title="required">*</abbr></label>
                                                                                <input type="number" class="input-text " name="four_in_a_room" id="four_in_a_room" placeholder="Please enter the price of the room" value="" >
                                                                            </p>--}}
                                                                            {{--Draw your hostel layout--}}
                                                                            @if($errors->any())
                                                                                <div class="vk-notification-boxes">
                                                                                    <div class="vk-notification-boxes-body">
                                                                                        <ul class="vk-alert vk-alert-warning ">
                                                                                            @foreach($errors->all() as $error)
                                                                                                <li><span><i class="fa fa-times-circle" aria-hidden="true"></i></span> {{$error}} {{--<a href="#">Click here</a>--}}</li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                                <div class="panel-body">
                                                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                                                                                    <div class="col-xs-12 text-center" style="margin-top:15px;">
                                                                                        <button class="vk-btn vk-btn-m vk-btn-default" id="addBlock" value=""><span class="fa fa-plus-square"></span>&nbsp; Add Block</button>
                                                                                    </div>
                                                                                </div><!-- /.panel-body -->
                                                                                <div class="panel-footer"><div class="col-sm-offset-3 col-sm-6 text-center">
                                                                                        Instructions
                                                                                    </div>
                                                                                </div>

                                                                            <!-- /.box-footer -->
                                                                        </div>
                                                                    @include('hostelRegistration._partials.wizardControl')
                                                                </form>
                                                                    </div>


                                                            </div>




                                                        </div>
                                                    </div><!-- .entry-content -->
                                                </div>
                                            </div>
                                        </div>


                                    </div> <!-- Primary end -->
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </section>

@section('custom-script')
    <script>
    $(document).ready(
    function () {
    var counter = 1;
    var blockCounter = 1;
    var floorCounter = 1;
    var roomCounter = 1;
    var wrapper = $("#accordion");

    {{--var token = {
    csrf: "{{ csrf_token() }}"
    };--}}



    $("#addBlock").on("click", function (e) {
    e.preventDefault();
     var blockName = prompt("Please Add your block name");
    if(blockName === ''){


    blockName = 'Block '+blockCounter;
    }
    if(blockName !== null){
    var ariaExpanded = false;
    var expandedClass = '';
    var collapsedClass = 'collapsed';
    if(blockCounter === 1){
    ariaExpanded = true;
    expandedClass = 'in';
    collapsedClass = '';
    }

    $(wrapper).append('<div class="col-sm-12" style="margin-bottom: 0;"><div class="panel panel-default" id="panel' + counter + '">' +
            '<div class="panel-heading" role="tab" id="heading' + counter + '"><h4 class="panel-title">' +
                    '<a class="' + collapsedClass + '" id="panel-lebel' + counter + '" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + counter + '" ' +
                    'aria-expanded="' + ariaExpanded + '" aria-controls="collapse' + counter + '"> ' + blockName + ' </a><div class="actions_div" style="position: relative; top: -26px;">' +
                        '<a href="#" accesskey="' + counter + '" class="remove_block_panel exit-btn pull-right"><span>&times;</span></a>' +
                        '<a href="#" accesskey="' + counter + '" class="edit_ctg_label pull-right"><span class="fa fa-edit"></span> Edit</a>' +
                        '<a href="#" accesskey="' + counter + '" class="pull-right" id="addButton2"> <span class="fa fa-plus"></span> Add Floor</a></div>' +
                        '<input type="hidden" id="d'+counter+'" name="block[]" value="'+blockName+'">' +
                        '</h4></div>' +
            '<div id="collapse' + counter + '" class="panel-collapse collapse ' + expandedClass + '"role="tabpanel" aria-labelledby="heading' + counter + '">' +
                '<div class="panel-body">' +
                        '<div id="block'+counter+'">' +
                        '</div>'+
                        '</div></div><div class="panel-footer row"><div class="col-sm-offset-3 col-sm-6 text-center" id="foot'+counter+'">' + blockName + '<a class="vk-btn vk-btn-xs vk-btn-default col-sm-3" accesskey="' + counter + '" id="addButton2" ><span class="fa fa-plus"></span> Add Floor</a>' +
                    '<a class="vk-btn vk-btn-xs vk-btn-default col-sm-3" accesskey="' + counter + '" id="ajax_submit_button" >Done</a></div></div></div></div>');
    blockCounter++;
    counter++;
    }


    });

    /*Add Floor*/



    var x = 1;

    $(wrapper).on("click", "#addButton2", function (e) {
    e.preventDefault();
    var blockId = $(this).attr('blockCounter');
    var parentId = $(this).attr('accesskey');
    var parentPanel = '#panel' + parentId;
    {{--var room = $(this).closest(parentId).children('.room');--}}

     var floorName = prompt("Please Add your floor name");


    if (floorName === '') {
    blockCounter--;
    floorName = 'Floor ' + floorCounter;

    }
    if (floorName !== null) {
    var ariaExpanded = false;
    var expandedClass = '';
    var collapsedClass = 'collapsed';


    $('#panel' + parentId).find("#block" + parentId).append('<div class="col-sm-12" style="margin-bottom: 0;"><div class="panel panel-default" id="panel' + counter + '">' +
            '<div class="panel-heading" role="tab" id="heading' + counter + '"><div id="'+floorName+'"></div><h4 class="panel-title">' +
                    '<a class="' + collapsedClass + '" id="panel-lebel' + counter + '" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + counter + '" ' +
                    'aria-expanded="' + ariaExpanded + '" aria-controls="collapse' + floorCounter + '"> ' + floorName + ' </a><div class="actions_div" style="position: relative; top: -26px;">' +
                        '<a href="#" accesskey="' + counter + '" class="remove_floor_panel exit-btn pull-right"><span>&times;</span></a>' +
                        '<a href="#" accesskey="' + counter + '" class="edit_ctg_label pull-right"><span class="fa fa-edit"></span> Edit</a>' +
                        '<a href="#" accesskey="' + counter + '" class="pull-right" id="addButton3"><span class="fa fa-plus"></span> Add Room</a>' +
                        '<input type="hidden" id="d'+counter+'" name="floor['+ parentId+'][]" value="'+floorName+'" />' +
                        '</h4></div>' +
            '<div id="collapse' + counter + '" class="panel-collapse collapse ' + expandedClass + '" role="tabpanel" aria-labelledby="heading' + counter + '">' +
                '<div class="panel-body"><div id="TextBoxDiv' + counter + '"></div><a class="vk-btn vk-btn-xs vk-btn-default" accesskey="' + counter + '" id="addButton3" ><span class="fa fa-plus"></span> Add Room</a>' +
                    '<a class="vk-btn vk-btn-xs vk-your-card-btn" accesskey="' + counter + '" id="ajax_submit_button" >Done</a></div></div></div></div></div>');

    x++;
    counter++;
    floorCounter++;
    }

    });


    $(wrapper).on("click", ".remove_block_panel", function (e) {
    e.preventDefault();
    var accesskey = $(this).attr('accesskey');
    $('#panel' + accesskey).remove();
    blockCounter--;
    counter--;
    x--;
    });

    $(wrapper).on("click", ".remove_floor_panel", function (e) {
    e.preventDefault();
    var accesskey = $(this).attr('accesskey');
    $('#panel' + accesskey).remove();
    floorCounter--;
    counter--;
    x--;
    });


    var y = 1;
    $(wrapper).on("click", "#addButton3", function (e) {
    e.preventDefault();

    var accesskey = $(this).attr('accesskey');
        /*var blockId = '#panel'+accesskey;
        var floorId = '#block'+accesskey;*/


        {{--var floorId = document.getElementById("TextBoxDiv' + accesskey + '").attributes["name"].value;--}}

        {{--var blockName = $(parent).closest(blockId);
        var floorName = $(parent).closest(blockName).children(floorId);--}}

        {{--var room =$(this).parents('#TextBoxDiv'+counter + '').children('.room');--}}
        {{--var treeWalker = $(wrapper).createTreeWalker(
            $('#panel' + accesskey).find('#TextBoxDiv'+accesskey ),
            NodeFilter.SHOW_ELEMENT,
            { acceptNode: function(blockId) { return NodeFilter.FILTER_ACCEPT; } },
            false
        );
        var blockId = treeWalker.parentNode();
        room['+ blockId +']['+ floorCounter+']['+roomCounter+']
        console.log(blockId);--}}

    var floor = $('#heading' + accesskey ).children().get(0).id;
    var block = $('#heading' + accesskey ).parent().parent().parent().get(0).id;
        y++;
    $('#panel' + accesskey).find('#TextBoxDiv' + accesskey).append('<div class="room square">' +
        '<a href="#" class="remove_room exit-btn"><span>&times;</span></a>&nbsp;' +

        '<div class="ui">' +
            '<div class="ui small input">'+
                '<input type="text" placeholder="Room '+roomCounter+'" name="room['+floor+']['+roomCounter+'][name]" size="7">'+
        {{--'<input type="text" placeholder="Room '+roomCounter+'" name="room['+block+']['+floor+']['+roomCounter+'][name]" size="7">'+--}}
            '</div>'+

        '<select class="ui search selection dropdown" id="search-select" name="room['+floor+']['+roomCounter+'][roomType]" required>'+
            {{--'<select class="ui search selection dropdown" id="search-select" name="room['+block+']['+floor+']['+roomCounter+'][roomType]" required>'+--}}
            '<option value="">Room Type</option>'+
            @foreach($data->roomDescription as $roomType)
            '<option value="{{$roomType->id}}">{{$roomType->room_type}}</option>'+
            @endforeach
        '</select>'+
        '<select class="ui search selection dropdown" id="search-select" name="room['+floor+']['+roomCounter+'][gender]">'+
                {{--'<select class="ui search selection dropdown" id="search-select" name="room['+block+']['+floor+']['+roomCounter+'][gender]">'+--}}
            '<option value="">Gender</option>'+
            '<option value="F">Female</option>'+
            '<option value="M">Male</option>'+
        '</select>'+



        '</div>'+
        '</div>');



        roomCounter++;
    });



        {{--$(wrapper).ready(function(){
            $("#addButton3").click(function(){
                var x = $("form").serializeArray();
                $.each(x, function(i, field){
                    $("#results").append(field.name + ":" + field.value + " ");
                });
            });
        });--}}

    $(wrapper).on("click", ".remove_room", function (e) {
    e.preventDefault();
    $(this).parent('div').remove();
    y--;
    $(this).parent('div').remove();
    y--;
    roomCounter--;
    });

        $('.dropdown')
            .dropdown({
                action: 'activate'
            })
        ;

    $(wrapper).on("click", ".edit_ctg_label", function (e) {
    var panelId = $(this).attr('accesskey');
    var catgName = prompt("Please Change your category name");
    if (catgName === '') {
    return false;
    }
    if (catgName !== null) {

    $('#panel' + panelId).find("#panel-lebel" + panelId).html('').html(catgName);
    $('#panel' + panelId).find("#foot" + panelId).html('').html(catgName);
    $('#d'+panelId).val(catgName);

    }
    });



        {{--var result = [];                               // <-- Main array
        $(".block").each('click',function(){
            var floor = [];                // <-- "sub"-array
            $(this).find('#TextBoxDiv' + floorCounter).each('click',function(){
                floor.push($(this).val());
            });
            result.push(floor);            // <-- Add "sub" array to results
        });console.log(result);--}}

        });



    </script>
    @endsection


       {{-- '<div class="col-md-3">' +
    '          <div class="box box-default box-solid">' +
    '            <div class="box-header with-border">' +
    '              <h3 class="box-title">Expandable</h3>' +
    '              <div class="box-tools pull-right">' +
    '                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>' +
    '                </button>' +
    '              </div>\n' +
    '              <!-- /.box-tools -->' +
    '            </div>\n' +
    '            <!-- /.box-header -->' +
    '            <div class="box-body">' +
    '              The body of the box' +
    '            </div>' +
    '            <!-- /.box-body -->' +
    '          </div>' +
    '          <!-- /.box -->' +
    '        </div>'+--}}

    {{--var jsonObj = [];
        $('p.room').each(function(){
            var roomName = [];
            $(this).find('#room'+ roomCounter).each(function() {
                roomName.push({
                    name: $(this).attr("name"), room: $().val()
                });
            });
            jsonObj.push(roomName)
        });--}}

    {{--'<div class="ui vertical small menu">' +
        '  <a class="item">Link 1</a>' +
        '  <a class="item">Link 2</a>' +
        '  <div class="header item">All Sections</div>' +
        '  <div class="ui item">' +
        '    <div class="ui fluid selection dropdown">' +
        '      <div class="text">More</div>' +
        '      <i class="dropdown icon"></i>' +
        '      <div class="menu">' +
        '        <div class="item">Choice 1</div>' +
        '        <div class="item">Choice 2</div>' +
        '        <div class="item">Choice 3</div>' +
        '      </div>' +
        '    </div>' +
        '  </div>' +
        '</div>'+

            '<div class="form-group row">' +
                '<div class="col-sm-3">' +
                    '<input type="text" placeholder=".col-sm-3" class="form-control">' +
                '</div>' +



            '<input type="text" name="room['+block+']['+floor+']['+roomCounter+'][name]" value="" id="room'+ roomCounter+'">'+
            '<input type="" name="room['+block+']['+floor+']['+roomCounter+'][type]" value="" id="room'+ roomCounter+'">'+
            '<input type="" name="room['+block+']['+floor+']['+roomCounter+'][sexType]" value="" id="room'+ roomCounter+'">'+

                '<label class="col-form-label col-sm-1"><span></span></label>' +
                    '<div class="col-sm-3">' +
                        '<select class="form-control form-control-sm" name="" required>' +
                            '<option value="Please select">Room Type</option>' +
                            @foreach($data->roomDescription as $roomType)
                            '<option value="{{$roomType->id}}">{{$roomType->room_type}}</option>' +
                            @endforeach
                        '</select><!----><!---->' +
                    '</div>' +
                '<label class="col-form-label col-sm-1"><span></span></label>' +
                    '<div class="col-sm-3">' +
                        '<select class="form-control form-control-sm" name="room['+block+']['+floor+']['+roomCounter+'][sexType]">' +
                            '<option value="Please select">Gender</option>' +
                            '<option value="F">Female</option>' +
                            '<option value="M">Male</option>' +

                        '</select><!----><!---->' +
                    '</div>' +
            '</div>'+--}}

    {{--'<span style="font-size: 0.7em">Room '+roomCounter+'</span>' +
        '<span style="font-size: 0.5em">Room&nbsp;</span>' +
        '<span style="font-size: 0.5em">Room&nbsp;</span>' +
        '<span style="font-size: 0.5em">Room&nbsp;</span>' +--}}
