<?php
// Function to draw the calendar table
function draw_calendar($month, $year) {
    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year); //
    $first_day = date('w', mktime(0, 0, 0, $month, 1, $year)); //

    $calendar = '<table class="calendar-table">';
    $calendar .= '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>';

    // Blank cells before first day
    for ($i = 0; $i < $first_day; $i++) $calendar .= '<td></td>';

    // Fill days
    for ($day = 1; $day <= $days_in_month; $day++) {
        if (($day + $first_day - 1) % 7 == 0 && $day != 1) $calendar .= '</tr><tr>';
        $calendar .= '<td>' . $day . '</td>';
    }
    
    // Fill remaining cells
    while (($day + $first_day - 1) % 7 != 0) { $calendar .= '<td></td>'; $day++; }
    
    return $calendar . '</tr></table>';
}

// Display current month
echo '<h2>' . date('F Y') . '</h2>';
echo draw_calendar(date('m'), date('Y'));
?>
