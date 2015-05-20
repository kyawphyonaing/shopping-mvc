<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/email/style.css" />
<link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice' rel='stylesheet' type='text/css'>

<div id="content_mail">
<h4> Contact me </h4><br>
<form action="<?php echo URL;?>index/send_mail/" method="post" enctype="multipart/form-data">
<p> <label for="name" class="iconic user" > Name <span class="required">*</span></label> <input type="text" name="username" id="username"  required="required" placeholder="Hi friend, how may I call you ?"  /> </p>
<br>
<p> <label for="email" class="iconic mail-alt"> E-mail address <span class="required">*</span></label> <input type="email" name="email_address" id="usermail" placeholder="I promise I hate spam as much as you do" required  /> </p>
<br>
<p> <label for="message" class="iconic comment"> Message  <span class="required">*</span></label> <textarea placeholder="Don't be shy, live me a friendly message and I'll answer as soon as possible "  required="required" name="comments"></textarea> </p>
<br>
<p class="indication"> All fields with a <span class="required">*</span> are required</p>
	
<input type="submit" value=" ★  Send the mail !" />

</form>
</div>
