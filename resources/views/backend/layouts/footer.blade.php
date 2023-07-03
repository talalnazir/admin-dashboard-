   <!--plugins-->
   <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('backend/assets/js/index.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/bs-stepper/js/main.js')}}"></script>

   <script src="{{asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	 <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	 </script>
	 <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
			
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	 </script>

    <!--BS Scripts-->
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>