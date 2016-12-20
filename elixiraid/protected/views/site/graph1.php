<?php
//print_r($doctor);
//exit;
?>
<center><h4></h4></center>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/Chart.js"></script>
<canvas id="total" width="500" height="250"></canvas>
<script>
        var pieData = [
            {
                value: <?php echo $total;?>,
                color:"#c6e2ff",
                label : 'Total Users',
                labelColor : 'white',
                labelFontSize : '16',
            },
           
            
        ];
        // Get the context of the canvas element we want to select
        var countries= document.getElementById("total").getContext("2d");
        new Chart(countries).Pie(pieData);
        
    </script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/Chart.js"></script>
<canvas id="count" width="300" height="250"></canvas>
<script>
        var pieData = [
            {
                value: <?php echo $staff;?>,
                color:"#c6e2ff",
                label : 'Staffs',
                labelColor : 'white',
                labelFontSize : '16',
            },
            {
                value :<?php echo $doctor;?>,
                label:"Doctors",
                color : "#4ACAB4"
            },
            
        ];
        // Get the context of the canvas element we want to select
        var countries= document.getElementById("count").getContext("2d");
        new Chart(countries).Pie(pieData);
        
    </script>
 