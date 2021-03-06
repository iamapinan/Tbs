<div class="inToc"><h2>Icon</h2></div>

<div class="panel panel-default">
	<div class="panel-heading panel-example-heading">
		Usage: <code>icon($icon, $options)</code>
	</div>
	<div class="panel-body panel-example-body">
		<pre class="syntax brush-html">&lt;?php
echo $Tbs-&gt;icon('star');
echo $Tbs-&gt;icon('star', array('class'=&gt;'text-danger', 'title'=&gt;'Yay ! Red star !'));
?&gt;</pre>
	</div>
	<div class="panel-footer panel-example-footer">
		<?php
		echo $Tbs->icon('star');
		echo $Tbs->icon('star', array('class' => 'text-danger', 'title' => 'Yay ! Red star !'));
		?>
	</div>
</div>