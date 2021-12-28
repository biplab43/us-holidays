$year = '2022';

$new_year = date('Y-m-d', strtotime("first day of january $year"));
$martin_luther_king_day = date('Y-m-d', strtotime("january $year third monday"));
$presidents_day = date('Y-m-d', strtotime("february $year third monday"));
$memorial_day = date('Y-m-d', strtotime("last monday of may $year"));
$independence_day = date('Y-m-d', strtotime("july 4 $year"));
$labor_day = date('Y-m-d', strtotime("september $year first monday"));
$columbus_day = date('Y-m-d', strtotime("october $year second monday"));
$veterans_day = date('Y-m-d', strtotime("november 11 $year"));
$thanksgiving_day = date('Y-m-d', strtotime("november $year fourth thursday"));
$blackfriday_day = date('Y-m-d', strtotime('+1 day', strtotime($thanksgiving_day)));
$christmas_day = date('Y-m-d', strtotime("december 25 $year"));

$last_day = date('Y-m-d', strtotime("last day of december $year"));
$begin = new DateTime($new_year);
$end = new DateTime($last_day);
$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);

foreach ($period as $value) {
    $date = $value->format('Y-m-d');
    $dt = strtotime($date);
    $day = date("l", $dt);
    
    if ($day == "Saturday" || $day == "Sunday")
    {
        echo $date.": ".$day;
        if ($date == $new_year){
            echo " and New Year";
        }
        elseif($date == $independence_day){
            echo " and Independence Day";
        }
        elseif($date == $veterans_day){
            echo " and Veterans Day";
        }
        elseif($date == $christmas_day){
            echo " and Christmas";
        }
        echo "<br />";
        
    }
    elseif($date == $new_year){
        echo $date.": New Year";
        echo "<br />";
    }
    elseif($date == $martin_luther_king_day){
        echo $date.": Martin Luther King Day";
        echo "<br />";
    }
    elseif($date == $presidents_day){
        echo $date.": Presidents Day";
        echo "<br />";
    }
    elseif($date == $memorial_day){
        echo $date.": Memorial Day";
        echo "<br />";
    }
    elseif($date == $independence_day){
        echo $date.": Independence Day";
        echo "<br />";
    }
    elseif($date == $labor_day){
        echo $date.": Labor Day";
        echo "<br />";
    }
    elseif($date == $columbus_day){
        echo $date.": Columbus Day";
        echo "<br />";
    }
    elseif($date == $veterans_day){
        echo $date.": Veterans Day";
        echo "<br />";
    }
    elseif($date == $thanksgiving_day){
        echo $date.": Thanksgiving Day";
        echo "<br />";
    }
    elseif($date == $blackfriday_day){
        echo $date.": Black Friday Day";
        echo "<br />";
    }
    elseif($date == $christmas_day){
        echo $date.": Christmas Day";
        echo "<br />";
    }
}
