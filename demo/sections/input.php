<div class="inToc"><h3>Input</h3></div>

<div class="panel panel-default">
	<div class="panel-heading">
		Usage: <code>input($name, $options)</code>
	</div>
	<div class="panel-body">
		<pre class="syntax html">&lt;?php
?&gt;</pre>
	</div>
	<div class="panel-footer">
		<div class="form-group">
			<?php
			// Text
			echo $Tbs->input('test', 'text', array('placeholder' => 'Some text', 'value' => 'Some text'));
			// Color
			echo $Tbs->input('test2', 'color', array('value' => '#FF0000'));
			// Datetime
			echo $Tbs->input('test3', 'datetime');
			// Url
			echo $Tbs->input('test4', 'url', array('placeholder' => 'http://example.com'));
			// Email
			echo $Tbs->input('test5', 'email', array('placeholder' => 'email@example.com'));
			// Reset button
			echo $Tbs->input('test6', 'reset', array('value' => 'Reset form'));
			// Submit button
			echo $Tbs->input('test7', 'submit', array('value' => 'Submit form'));
			// Input button
			echo $Tbs->input('test8', 'button', array('value' => 'Input button'));
			// Radios
			echo $Tbs->input('test9', 'radio', array('caption' => 'Radio', 'value' => 'radioValue'));
			echo $Tbs->input('test9', 'radio', array('caption' => 'Radio 2', 'default' => true, 'value' => 'radioValue2'));
			echo $Tbs->input('test9', 'radio', array('caption' => 'Radio 3', 'value' => 'radioValue3'));
			// Checkboxes
			echo $Tbs->input('test10', 'checkbox', array('checked' => true, 'caption' => 'I\'m a checkbox !'));
			echo $Tbs->input('test10', 'checkbox', array('disabled' => true, 'caption' => 'I\'m a disabled checkbox'));
			// Static input
			echo $Tbs->input('test11', 'static', array('value'=>'Static input'));
			// Textarea
			$text = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
			echo $Tbs->input('test11', 'textarea', array($text));
			// Select
			$list = array('element1' => 'val1', 'element2' => 'val2', 'element3' => 'val3', 'element4' => 'val4');
			echo $Tbs->inputSelect('test12', $list, array('default' => 'val2'));
			// Multiple select with option groups
			$list2 = array('group1' => $list, 'group2' => array('element5' => 'val5', 'element6' => 'val6', 'element7' => 'val7', 'element8' => 'val8'));
			echo $Tbs->inputSelect('test13', $list2, array('multiple' => true));
			?>
		</div>
	</div>
</div>