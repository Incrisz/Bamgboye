@stack('scripts')

<!-- Bootstrap JS -->
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/highcharts/js/exporting.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/highcharts/js/variable-pie.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/highcharts/js/export-data.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/highcharts/js/accessibility.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/pace.min.js') }}"></script>

	<!--app JS-->
	<script src="{{ URL::asset('assets/js/app.js') }}"></script>

        <script src="{{ URL::asset('assets/js/index.js') }}"></script>
        <script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script>

<!-- ALL MEMBERS JS -->
	<!--plugins-->
	<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
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


	<!-- DATE AND TIME JS -->
	<script src="{{ URL::asset('assets/plugins/datetimepicker/js/legacy.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/datetimepicker/js/picker.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/datetimepicker/js/picker.time.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
	<script>
		$('.datepicker').pickadate({
			selectMonths: true,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
	</script>
	<script>
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'YYYY-MM-DD HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
	</script>


	<!-- UPLOADS -->
	<script src="{{ URL::asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>

<!-- TAGS -->
<script src="{{ URL::asset('assets/plugins/input-tags/js/tagsinput.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>

	<!-- CALENDER -->

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			var calendarEl = document.getElementById('calendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
				},
				initialView: 'dayGridMonth',
				initialDate: '2020-09-12',
				navLinks: true, // can click day/week names to navigate views
				selectable: true,
				nowIndicator: true,
				dayMaxEvents: true, // allow "more" link when too many events
				editable: true,
				selectable: true,
				businessHours: true,
				dayMaxEvents: true, // allow "more" link when too many events
				events: [{
					title: 'All Day Event',
					start: '2020-09-01',
				}, {
					title: 'Long Event',
					start: '2020-09-07',
					end: '2020-09-10'
				}, {
					groupId: 999,
					title: 'Repeating Event',
					start: '2020-09-09T16:00:00'
				}, {
					groupId: 999,
					title: 'Repeating Event',
					start: '2020-09-16T16:00:00'
				}, {
					title: 'Conference',
					start: '2020-09-11',
					end: '2020-09-13'
				}, {
					title: 'Meeting',
					start: '2020-09-12T10:30:00',
					end: '2020-09-12T12:30:00'
				}, {
					title: 'Lunch',
					start: '2020-09-12T12:00:00'
				}, {
					title: 'Meeting',
					start: '2020-09-12T14:30:00'
				}, {
					title: 'Happy Hour',
					start: '2020-09-12T17:30:00'
				}, {
					title: 'Dinner',
					start: '2020-09-12T20:00:00'
				}, {
					title: 'Birthday Party',
					start: '2020-09-13T07:00:00'
				}, {
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2020-09-28'
				}]
			});
			calendar.render();
		});
	</script>
		<script src="{{ URL::asset('assets/plugins/fullcalendar/js/main.min.js') }}"></script>