<?php
date_default_timezone_set('Asia/Bangkok');
?>

<script type="text/javascript">
    function date_time(id) {
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu');
        h = date.getHours();
        if (h < 10) {
            h = "0" + h;
        }
        m = date.getMinutes();
        if (m < 10) {
            m = "0" + m;
        }
        s = date.getSeconds();
        if (s < 10) {
            s = "0" + s;
        }
        result = '' + days[day] + ', ' + d + ' ' + months[month] + ' ' + year + ' ' + h + ':' + m + ':' + s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("' + id + '");', '1000');
        return true;
    }
</script>

<span id="date_time"></span>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>
