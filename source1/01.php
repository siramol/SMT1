<!DOCTYPE html>
<html>
<head>
	<title>กราฟวงกลม</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
    
        body {
            width: 300px;
            margin: 3rem auto;
        }

        #chart-container {
            width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
	<h1>กราฟวงกลม</h1>
	<div style="display:flex;">
		<canvas id="chart1" style="width:50%;"></canvas>
		<canvas id="chart2" style="width:50%;"></canvas>
	</div>
	<script>
		const data1 = {
			labels: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม'],
			datasets: [{
				label: 'ยอดขาย',
				data: [1200, 800, 1400],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
				borderWidth: 1
			}]
		};

		const data2 = {
			labels: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม'],
			datasets: [{
				label: 'ยอดขาย',
				data: [1000, 1200, 900],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
				borderWidth: 1
			}]
		};

		const options = {
			title: {
				display: true,
				text: 'ยอดขายรายเดือน',
				fontSize: 24
			},
			legend: {
				display: true,
				position: 'bottom'
			}
		};

		const ctx1 = document.getElementById('chart1').getContext('2d');
		const chart1 = new Chart(ctx1, {
			type: 'pie',
			data: data1,
			options: options
		});

		const ctx2 = document.getElementById('chart2').getContext('2d');
		const chart2 = new Chart(ctx2, {
			type: 'pie',
			data: data2,
			options: options
		});
	</script>
</body>
</html>
