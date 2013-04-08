<?php
$usize=count($users);
$usize--;
?>
<html>
<head>
	<script type="text/javascript">
        $(function () {
		    var chart;
		    $(document).ready(function() {
		        chart = new Highcharts.Chart({
		            chart: {renderTo: 'results',type: 'bar'},
		            title: {text: 'Task Status'},
		            xAxis: {
		                categories: [<?php foreach ($users as $i => $value) {
                                    if($i==$usize){
                                        echo("'$users[$i]'");
                                    }else{
                                        echo("'$users[$i]',");
                                    }
                                }?>],
		                title: {
		                    text: null
		                }
		            },
		            yAxis: {min: 0,title: {text: 'Number of Tasks',align: 'high'},labels: {overflow: 'justify'}},
		            tooltip: {formatter: function() {return ''+ this.series.name +': '+ this.y ;}},
		            plotOptions: {bar: {dataLabels: {enabled: true}}},
		            legend: {layout: 'vertical',align: 'right',verticalAlign: 'top',x: -100,y: 100,floating: true,borderWidth: 1,backgroundColor: '#FFFFFF',shadow: true},
		            credits: {enabled: false},
		            exporting: {enabled: false},
		            series: [{
		                name: 'Total',
		                data: [<?php foreach ($total as $i => $value) {
                                    if($i==$usize){
                                        echo("$total[$i]");
                                    }else{
                                        echo("$total[$i],");
                                    }
                                }?>]
		            }, {
		                name: 'Pending',
		                data: [<?php foreach ($pending as $i => $value) {
                                    if($i==$usize){
                                        echo("$pending[$i]");
                                    }else{
                                        echo("$pending[$i],");
                                    }
                                }?>]
		            }, {
		                name: 'Accomplished',
		                data: [<?php foreach ($accomplished as $i => $value) {
                                    if($i==$usize){
                                        echo("$accomplished[$i]");
                                    }else{
                                        echo("$accomplished[$i],");
                                    }
                                }?>]
		            }]
		        });
		    });
		    
		});
    </script>
</head>
	<body>
        <div id="graph">
            <div id="results" style="width: 100%; height: 70%; margin: 0 auto"></div>
        </div>
	</body>
</html>