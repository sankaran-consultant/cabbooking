<?php
class PriceMeta
{
	function LoadMeta()
	{
		if($_REQUEST['action']=="insert"):
		
		else:
			$this->CreatePrice();exit;
		endif;
		
	}	
	function CreatePrice()
	{
		if($_POST['id']):
			global $wpdb;
			$did=$_POST['id'];
			$user_id = get_current_user_id();
			$query="select * from wp_cab_pricing where id=".$did;
			$result=$wpdb->get_results($query);		
			$rs=$result[0];	
		endif;
		?>
		<form name="frm" id="frm">
			<div class="row">
				<div class="col-sm-11 populatemessage"></div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Quotation Mode</label>
								<?php
								if($rs->quote_mode=="y"): $chk='checked="checked"';else: $chk=''; endif;
								?>
								<input type="checkbox" name="quote_mode" id="quote_mode" value="y" <?php echo $chk;?>>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Apply Price By Passenger</label>
								<?php
								if($rs->price_by_passenger=="y"): $ppchk='checked="checked"';else: $ppchk=''; endif;
								?>
								<input type="checkbox" name="price_by_passenger" id="price_by_passenger" value="y" <?php echo $ppchk;?>>	
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>One Way Price (INR/Km)</label>
								<input type="text" class="form-control" name="oneway_price" id="oneway_price" value="<?php echo $rs->oneway_price; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Return Price (INR/Km)</label>
								<input type="text" class="form-control" name="return_price" id="return_price" value="<?php echo $rs->return_price; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Time Pricing (INR/Minute)</label>
								<input type="text" class="form-control" name="time_pricing" id="time_pricing" value="<?php echo $rs->time_pricing; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Return Time Pricing (INR/Minute)</label>
								<input type="text" class="form-control" name="return_time_pricing" id="return_time_pricing" value="<?php echo $rs->return_time_pricing; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>% Return Discount</label>
								<input type="text" class="form-control" name="return_discount" id="return_discount" value="<?php echo $rs->return_discount; ?>">								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Base To Pick-Up Price (INR/Km)</label>
								<input type="text" class="form-control" name="base_pickup_price" id="base_pickup_price" value="<?php echo $rs->base_pickup_price; ?>">								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Drop-Off To Base Price (INR/Km)</label>
								<input type="text" class="form-control" name="dropoff_base_price" id="dropoff_base_price" value="<?php echo $rs->dropoff_base_price; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Standing Fee (INR)</label>
								<input type="text" class="form-control" name="standing_fee" id="standing_fee" value="<?php echo $rs->standing_fee; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Minimum Price (INR)</label>
								<input type="text" class="form-control" name="minimum_price " id="minimum_price" value="<?php echo $rs->minimum_price; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Way Stop Minimum Price</label>
								<input type="text" class="form-control" name="way_stop_minimum_price" id="way_stop_minimum_price" value="<?php echo $rs->way_stop_minimum_price; ?>">								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12">&nbsp;</div>
					</div>
					
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Meet & Greet (INR)</label>
								<input type="text" class="form-control" name="meet_greet" id="meet_greet" value="<?php echo $rs->meet_greet; ?>">								
							</div>
						</div>
					</div>			
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Baby Seat (INR)</label>
								<input type="text" class="form-control" name="baby_seat" id="baby_seat" value="<?php echo $rs->baby_seat; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Booster Seat (INR)</label>
								<input type="text" class="form-control" name="booster_seat" id="booster_seat" value="<?php echo $rs->booster_seat; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Passenger Fee Start From</label>
								<input type="text" class="form-control" name="passenger_fee_start_from" id="passenger_fee_start_from" value="<?php echo $rs->passenger_fee_start_from; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Passenger Fee</label>
								<input type="text" class="form-control" name="passenger_fee" id="passenger_fee" value="<?php echo $rs->passenger_fee; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Dogs Fee (INR)</label>
								<input type="text" class="form-control" name="dogs_fee" id="dogs_fee" value="<?php echo $rs->dogs_fee; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Special Luggage Fee (INR)</label>
								<input type="text" class="form-control" name="special_luggage_fee" id="special_luggage_fee" value="<?php echo $rs->special_luggage_fee; ?>">								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Waiting Time Price (INR/Minute)</label>
								<input type="text" class="form-control" name="waiting_time_price" id="waiting_time_price" value="<?php echo $rs->waiting_time_price; ?>">								
							</div>
						</div>
					</div>
					
				</div>	
				<div class="col-sm-4">
					<div class="row">
						<div class="col-lg-12">Out of hours Pricing</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Apply Price Increment To Special Dates</label> 
								<?php
								if($rs->price_inc_special_dates=="y"): $chk='checked="checked"';else: $chk=''; endif;
								?>
								<input type="checkbox" name="price_inc_special_dates" id="price_inc_special_dates" value="y" <?php echo $chk;?>>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Apply Over Fixed Prices</label>
								<?php
								if($rs->fixed_prices=="y"): $ppchk='checked="checked"';else: $ppchk=''; endif;
								?>
								<input type="checkbox" name="fixed_prices" id="fixed_prices" value="y" <?php echo $ppchk;?>>	
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>INTERVAL NIGHT HOURS</label>
								
								<div class="row">
									<div class="col-sm-4">Night</div>
									<div class="col-sm-4">Hour</div>
									<div class="col-sm-4">Min</div>
								</div>	
								<div class="row">
									<div class="col-sm-4">From</div>
									<div class="col-sm-4"><input type="text" class="form-control" name="interval_from_hour" id="interval_from_hour" value="<?php echo $rs->interval_from_hour; ?>"></div>
									<div class="col-sm-4"><input type="text" class="form-control" name="interval_from_min" id="interval_from_min" value="<?php echo $rs->interval_from_min; ?>"></div>
								</div>	
								<div class="row">
									<div class="col-sm-4">To</div>
									<div class="col-sm-4"><input type="text" class="form-control" name="interval_to_hour" id="interval_to_hour" value="<?php echo $rs->interval_to_hour; ?>"></div>
									<div class="col-sm-4"><input type="text" class="form-control" name="interval_to_min" id="interval_to_min" value="<?php echo $rs->interval_to_min; ?>"></div>
								</div>	
								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Apply Over Fixed Prices</label>
								<?php $apply_over_fixed_price=array("Percentage %","Fixed");?>
								<select name="apply_over_fixed_price">
								<?php
									foreach($apply_over_fixed_price as $afp):
										echo '<option value="'.$afp.'">'.$afp.'</option>';
									endforeach;
								?>
								</select>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<table border="0">
									<tr>
										<td></td>
										<td><label>Mon</label></td>
										<td><label>Tue</label></td>
										<td><label>Wed</label></td>
										<td><label>Thu</label></td>
										<td><label>Fri</label></td>
										<td><label>Sat</label></td>
										<td><label>Sun</label></td>
									</tr>
									<tr>
										<td><label>Day</label></td>
										<td><input type="text" class="form-control" name="d1" id="d1" value="0">	</td>
										<td><input type="text" class="form-control" name="d2" id="d2" value="0">	</td>
										<td><input type="text" class="form-control" name="d3" id="d3" value="0">	</td>
										<td><input type="text" class="form-control" name="d4" id="d4" value="0">	</td>
										<td><input type="text" class="form-control" name="d5" id="d5" value="0">	</td>
										<td><input type="text" class="form-control" name="d6" id="d6" value="0">	</td>
										<td><input type="text" class="form-control" name="d7" id="d7" value="0">	</td>
									</tr>
									<tr>
										<td><label>Night</label></td>
										<td><input type="text" class="form-control" name="n1" id="n1" value="0">	</td>
										<td><input type="text" class="form-control" name="n2" id="n2" value="0">	</td>
										<td><input type="text" class="form-control" name="n3" id="n3" value="0">	</td>
										<td><input type="text" class="form-control" name="n4" id="n4" value="0">	</td>
										<td><input type="text" class="form-control" name="n5" id="n5" value="0">	</td>
										<td><input type="text" class="form-control" name="n6" id="n6" value="0">	</td>
										<td><input type="text" class="form-control" name="n7" id="n7" value="0">	</td>
									</tr>
								</table>
								
								
							</div>
						</div>
					</div>					
					
				</div>
					
					
				<div class="col-sm-4">
					<div class="row">
						<div class="col-lg-12">Radius Pricing (INR/Km)</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Applies Route Section Price Accumulated</label> 
								<?php
								if($rs->price_accumulated=="y"): $chk='checked="checked"';else: $chk=''; endif;
								?>
								<input type="checkbox" name="price_accumulated" id="price_accumulated" value="y" <?php echo $chk;?>>	
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<div class="text-right"><button type="button" name="process_data" class="btn btn-primary add_radius" value="Submit">Add Radius</button></div>
								<div class="row">
									<div class="col-lg-12">&nbsp;</div>
								</div>
								<table border="0" cellspacing="0" class="table table-striped table-bordered table-hover table-responsive no-footer dataTable">
									<thead>
										<tr>
											<th>Up to Distance</th>
											<th>One way Price</th>
											<th>Return Price</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody class="add_radius_fields_wrap">	
										<tr>
											<td><input type="text" class="form-control" name="radius_upto_distance_1" id="radius_upto_distance_1" value="0"></td>
											<td><input type="text" class="form-control" name="radius_one_way_price_1" id="radius_one_way_price_1" value="0"></td>
											<td><input type="text" class="form-control" name="radius_return_price_1" id="radius_return_price_1" value="0"></td>
											<td></td>
										</tr>
									</tbody>									
								</table>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12">&nbsp;</div>
					</div>
					<div class="row">
						<div class="col-lg-12"><label>Hourly Table Price(INR)</label></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Fixed Hourly Price (INR/Hour)</label>
								<input type="text" class="form-control" name="fixed_hourly_price" id="fixed_hourly_price" value="0">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Dynamic Hourly Price (Hour/Price)</label><br style="clear:both;">
								<div class="text-right"><button type="button" name="process_data" class="btn btn-primary add_hourly_price" value="Submit">Add hourly price</button></div>
								<div class="row">
									<div class="col-lg-12">&nbsp;</div>
								</div>
								<table border="0" cellspacing="0" class="table table-striped table-bordered table-hover table-responsive no-footer dataTable">
									<thead>
										<tr>
											<th>Hour</th>
											<th>Price / Hour</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody class="add_hourly_fields_wrap">	
										<tr>
											<td><input type="text" class="form-control" name="hourly_hour_1" id="radius_upto_distance_1" value="0"></td>
											<td><input type="text" class="form-control" name="hourly_price_1" id="radius_one_way_price_1" value="0"></td>
											<td></td>
										</tr>
									</tbody>									
								</table>
							</div>
						</div>
					</div>
					
					

				</div>	
					
				
			</div>	
				
			
			
			
			
			
			
			
			
			
			<div class="row">
				<div class="col-lg-12">&nbsp;</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group text-center">
						<input type="hidden" name="createfrm" value="1">
						<input type="hidden" name="did" value="<?php echo $did; ?>">
						<button type="button" name="process_data" class="btn btn-primary process_data" value="Submit">Submit</button>
						<button type="button" name="search_reset" class="btn btn-primary btn-reset" value="Reset">Reset</button>
					</div>
				</div>
			</div>
		</form>
		<?php
	}	
}
?>

