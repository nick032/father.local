<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - March 24, 2014!</div>
			<div class="container_12">
				<div class="grid_12">
					<h2>Наш адрес</h2>
					<div class="map">
						<figure class="">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152673.52075943066!2d34.206880481016874!3d53.280152162928196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4132a78d14da3a05%3A0x6ad84109759a19a0!2z0JHRgNGP0L3RgdC6LCDQkdGA0Y_QvdGB0LrQsNGPINC-0LHQuy4!5e0!3m2!1sru!2sru!4v1473656708170" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</figure>
						<div class="grid_4 alpha">
							<h2>Адрес:</h2>
							<address>
								<span class="fa fa-home"></span>
								г. Брянск <br>
								ул. Крсноармейская <br>
								д 5 офис 7
							</address>
						</div>
						<div class="grid_4">
							<h2>Телефон:</h2>
							<div class="m_phone">
								<div class="fa fa-phone"></div>
								+7 800 559 6580
							</div>
							<div class="m_phone">
								<div class="fa fa-print"></div>
								+7 889 9898138
							</div>
						</div>
						<div class="grid_4 omega">
							<h2>Email:</h2>
							<a href="#"><span class="fa fa-envelope-o"></span> mail@demolink.org</a>
						</div>
						<div class="clear"></div>
					</div>
					<h2>Связаться с нами</h2>
					
					<form id="form" method="post" action="bat/MailHandler.php">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Имя:" data-constraints="@Required @JustLetters" required />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="Email:" data-constraints="@Required @Email" required/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="subject">
							<input type="text" placeholder="Тема:" data-constraints="@Required @JustLetters" required/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						<label class="message">
							<textarea placeholder="Текст сообщения:" data-constraints='@Required @Length(min=20,max=999999)' required></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<!-- <input type="submit" class="btn" value="Sen"> -->
								<a href="#" data-type="reset" class="btn">Clear</a>
								<a href="#" data-type="submit" class="btn">Send</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						Life &copy; 2014 | <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com </a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>