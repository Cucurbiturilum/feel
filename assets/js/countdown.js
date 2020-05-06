$(document).ready(function () {
    var clock;

    $(document).ready(function() {
        var clock;

        clock = $('.clock').FlipClock({
            clockFace: 'DailyCounter',
            autoStart: false,
        });

        clock.setTime(220880);
        clock.setCountdown(true);
        clock.start();
    });
});



