
<!--   Core JS Files   -->
<script src="{{url ('assets_dashboard/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{url ('assets_dashboard/js/core/popper.min.js')}}"></script>
<script src="{{url ('assets_dashboard/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{url ('assets_dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{url ('assets_dashboard/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{url ('assets_dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


<!-- Chart JS -->
<script src="{{url ('assets_dashboard/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{url ('assets_dashboard/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{url ('assets_dashboard/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{url ('assets_dashboard/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{url ('assets_dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="{{url ('assets_dashboard/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url ('assets_dashboard/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{url ('assets_dashboard/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{url ('assets_dashboard/js/atlantis.min.js')}}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{url ('assets_dashboard/js/setting-demo.js')}}"></script>
<script src="{{url ('assets_dashboard/js/demo.js')}}"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>