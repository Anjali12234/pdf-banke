$(document).ready(function() {
	var myChart = new Chart(document.getElementById('myChart'), {
		type: 'bar',
		data: {
			labels: labels,
			datasets: [{
				label: "Tasks",
				data: chartValues,
				backgroundColor: "#0d6efd",
				borderColor: 'transparent',
				borderWidth: 2.5,
				barPercentage: 0.4,
			}]
		},
		options: {
			scales: {
				yAxes: [{
					gridLines: {},
					ticks: {
						stepSize: 15,
					},
				}],
				xAxes: [{
					gridLines: {
						display: false,
					}
				}]
			}
		}
	})
			});