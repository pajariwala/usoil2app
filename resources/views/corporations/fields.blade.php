<!-- http://stackoverflow.com/a/31440360 -->
<div class="col-md-12">
    <div class="col-md-12 top-heading">
        <div class="row">
            <div class="col-md-10 padding-left-none">
                <h4>{{ $moduleTitle }}</h4>
            </div>
            <div class="col-md-2">
                <div class="row top-right-btn">
                    <div class="col-md-12">
                        <a href="{!! route('corporations.index') !!}" class="btn btn-default pull-left">Discard</a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row row-spacer-top-bot">
        <div class="col-md-10">
            <h3>Corporation Details</h3>
        </div>
        <div class="col-md-2">
            <div class="row top-right-btn">
                <div class="col-md-6 pull-right">
                    <a href="javascript: void(0);" id="show_1" tabindex="-1">Show</a>
                <!--/div>
                <div class="col-md-6"-->
                    <a href="javascript: void(0);" id="hide_1" tabindex="-1">Hide</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @include('core-templates::common.errors')
    </div>
	<div id="corp-details">
		<div class="row">
			<div class="col-md-4 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation Name Field -->
				{!! Form::text('corporation_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Corporation Name</label>
			</div>
			<div class="col-md-8 row-spacer-top-bot checkbox checkbox-warning cb-padding-top">
				<!-- Status Field -->
				{!! Form::hidden('status', false) !!}
				{!! Form::checkbox('status', '1', null, ['id' => 'is-active', 'class' => 'styled']) !!} 
				<label for="is-active" class="checkbox-inline">
					is Active?
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation Address1 Field -->
				{!! Form::text('corporation_address1', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Address 1</label>
			</div>
			<div class="col-md-6 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation Address2 Field -->
				{!! Form::text('corporation_address2', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Address 2</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation City Field -->
				{!! Form::text('corporation_city', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">City</label>
			</div>
			<div class="col-md-3 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation State Field -->
				{!! Form::select('corporation_state', Config::get('constants.state_en'), null, ['class' => 'form-control']) !!}
			</div>
			<div class="col-md-3 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation Zipcode Field -->
				{!! Form::text('corporation_zipcode', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Zip Code</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation Phone Field -->
				{!! Form::text('corporation_phone', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Phone No.</label>
			</div>
			<div class="col-md-2 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Corporation Phone Ext Field -->
				{!! Form::text('corporation_phone_ext', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Ext</label>
			</div>
		</div>
		<div class="col-md-12 line-break"></div>
	</div>
</div>

<div class="col-md-12">
    <div class="row row-spacer-top-bot">
        <div class="col-md-10">
            <h3>Corporation Contact Details</h3>
        </div>
        <div class="col-md-2">
            <div class="row top-right-btn">
                <div class="col-md-6 pull-right">
                    <a href="javascript: void(0);" id="show_2" tabindex="-1">Show</a>
                <!--/div>
                <div class="col-md-6"-->
                    <a href="javascript: void(0);" id="hide_2" tabindex="-1">Hide</a>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-details">
		<div class="row">
			<div class="col-md-4 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Contact Person Title Field -->
				{!! Form::text('contact_person_title', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Job Title</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Contact Person First Name Field -->
				{!! Form::text('contact_person_first_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">First Name</label>
			</div>
			<div class="col-md-4 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Contact Person Last Name Field -->
				{!! Form::text('contact_person_last_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Last Name</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Contact Person Email Field -->
				{!! Form::email('contact_person_email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Email</label>
			</div>
			<div class="col-md-4 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Contact Person Phone Field -->
				{!! Form::text('contact_person_phone', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Phone</label>
			</div>
			<div class="col-md-2 row-spacer-top-bot mui-textfield mui-textfield--float-label">
				<!-- Contact Person Phone Ext Field -->
				{!! Form::text('contact_person_phone_ext', null, ['class' => 'form-control', 'placeholder' => '']) !!}
				<label tabindex="-1">Ext</label>
			</div>
		</div>
		<div class="col-md-12 line-break"></div>
	</div>
</div>

<div class="col-md-12">
    <div class="row row-spacer-top-bot">
        <div class="col-md-10">
            <h3>Linked Casino & Restaurants</h3>
        </div>
        <div class="col-md-2">
            <div class="row top-right-btn">
                <div class="col-md-6 pull-right">
                    <a href="javascript: void(0);" id="show_3" tabindex="-1">Show</a>
                <!--/div>
                <div class="col-md-6"-->
                    <a href="javascript: void(0);" id="hide_3" tabindex="-1">Hide</a>
                </div>
            </div>
        </div>
    </div>
    <div id="linked-casinos">
		<div class="row">
			<div id="casinos" class="col-md-4 row-spacer-top-bot">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<div class="row">
								<h5>Linked Casinos</h5>
							</div>
						</div>
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12 checkbox checkbox-warning">
									<input id="show-linked-casino" onclick="return showLinkedCasino();" type="checkbox" checked>
									<label for="show-linked-casino" class="checkbox-inline pull-right" style="padding-left:5px;">
										Show linked only
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-spacer-top-bot mui-textfield mui-textfield--float-label">
						{!! Form::text('casino_search', null, ['class' => 'form-control search', 'placeholder' => '']) !!}
						<label tabindex="-1">Filter Casino</label>
					</div>
				</div>
				<div class="col-md-12 link-to-checkboxes-bg">
					<div class="row link-to-checkboxes custom-scrollbar list">
						@foreach($casinos as $casino)
							<div class="col-md-12 checkbox checkbox-warning">
								{!! Form::hidden('casino['.$casino->custom_index.']', false) !!}
								{!! Form::checkbox('casino['.$casino->custom_index.']', $casino->id, $casino->id_exists, ['id' => 'is-active'.$casino->id, 'class' => 'casino-item-checkbox', 'onclick' => 'return showRestaurant();', 'class-data-collection' => '.restaurant-list'.$casino->id]) !!}
								<label id="casino{!! $casino->id !!}" class="checkbox-inline casino-name">
									{!! $casino->casino_trade_name !!}
								</label>
								<div class="hide">
								@foreach($casino->restaurantLinks as $links)
									<input type="hidden" class="restaurant-list{!! $casino->id !!}" value="#restaurant-checkbox-container{!! $links->restaurant->id !!}">
								@endforeach
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div id="restaurants" class="col-md-4 row-spacer-top-bot">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<div class="row">
								<h5>Linked Restaurants</h5>
							</div>
						</div>
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12 checkbox checkbox-warning">
									<input id="show-linked-restaurant" onclick="return showLinkedRestaurant();" type="checkbox" checked>
									<label for="show-linked-restaurant" class="checkbox-inline pull-right" style="padding-left:5px;">
										Show linked only
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-spacer-top-bot mui-textfield mui-textfield--float-label">
						{!! Form::text('restaurant_search', null, ['class' => 'form-control search', 'placeholder' => '']) !!}
						<label tabindex="-1">Filter Restaurant</label>
					</div>
				</div>
				<div class="col-md-12 link-to-checkboxes-bg">
					<div id="linked-restaurants" class="row link-to-checkboxes custom-scrollbar list">
						@foreach($restaurants as $restaurant)
							<div id="restaurant-checkbox-container{!! $restaurant->id !!}" class="col-md-12 checkbox checkbox-warning hide-important">
								{!! Form::hidden('restaurant['.$restaurant->custom_index.']', false) !!}
								{!! Form::checkbox('restaurant['.$restaurant->custom_index.']', $restaurant->id, $restaurant->id_exists, ['id' => 'is-active-restaurant'.$restaurant->id, 'onclick' => 'toggleColor(this.value,this.checked);', 'class' => 'restaurant-item-checkbox']) !!}
								<label id="restaurant{!! $restaurant->id !!}" class="checkbox-inline restaurant-name">
									{!! $restaurant->restaurant_name !!}
								</label>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@section('scripts')
    <!-- SOURCE http://www.listjs.com/docs/list-api -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
    <script type="text/javascript">
        var casinoOptions = {
            valueNames: ['casino-name']
        };
        var casinoList = new List('casinos', casinoOptions);

        var restaurantOptions = {
            valueNames: ['restaurant-name']
        };
        var restaurantList = new List('restaurants', restaurantOptions);

        function showRestaurant()
        {
            notSelectedCasinoHideCasino();
        }
		
		function toggleColor(val,chk)
		{
			if(chk)
			{
				$("#restaurant"+val).css("color", "#A88C13");
			}
			else
			{
				$("#restaurant"+val).css("color", "#8D8D8D");
			}
		}

        function notSelectedCasinoHideCasino(){
		     $(".casino-item-checkbox").each(function(){
				var checkval = this.value;
                var restaurant_class = $(this).attr('class-data-collection');
                //console.log(casino_class);
                if(!$(this).is(':checked')) {
                    $(restaurant_class).each(function(){
                        var value = $(this).val();
                        $(value +"> input[type='checkbox']").removeAttr('checked');
						$(value).removeClass("hide-important").addClass("hide-important");
						$("#casino"+checkval).css("color", "#555555");
						$(value +"> input[type='checkbox'] + label").css("color", "#8D8D8D");
					});
                }
				else
				{
					$("#casino"+checkval).css("color", "#A88C13");
				}
            }).promise().done(function() {
                selectedCasinoShowCasino();
            });
        }
        function selectedCasinoShowCasino() {
		     $(".casino-item-checkbox").each(function(){
				var checkval = this.value;
                var restaurant_class = $(this).attr('class-data-collection');
                if($(this).is(':checked')) {
                    $(restaurant_class).each(function(){
                        var value = $(this).val();
                        $(value).removeClass("hide-important");
						$("#casino"+checkval).css("color", "#A88C13");
                    });
                }
				else
				{
					$("#casino"+checkval).css("color", "#555555");
				}
            });
        }

        function showLinkedCasino() {
		    if($("#show-linked-casino").is(':checked'))
            {
                $(".casino-item-checkbox").each(function(){
					var checkval = this.value;
                    if(!$(this).is(':checked'))
					{
                        $(this).parent().removeClass("hide-important").addClass("hide-important");
						$("#casino"+checkval).css("color", "#555555");
					}
					else
					{
						$("#casino"+checkval).css("color", "#A88C13");
					}
                });
            }
            else
            {
                $(".casino-item-checkbox").each(function(){
                    $(this).parent().removeClass("hide-important");
                });
            }
        }

        function showLinkedRestaurant() {
		     if($("#show-linked-restaurant").is(':checked'))
            {
                $(".restaurant-item-checkbox").each(function(){
					var checkval = this.value;
                    if(!$(this).is(':checked'))
					{
                        $(this).parent().removeClass("hide-important").addClass("hide-important");
						$("#restaurant"+checkval).css("color", "#8D8D8D");
					}
					else
					{
						$("#restaurant"+checkval).css("color", "#A88C13");
					}
                });
            }
            else
            {
                $(".restaurant-item-checkbox").each(function(){
                    $(this).parent().removeClass("hide-important");
                });
            }
        }

        window.onload = function(e) {
			showLinkedCasino();
            selectedCasinoShowCasino();
			showLinkedRestaurant();
            $("#show_1").hide();
            $("#show_2").hide();
            $("#show_3").hide();
        };
        
        $("#hide_1").click(function(){
			$("#show_1").show();
			$("#hide_1").hide();
			$("#corp-details").hide(500);
		});
		
		$("#show_1").click(function(){
			$("#show_1").hide();
			$("#hide_1").show();
			$("#corp-details").show(500);
		});
		
		$("#hide_2").click(function(){
			$("#show_2").show();
			$("#hide_2").hide();
			$("#contact-details").hide(500);
		});
		
		$("#show_2").click(function(){
			$("#show_2").hide();
			$("#hide_2").show();
			$("#contact-details").show(500);
		});
		
		$("#hide_3").click(function(){
			$("#show_3").show();
			$("#hide_3").hide();
			$("#linked-casinos").hide(500);
		});
		
		$("#show_3").click(function(){
			$("#show_3").hide();
			$("#hide_3").show();
			$("#linked-casinos").show(500);
		});
    </script>
@endsection






