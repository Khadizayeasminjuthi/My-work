<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
        <?php
        $city_name = 'Dhaka' ;
        $cities = array('Dhaka','CTG','Rajshahi');
            echo '<h1>Most beautiful city is '.$city_name.' </h1>';
            //array print
            echo '<h2>Most beautiful city is '.$cities[2].' </h2>';
                ?>
    <!-- php Condition -->
    <?php if($city_name == 'ctg'): ?>
    <h1>Most beutiful city is Dhaka</h1>
    <?php else: ?>
    <h1>Not Found!</h1>
    <?php endif ?>
    
            <?php
            if($city_name = 'Dhaka' ){
                echo '<h6>Most beautiful city is '.$city_name.' </h6>';
            }
            else{
                echo '<h6>we don\'t know</h6>';
            }
    ?>
    
</body>
</html>