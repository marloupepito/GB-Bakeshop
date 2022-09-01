<template>
	<!-- BEGIN pos-booking -->
	<div class="pos pos-booking p-0" id="pos-booking">
		<!-- BEGIN pos-booking-header -->
		<!-- BEGIN pos-booking-body -->
		<div class="pos-booking-body">
			<!-- BEGIN pos-booking-content -->
			<div class="pos-booking-content">
				<div class="pos-booking-content-container bg-white" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<a href="javascript:;" v-b-modal.modalPosBooking class="table-booking">
								<div class="table-booking-container bg-red text-white">
									<div class="table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title text-white">TABLE</div>
												<div class="no">01</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="pr-1 text-success">
												<svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
													<path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
												</svg>
											</div>
										</div>
									</div>
									<div class="table-booking-body">
										<div class="booking bg-danger text-white">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">09:00am</div>
											<div class="info">Reserved by Sean</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">11:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">05:00pm</div>
											<div class="info">Reserved by Irene (4pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">06:00pm</div>
											<div class="info">Reserved by Irene (4pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<a href="javascript:;" v-b-modal.modalPosBooking class="table-booking">
								<div class="table-booking-container">
									<div class="table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title text-white">TABLE</div>
												<div class="no">02</div>
												<div class="desc">max 8 pax</div>
											</div>
											<div class="text-gray-800">
												<svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
													<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
												</svg>
											</div>
										</div>
									</div>
									<div class="table-booking-body">
										<div class="booking bg-danger text-white">
											<div class="time">08:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">09:00am</div>
											<div class="info">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">10:00am</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">11:00am</div>
											<div class="info">Walk in breakfast</div>
											<div class="status completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking highlight">
											<div class="time">12:00pm</div>
											<div class="info">Reserved by John (8pax)</div>
											<div class="status in-progress"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">01:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">02:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">03:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">04:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">05:00pm</div>
												<div class="info-title text-white">-</div>
												<div class="info-desc"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">06:00pm</div>
											<div class="info">Reserved by Terry (6pax)</div>
											<div class="status upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">07:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">08:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">09:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
										<div class="booking bg-danger text-white">
											<div class="time">10:00pm</div>
											<div class="info">-</div>
											<div class="status"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						
					</div>
				</div>
			</div>
			<!-- END pos-counter-content -->
		</div>
		<!-- END pos-booking-body -->
		
		<!-- END #modalPosBooking -->
	</div>
	<!-- END pos-booking -->
</template>

<script>

export default {

	data: function () {
    return {
      time: '00:00',
      posMobileSidebar: false
    }
  },
  methods: {
		hideModal() {
			this.$refs['modalPosBooking'].hide();
		},
		posMobileSidebarToggled: function() {
			this.posMobileSidebar = !this.posMobileSidebar;
		},
		handleCheckTime: function(i) {
			if (i < 10) {
				i = '0' + i;
			}
			return i;
		},
		handleStartTime: function() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var a;
			m = this.handleCheckTime(m);
			a = (h > 11) ? 'pm' : 'am';
			h = (h > 12) ? h - 12 : h;
			
			this.time = h + ':' + m + a;
			setTimeout(() => {
				this.handleStartTime();
			}, 500);
		}
  }
}
</script>