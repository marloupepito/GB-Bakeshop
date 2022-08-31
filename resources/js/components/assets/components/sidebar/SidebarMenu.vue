<script>
const sidebarMenu = [
  { path: '/adminstrator/dashboard', icon: 'fa fa-sitemap', title: 'Dashboard'},
  { path: '/adminstrator/faculty', icon: 'fa fa-store', title: 'Branches',
    children: [
      { path: '/adminstrator/faculty/regular', title: 'Regular Employee' },
      { path: '/adminstrator/faculty/casual', title: 'Casual Employee' },
    ]
  },
   { path: '/adminstrator/accounts', icon: 'fa fa-users', title: 'Accounts',
    children: [
      { path: '/adminstrator/accounts/students', title: 'Purchase Order' },
      { path: '/adminstrator/accounts/faculty', title: 'Account Faculty' }
    ]
  },
  // { 
  //  path: '/adminstrator/results/allresults', icon: 'fa fa-chart-pie', title: 'Results',
  //   children: [
  //     { path: '/adminstrator/results/allresults', title: 'All Results' },
  //     { path: '/adminstrator/results/regular', title: 'Regular Employee Results' },
  //     { path: '/adminstrator/results/casual', title: 'Casual Employee Results' }
  //   ]
  // },
  //  { path: '/adminstrator/schedule', icon: 'fa fa-calendar', title: 'Schedule'},
  // { path: '/adminstrator/questionaire', icon: 'fa fa-pen', title: 'Questionaire'},
  
]

export default sidebarMenu;
</script>
