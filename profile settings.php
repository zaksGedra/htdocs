<?php foreach(['fname'=>'text', 'lname'=>'text', 'age'=>'number', 'email'=>'email', 'password'=>'password'] as $field=>$type){
	echo('
		<label for="$field">$field</label>
		<input class="accent" type="$type" name="$field" ><br>');
} ?>