<template>
	<div>
		<div class="d-flex align-items-center mb-2px" style="padding-top:20% !important">
			<div class="flex-grow-1 text-center">
				<div class="progress h-20px rounded-pill bg-white bg-opacity-10">
					<div class="progress-bar progress-bar-striped bg-danger" style="width: 100%">
						Loading...
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

import moment from 'moment'
import axios from 'axios'
export default {

    data: function () {
	    return {
			timerCount: 1
	    }
  },

   watch: {

            timerCount: {
                handler(value) {
 					const branch = window.location.search.substring(1)
                    if (value > 0) {
                        setTimeout(() => {
                            this.timerCount--;
 							this.$router.push({path:'/adminstrator/branch/'+branch+'/requested'})
 							localStorage.setItem("admin_branch_id",branch)
                        }, 1000);
                    }

                },
                immediate: true // This ensures the watcher is triggered upon creation
            }

        }
}
</script>