<h1><?php if(isset($_SESSION['error'])){ echo $_SESSION['error'];};?></h1>
<form action="<?php echo URL;?>upload/imgInsert/" method="post" enctype="multipart/form-data">
<table style="width:100%">
<tr>
<td width="34%">Name</td><td width="66%"><input type="text" name="cat_name" /></td>
</tr>
<tr>
<td>Category</td>
<td>
	<select name="cat_type">
		<option selected="selected" disabled="disabled"></option>
        <option>IT Devices </option>
        <option>Music </option>
        <option>Learning </option>
        <option>Fashion</option>
        <option>Sports</option>
    </select>
</td>
</tr>
<tr>
<td>Prize</td><td><input type="text" name="cat_prize" /></td>
</tr>
<tr>
<td>Description</td><td><textarea rows="5" cols="30" name="cat_description" id="cat_description"></textarea></td>
</tr>
<tr>
<td>Upload Photo</td>
<td>
	<p>
	  <input type="file" name="image" />
	  <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	</p>
	
	</td>
</tr>
<tr>
<td></td>
<td>	
<p>&nbsp;	  </p>
<p>&nbsp;	  </p>
<button type="submit">Submit</button>
<a class="button" href="javascript://" onclick="history.back();">Cancel</a>
</td>
</tr>
</table>

</form>

