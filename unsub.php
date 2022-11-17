<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
		echo "Unsubscribe sucressful!";
		$msg = $_POST['email'] . "\nReason:" . $_POST['answer'];

		// send email
		mail("your@email.com","Unsub",$msg);
?>
<p>
	<form id="formoid" class="formun" action="?" autocomplete="off" method="post"><input name="octoken" type="hidden" value="e01fev1pvbpe" /><input name="octoken" type="hidden" value="e01fev1pvbpe" /><input name="octoken" type="hidden" value="e01fev1pvbpe" /><input name="octoken" type="hidden" value="e01fev1pvbpe" /><input name="octoken" type="hidden" value="e01fev1pvbpe" /><input name="octoken" type="hidden" value="e01fev1pvbpe" /><input name="octoken" type="hidden" value="e01fev1pvbpe" />
		<div>
			<h2 class="title">Do you want to unsubscribe?</h2>
		</div>
		<div><label class="title">Email to unsubscribe:</label><input autocomplete="on" name="email" type="text" value="" /></div>
		<div><label class="title">Please let us know why you are unsubscribing:</label>
		<div>
			<input name="answer" type="radio" value="Inappropriate emails" />Inappropriate emails<br />
			<input name="answer" type="radio" value="Not interested anymore" />Not interested anymore<br />
			<input name="answer" type="radio" value="Never signed up" />Never signed up<br />
			<input name="answer" type="radio" value="Too often" />Too often<br />
			<input name="answer" type="radio" value="Bad products" />Bad products<br />
			<input name="answer" type="radio" value="Awful support" />Awful support<br /><input name="answer" type="radio" value="Spam!" />Spam!</div>
		</div>
		<div><input name="unsubscribe" type="submit" value="Unsubscribe" /></div>
	</form>
</p>
