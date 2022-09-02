<template>
	<!-- BEGIN pos-booking -->
	<div class="pos pos-booking p-0 bg-white" id="pos-booking">
		<!-- BEGIN pos-booking-header -->
<div class="nav-wizards-container">
  <nav class="nav nav-wizards-2 mb-3 mt-3">
    <!-- completed -->
    <div class="nav-item col">
      <a class="nav-link active" href="#">
        <div class="nav-text">Request Ingredients</div>
      </a>
    </div>


    <!-- active -->
    <div class="nav-item col">
      <a class="nav-link active" href="#">
        <div class="nav-text">Approved</div>
      </a>
    </div>

    <!-- disabled -->
    <div class="nav-item col">
      <a class="nav-link border" href="#">
        <div class="nav-text">Delivered</div>
      </a>
    </div>
  </nav>
</div>


			<!-- BEGIN pos-booking-body -->
		<div class="pos-booking-body">
			<!-- BEGIN pos-booking-content -->
			<div class="pos-booking-content">
				<div class="pos-booking-content-container" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
					<div class="row offset-md-2">
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
							<a href="javascript:;" v-b-modal.modalPosBooking class="table-booking card border border-danger">
								<div class="table-booking-container text-black bg-white">
									<div class="table-booking-header">
										<div class="d-flex align-items-center">
											<div class="flex-1">
												<div class="title text-black">TABLE</div>
												<div class="no">01</div>
												<div class="desc">max 4 pax</div>
											</div>
											<div class="pr-1 text-danger">
												<svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
													<path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
												</svg>
											</div>
										</div>
									</div>
									<div class=" bg-white table-booking-body">
										<div class="booking text-black">
											<div bg-white class="time text-black">08:00am</div>
											<div class="info bg-white">-</div>
											<div class bg-white="status"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">09:00am</div>
											<div class="info bg-white">Reserved by Sean</div>
											<div class="status bg-white completed"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">10:00am</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">11:00am</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking">
											<div class="time bg-white text-black">12:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">01:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">02:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">03:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">04:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">05:00pm</div>
											<div class="info bg-white">Reserved by Irene (4pax)</div>
											<div class="status bg-white upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">06:00pm</div>
											<div class="info bg-white">Reserved by Irene (4pax)</div>
											<div class="status bg-white upcoming"><i class="fa fa-circle"></i></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">07:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">08:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">09:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
										</div>
										<div class="booking text-black">
											<div class="time bg-white text-black">10:00pm</div>
											<div class="info bg-white">-</div>
											<div class="status bg-white"></div>
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