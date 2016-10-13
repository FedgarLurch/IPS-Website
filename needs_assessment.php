<?php include 'header.php';?>
	
	<main class="bkgds assessment-bkgd">
		<div class="copy-module assessment-module">
			<form id="contact-form" class="text-base" action="/" method="post">
			  <h1>Schedule a Needs<br>Assessment&nbsp;Meeting</h1>
			  <div class="form_input">
			    <label>
			      <span>Name*</span>
			      <input placeholder="John Doe" type="text" tabindex="1" required autofocus>
			    </label>
			  </div>
			  <div class="form_input">
			    <label>
			      <span>Email*</span>
			      <input placeholder="JohnDoe@domain.com" type="email" tabindex="2" required>
			    </label>
			  </div>
			  <div class="form_input">
			    <label>
			      <span>Phone</span>
			      <input placeholder="000-000-0000" type="tel" tabindex="3" required>
			    </label>
			  </div>
			  <div class="form_input form_message">
			    <label>
			      <span>Message</span>
			      <textarea placeholder="Include all the details you can" tabindex="5" required></textarea>
			    </label>
			  </div>
			  <div class="form-submit">
			    <button class="btn submit-btn" name="submit" type="submit" id="contact-submit">Submit</button>
			  </div>
			</form>
		</div>
	</main>
	
<?php include 'footer.php';?>
	
	

		
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="_/js/interactions.js"></script>

</html>