<html>
<head>

	<script type="text/javascript">
        $(function () {
            var chart;
            $(document).ready(function() {
            
                var colors = Highcharts.getOptions().colors,
                    categories = ['School Years'],
                    name = 'Click bar to view breakdown',
                    data = [{y: <?php echo($overall);?>, //total
                            color: colors[0],
                            drilldown: {name: 'School Years',categories: [<?php echo($dateData);?>],data: [<?php echo($enrolledData);?>],color: colors[0]}}];
            
                function setChart(name, categories, data, color) {
                    chart.xAxis[0].setCategories(categories, false);
                    chart.series[0].remove(false);
                    chart.redraw();
                }
            
                chart = new Highcharts.Chart({
                    chart: { renderTo: 'results', type: 'column' },
                    credits: {enabled: false},
                    title: { text: 'Overall Students Enrolled' },
                    subtitle: { text: '# of students enrolled at TMA' },
                    xAxis: { categories: categories},
                    yAxis: { title: { text: '# of students enrolled' } },
                    plotOptions: { column: { cursor: 'pointer', point: { events: {click: function() { var drilldown = this.drilldown;
                                        if (drilldown) { // drill down
                                            setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                        } else { // restore
                                            setChart(name, categories, data);
                                        }}}},
                            dataLabels: {enabled: true, color: colors[0], style: { fontWeight: 'bold' },formatter: function() { return this.y +''; }}}},
                    tooltip: {formatter: function() {var point = this.point,s = this.x +':<b>'+ this.y +'</b><br/>';
                            if (point.drilldown) {
                                s += 'Click to view '+ point.category +'';
                            } else {
                                s += 'Click to return to Overall';
                            }
                            return s;}},
                    series: [{name: name,data: data,color: 'white'}],
                    exporting: {enabled: false}});
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