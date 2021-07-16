
<!-- HTML Form -->
			<section class="Enroll_body">
				<div>
					<div class="blackboard">
						<h3>Enroll Now</h3>
						<p>Classes will be held online</p>
						<form class="form" method="POST" action='./enroll.php'>
							<div class="formelement"><label for="name">Name: </label><input type="text"
									required="" id="name" name="name" value="" />
							</div>
							<div class="formelement"><label for="email">Email: </label><input
									type="email" required="" minLength="10" name="email" value="" id="email" />
							</div>
							<div class="formelement"><label for="phone">Mobile: </label><input
									type="tel" id="phone" name="phone" required="" minLength="10" maxLength="14"
									value="" /></div>

							<div class="formelement"><label class="queslabel">Are you
									a?</label>
								<div class="radiogroup">
									<div><input type="radio" id="parent" name="role" value="Parent" /><label
											for="parent">Parent</label></div>
									<div><input type="radio" id="student" name="role" value="Student" /><label
											for="student">Student</label></div>
								</div>
							</div>
							<div class="formelement"><label class="queslabel">Select
									Your Class: </label><select name="grade" id="grade">
									<option value="" selected>--- Select your class ---</option>
									<option value="8th">8th</option>
									<option value="9th">9th</option>
									<option value="10th">10th</option>
								</select></div>

							<div class="formelement"><label class="queslabel">Select
									Your Course: </label>
								<div class="radiogroup">
									<div><input type="radio" id="standard" name="courseRegistered" value="Standard"
											checked /><label for="standard">Standard
											DHI</label></div>
									<div><input type="radio" id="specialised" name="courseRegistered"
											value="Specialised" /> <label for="specialised">Specialised
											DHI</label></div>
								</div>
							</div>
							<div class="formelement"><input type="submit" value="Submit" name='submit'/>
							</div>
						</form>
					</div>
				</div>
			</section>



            