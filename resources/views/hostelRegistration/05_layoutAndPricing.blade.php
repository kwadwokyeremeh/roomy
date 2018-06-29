
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
                            <a href="#">Layout and Pricing</a>
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
                            <a href="javascript:void(0);" style="font-size: 0.55em"><small>5.Layout and Pricing</small></a>
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

                                        <div class="entry-content-text-wrapper clearfix">
                                            <div class="entry-content-wrapper">
                                                <div class="entry-content">
                                                    <div class="woocommerce">

                                                        <div class="row">
                                                            <div class="vk-checkout-billing-left">

                                                                    <div class="woocommerce-billing-fields">
                                                                <form action="{{ route('hostel.registration.submit', [$step::$slug]) }}" method="POST">
                                                                            @csrf
                                                                        <h3>Rooms and Prices</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="col-md-6 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="one_in_a_room" data-priority="10">
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
                                                                            </p>
                                                                            {{--Draw your hostel layout--}}
                                                                            <div class="">
                                                                                <div class="panel-body">
                                                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                                                                                    <div class="col-xs-12 text-center" style="margin-top:15px;">
                                                                                        <button class="btn btn-success" id="addBlock" value=""><span class="glyphicon glyphicon-plus"></span> Add Block</button>
                                                                                    </div>
                                                                                </div><!-- /.panel-body -->
                                                                                <div class="panel-footer"><div class="col-sm-offset-3 col-sm-6 text-center">
                                                                                        Instructions
                                                                                    </div>
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
                        '<a href="#" accesskey="' + counter + '" class="edit_ctg_label pull-right"><span class="glyphicon glyphicon-edit "></span> Edit</a>' +
                        '<a href="#" accesskey="' + counter + '" class="pull-right" id="addButton2"> <span class="glyphicon glyphicon-plus"></span> Add Floor</a></div>' +
                        '<input type="hidden" name="block['+blockName +']">' +
                        '</h4></div>' +
            '<div id="collapse' + counter + '" class="panel-collapse collapse ' + expandedClass + '"role="tabpanel" aria-labelledby="heading' + counter + '">' +
                '<div class="panel-body"><div id="TextBoxDiv'+counter + '">' +
                        '<div id="block'+counter+'">' +
                            '</div>'+
                        '</div></div></div><div class="panel-footer"><div class="col-sm-offset-3 col-sm-6 text-center">' + blockName + '<a class="btn btn-xs btn-primary" accesskey="' + counter + '" id="addButton2" ><span class="glyphicon glyphicon-plus"></span> Add Floor</a>' +
                    '<a class="btn btn-xs btn-success" accesskey="' + counter + '" id="ajax_submit_button" >Done</a></div></div></div></div>');
    blockCounter++;
    counter++;
    }


    });

    /*Add Floor*/



    var x = 1;

    $(wrapper).on("click", "#addButton2", function (e) {
    e.preventDefault();
    var parentId = $(this).attr('accesskey');
    var parentPanel = '#panel' + parentId;
    {{--var room = $(this).closest(parentId).children('.room');--}}

     var floorName = prompt("Please Add your floor name");


    if (floorName === '') {
    blockCounter--;
    floorName = 'Block ' + parentId + ' Floor ' + floorCounter;

    }
    if (floorName !== null) {
    var ariaExpanded = false;
    var expandedClass = '';
    var collapsedClass = 'collapsed';


    $('#panel' + parentId).find("#block" + parentId).append('<div class="col-sm-12" style="margin-bottom: 0;"><div class="panel panel-default" id="panel' + counter + '">' +
            '<div class="panel-heading" role="tab" id="heading' + counter + '"><h4 class="panel-title">' +
                    '<a class="' + collapsedClass + '" id="panel-lebel' + counter + '" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + counter + '" ' +
                    'aria-expanded="' + ariaExpanded + '" aria-controls="collapse' + floorCounter + '"> ' + floorName + ' </a><div class="actions_div" style="position: relative; top: -26px;">' +
                        '<a href="#" accesskey="' + counter + '" class="remove_floor_panel exit-btn pull-right"><span>&times;</span></a>' +
                        '<a href="#" accesskey="' + counter + '" class="edit_ctg_label pull-right"><span class="glyphicon glyphicon-edit"></span> Edit</a>' +
                        '<a href="#" accesskey="' + counter + '" class="pull-right" id="addButton3"> <span class="glyphicon glyphicon-plus"></span> Add Room</a>' +
                        '<input type="hidden" name="floor['+ parentId+']['+floorName+'][room '+roomCounter+']"/>' +
                        '</h4></div>' +
            '<div id="collapse' + counter + '" class="panel-collapse collapse ' + expandedClass + '"role="tabpanel" aria-labelledby="heading' + counter + '">' +
                '<div class="panel-body"><div id="TextBoxDiv' + counter + '"></div><a class="btn btn-xs btn-primary" accesskey="' + counter + '" id="addButton3" ><span class="glyphicon glyphicon-plus"></span> Add Room</a>' +
                    '<a class="btn btn-xs btn-success" accesskey="' + counter + '" id="ajax_submit_button" >Done</a></div></div></div></div></div>');

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
        var blockId = '#panel'+accesskey;
        var floorId = '#block'+accesskey;
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


        y++;
    $('#panel' + accesskey).find('#TextBoxDiv' + accesskey).append('<p class="room square">' +
        '<a href="#" class="remove_field exit-btn"><span>&times;</span></a>&nbsp;' +
            '<input type="hidden" name="room['+blockId+']['+floorId+']['+roomCounter+'][name]" id="room'+ roomCounter+'">'+
            '<input type="hidden" name="room['+blockId+']['+floorId+']['+roomCounter+'][type]" id="room'+ roomCounter+'">'+
            '<input type="hidden" name="room['+blockId+']['+floorId+']['+roomCounter+'][sexType]" id="room'+ roomCounter+'">'+
            '<input type="hidden" name="room['+blockId+']['+floorId+']['+roomCounter+'][status]" id="room'+ roomCounter+'">'+
        '<span>Room '+roomCounter+'&nbsp;</span>' +
        '<span>Room&nbsp;</span>' +
        '<span>Room&nbsp;</span>' +
        '<span>Room&nbsp;</span>' +
        '</p>');


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

    $(wrapper).on("click", ".remove_field", function (e) {
    e.preventDefault();
    $(this).parent('div').remove();
    y--;
    $(this).parent('p').remove();
    y--;
    });

    $(wrapper).on("click", ".edit_ctg_label", function (e) {
    var panelId = $(this).attr('accesskey');
    var catgName = prompt("Please Change your category name");
    if (catgName === '') {
    return false;
    }
    if (catgName !== null) {
    $('#panel' + panelId).find("#panel-lebel" + panelId).html('').html(catgName);
    }


    });
    });


    @endsection
