<h3>Account Manager, General</h3>

<div class="headermain">
	<div class="navi">
		<ul class="nav nav-tabs">
				
			<li><a href="/am/logbook/aa_useractivity">Logbook</a></li>
									<li><a href="/am/agentconfig/agentinfo">Agent Configuration</a></li>
									<li class="active">Agency Configuration</li>
						<li><a href="#">Account Management</a></li>
						<li><a href="/am/database/customization">Database</a></li>
					</ul>
	</div>
	
	</div>
 

<div id="slidermain1">

 
<div class="billing_coustumbox">
	<div class="coustumbox_1">
		<div class="cnavi">
			<ul>
								<li><strong>general</strong></li>
								<li>|</li>
								<li><a href="/am/agencyconfig/localsettings">local settings</a></li>
								<li>|</li>
								<li><a href="/am/agencyconfig/billing">billing</a></li>
								<li>|</li>
								<li><a href="/am/agencyconfig/agency_calendar">agency calendar</a></li>
								<li>|</li>
								<li><a href="/am/agencyconfig/agency_division">agency division</a></li>
							</ul>
		</div>
	</div>
</div>
<div class="main_am_content">
	<div class="general_maincontainer">
	<div class="general_maincontainer_inner">
	
	<table class="table general_table">
	
	<tr>
		<td class="td_right">Language:</td>
		<td>
			<select name="data[]" class="span3 genrl_lan" id="">
<option value="default">select language</option>
</select>		</td>
	</tr>
	
	<tr>
		<td class="td_right">Country:</td>
		<td>
			<select name="data[]" class="span4 genrl_lan" id="">
<option value="default">select country</option>
</select>		</td>
	</tr>
	
	<tr>
		<td class="td_right">View your current timezone:</td>
	<td>
		<div class="gen_tz">
			<div class="input select"><select name="data[]" class="span4 genrl_lan" id="">
<option value="default">select timezone</option>
</select></div>			<label class="checkbox"><input type="hidden" name="data[]" id="_" value="0"/><input type="checkbox" name="data[]"  value="1" id=""/>display all timezones</label>
			
		</div>
	</td>
	</tr>
	
	<tr>
		<td class="td_right">Time format:</td>
		<td>
			<select name="data[]" class="span2 genrl_lan" id="">
<option value="default">select format</option>
</select>		</td>
	</tr>
	
	<tr>
		<td class="td_right">Default view:</td>
		<td> 
			<div class="default_view_ac_gen">
				<span style="margin-left:0;">Display</span>
				<select name="data[]" id="">
<option value="default">select display</option>
</select>				
				<span style="padding-left:5px;">First day of week</span>
				<select name="data[]" id="">
<option value="default">select day</option>
</select>			</div>
			
			<div style="margin-top:8px;" class="default_view_ac_gen">
				<span style="margin-right:5px;margin-left:0;">Layout</span>
				<select name="data[]" id="">
<option value="default">select layout</option>
</select>				<img src="/img/cal.gif" alt="not found" />				<span><strong><u><a href="/am/agencyconfig/1">What&#039;s this?</a></u></strong></span>
			</div>
		</td>
	</tr>
		
	<tr>
		<td class="td_right">Show weekends:</td>
		<td class="wknds_show">
			<label class="radio"><input type="hidden" name="data[]" id="_" value=""/><input type="radio" name="data[]" id="WkendShow" value="wkend_show" />Yes</label>
			<label class="radio"><input type="hidden" name="data[]" id="_" value=""/><input type="radio" name="data[]" id="WkendShow" value="wkend_show" />No</label>
		</td>
	</tr>
	
	
	<tr>
		<td class="td_right">Show current time:</td>
		<td class="show_time_cur">
			<label class="radio"><input type="hidden" name="data[]" id="_" value=""/><input type="radio" name="data[]" id="ShowCurTime" value="show_cur_time" />Yes</label>
			<label class="radio"><input type="hidden" name="data[]" id="_" value=""/><input type="radio" name="data[]" id="ShowCurTime" value="show_cur_time" />No</label>
		</td>
	</tr>
	
	</table>
	
	
	</div>
	</div>
	
	
<div class="save_container">
	
		
	<div class="save_content">
		<button class="btn btn-primary disabled" type="submit">Save Changes</button>	</div><!-- end save_content -->
	
		
	
</div><!-- end save_container -->
</div><!-- end main AM content -->



</div><!-- slidermain1 closed -->