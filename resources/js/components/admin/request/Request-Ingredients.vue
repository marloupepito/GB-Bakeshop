<template>
					<!-- BEGIN list-email -->
					<ul class="list-group list-group-lg no-radius list-email">
						<li class="list-group-item unread">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox1">
									<label class="form-check-label" for="emailCheckbox1"></label>
								</div>
							</div>
							<router-link to="/adminstrator/branch/request/view-request/ylagan" class="email-user bg-blue">
								<span class="text-white">F</span>
							</router-link>
							
							<div class="email-info">
								<router-link to="/adminstrator/branch/request/view-request/ylagan">
									<span class="email-sender">Facebook Blueprint</span>
									<span class="email-title">Pending marketing tips, how-to video, and more!</span>
									<span class="email-desc">Today</span>
									<span class="email-time">Today</span>
								</router-link>
							</div>
						</li>
						<li class="list-group-item unread">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox2">
									<label class="form-check-label" for="emailCheckbox2"></label>
								</div>
							</div>
							<router-link to="/adminstrator/branch/request/view-request/endrina" class="email-user bg-indigo">
								<span class="text-white">C</span>
							</router-link>
							<div class="email-info">
								<router-link to="/adminstrator/branch/request/view-request/endrina">
									<span class="email-sender">Color Admin</span>
									<span class="email-title">Color Admin dashboard v2 is ready for live</span>
									<span class="email-desc">Proin interdum aliquam urna, quis lobortis magna tincidunt ac. Integer sed pulvinar neque...</span>
									<span class="email-time">Today</span>
								</router-link>
							</div>
						</li>
						
					</ul>
</template>