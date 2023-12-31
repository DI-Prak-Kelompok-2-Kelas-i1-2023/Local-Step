<link rel="stylesheet" href="{{ asset('css/components/timer.css') }}" />

<div class="timer-container">
    <div class="hours">
        <div class="hour">2</div>
        <div class="hour">4</div>
    </div>
    <div class="time-linker">:</div>
    <div class="minutes">
        <div class="minute">5</div>
        <div class="minute">9</div>
    </div>
    <div class="time-linker">:</div>
    <div class="seconds">
        <div class="second">5</div>
        <div class="second">9</div>
    </div>
</div>

<script>
    var targetTime = 3600;

    const hours = document.querySelectorAll(".hour");
    const minutes = document.querySelectorAll(".minute");
    const seconds = document.querySelectorAll(".second");

    var intervalId = setInterval(function () {
        // Calculate hours, minutes, and seconds
        var hour = Math.floor((targetTime * 24) / 3600);
        var minute = Math.floor((targetTime % 3600) / 60);
        var second = targetTime % 60;

        // Display the time in the format HH:MM:SS
        var formattedHour = parseTime(padZero(hour));
        var formattedMinute = parseTime(padZero(minute));
        var formattedSecond = parseTime(padZero(second));

        seconds[0].textContent = formattedSecond[0];
        seconds[1].textContent = formattedSecond[1];

        minutes[0].textContent = formattedMinute[0];
        minutes[1].textContent = formattedMinute[1];

        hours[0].textContent = formattedHour[0];
        hours[1].textContent = formattedHour[1];

        // Decrement the target time
        targetTime--;

        // Check if the timer has reached zero
        if (targetTime < 0) {
            clearInterval(intervalId);
            timerElement.textContent = "Timer Expired!";
        }
    }, 1000);

    function padZero(num) {
        return num < 10 ? "0" + num : num.toString();
    }

    function parseTime(time) {
        return time.split("");
    }
</script>
