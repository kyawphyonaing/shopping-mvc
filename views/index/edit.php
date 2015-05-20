<h1>Category: Edit</h1>

<?php 
//$_SESSION['id']= $_GET['id'];
$item = $this->edit;
//var_dump($category);exit;
//echo $item['cat_name'];
?>
<h1><?php if(isset($_SESSION['error'])){ echo $_SESSION['error'];};?></h1>
<form action="<?php echo URL;?>index/imgUpdate/" method="post" enctype="multipart/form-data">
<table style="width:100%">
<tr>
<td width="34%">Name</td><td width="66%"><input type="text" name="cat_name" value="<?php echo $item['cat_name']?>"/></td>
</tr>
<tr>
<td>Category</td>
<td>
<select name="cat_type">
<option <?php if ($item['cat_type']=="IT Devices") echo'selected';?> >IT Devices</option>
<option <?php if ($item['cat_type']=="Music") echo'selected';?> >Music</option>
<option <?php if ($item['cat_type']=="Learning") echo'selected';?> >Learnings</option>
<option <?php if ($item['cat_type']=="Fashion") echo'selected';?> >Fashion</option>
<option <?php if ($item['cat_type']=="Sports") echo'selected';?> >Sports</option>
</select>
</td>
</tr>
<tr>
<td>Prize</td><td><input type="text" name="cat_prize" value="<?php echo $item['cat_prize']?>"/></td>
</tr>
<tr>
<td>Description</td><td><textarea rows="5" cols="30" name="cat_description" id="cat_description">
<?php echo $item['cat_description']?></textarea></td>
</tr>
<tr>
<td>Uploaded Photo</td>
<td>
<p>
<img src="<?php echo URL.'public/images/' . $item['cat_image']?>" style="width:120px; height:100px;">
<?php echo $item['cat_image']?>

</p>
<p><br>&nbsp;	* if you want to change photo, you must delete all. </p>

</td>
</tr>
<tr>
<td></td>
<td>
<p>&nbsp;	  </p>
<input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
<button type="submit">submit</button>
<!--  
<a class="button" href="<?php echo URL;?>index">Cancel</a>
<?php echo "<a href=".$_SERVER['HTTP_REFERER'].">Cancel</a>";?>
-->
<a class="button" href="javascript://" onclick="history.back();">Cancel</a>


</td>
</tr>
</table>
</form>



