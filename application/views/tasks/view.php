<h2>View Tasks</h2>

<div id="tasks_wrap">

	<div class="tasks_top">
		<p><h3>Tasks</h3></p>
		<p>Add a personal task or create and assign a task to someone in the group. If you are an administrator, click <strong>options</strong> to customize the tasks application for your group</p>
		<ul>
			<li><button type="button" class="btn btn-small">Add task</button></li>
			<li><button type="button" class="btn btn-small">Delete</button></li>
			<!--<li><button type="button" class="btn btn-small">Mark complete</button></li>-->
			<li><button type="button" class="btn btn-small">Printable view</button></li>
			<li><button type="button" class="btn btn-small">Options</button></li>
		</ul>
	</div> <!-- end tasks top -->
	
	<div id="tasks_top_form">
		<form class="form-inline">
			
			<div class="left">
				<label>Projects:</label><select class="span2"><option></option></select>
			</div>
			
			<!--note implement sort order type in final layout
			
			<div class="left">	
				<label>View by:</label><select class="span2"><option></option></select>
			</div>-->
			
			<div class="left">
				<label class="checkbox"><input type="checkbox" />Show my tasks only</label>
			</div>
			
			<div class="left">
				<label class="checkbox"><input type="checkbox" />Show completed tasks</label>
			</div>
			
			<div class="right">
				<i class="icon-user">&nbsp;Personal</i>
			</div>
			
		</form>
	</div> <!-- end tasks top form -->
	
	<div id="tasks_table_wrap">
		<table class="table">
			<thead>
				<th></th>
				<th>Tasks</th>
				<th>Due Date</th>
				<th>Status</th>
				<th>Assigned to</th>
				<th>Details</th>
			</thead>
			
			<tr>
				<td><label class="checkbox"><input type="checkbox" /></label></td>
				<td><a href="#"><i class="icon-user">&nbsp;Purchase land</i></a></td>
				<td>9/10</td>
				<td>Not started</td>
				<td>none</td>
				<td></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
		</table>
	</div> <!-- end tasks table wrap -->
	
	<div id="tasks_quick_add">
	
		<p><strong>Quick Add</strong>&nbsp;(Add a personal task) <a href="#" class="right">Include more details</a></p>
		
		<form class="form-inline">
			<div class="left">
				<label>Task:</label>
				<input type="text" class="input-small">
			</div>
			
			<div class="left">
				<label><i class="icon-user">&nbsp;</i>Priority:</label>
				<select class="span2">
					<option></option>
				</select>
			</div>
			
			<div class="left">
				<label>Due:</label>
				<input type="text" class="input-medium" placeholder="insert datetimepicker here">
			</div>
			
			<div class="left">
				<button class="btn">Add</button>
			</div>
			
		</form>
		
	</div> <!-- end tasks quick add -->
	
</div> <!-- end tasks wrap -->