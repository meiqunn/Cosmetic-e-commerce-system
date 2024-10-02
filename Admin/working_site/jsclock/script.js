(function() {

    function x2(n, i, x1, r) {
        return x1 + r * Math.sin(2 * Math.PI * n / i);
    }

    function y2(n, i, y1, r) {
        return y1 - r * Math.cos(2 * Math.PI * n / i);
    }

    function getTime() {
        var date = new Date();
        return {
            hours: date.getHours(),
            minutes: (date.getMinutes() < 10) ? "0" + date.getMinutes() : date.getMinutes(),
            seconds: (date.getSeconds() < 10) ? "0" + date.getSeconds() : date.getSeconds()
        };
    }

    function drawCircle(ctx, x, y, r, width, strokeColor, background) {
        ctx.beginPath();
        ctx.strokeStyle = strokeColor;
        ctx.fillStyle = background;
        ctx.lineWidth = width;
        ctx.arc(x, y, r, 0, 2 * Math.PI);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
    }

    function drawLine(ctx, xStart, yStart, xStop, yStop, width, color) {
        ctx.beginPath();
        ctx.strokeStyle = color;
        ctx.lineWidth = width;
        ctx.moveTo(xStart, yStart);
        ctx.lineTo(xStop, yStop);
        ctx.stroke();
        ctx.closePath();
    }

    function drawText(ctx, text, x, y, maxWidth) {
        ctx.textAlign = "center";
        ctx.font = "36px Droid Serif";
        ctx.fillStyle = "#EEE";
        ctx.fillText(text, x, y, maxWidth);
    }

    function startClock(ctx) {
        var time = getTime();

        ctx.clearRect(0, 0, 500, 500); // reset canvas

        drawCircle(ctx, 250, 250, 245, 10, "#EEE", "#333");

        drawLine(ctx, 250, 250, x2(time.hours, 12, 250, 115), y2(time.hours, 12, 250, 115), 12, "#EEE"); // hours
        drawCircle(ctx, 250, 250, 10, 10, "#EEE", "#EEE");

        drawLine(ctx, 250, 250, x2(time.minutes, 60, 250, 165), y2(time.minutes, 60, 250, 165), 8, "#999"); // minutes
        drawCircle(ctx, 250, 250, 8, 10, "999", "999");

        drawLine(ctx, 250, 250, x2(time.seconds, 60, 250, 200), y2(time.seconds, 60, 250, 200), 5, "red"); // seconds
        drawCircle(ctx, 250, 250, 5, 10, "red", "red");

        drawText(ctx, time.hours + " : " + time.minutes + " : " + time.seconds, 250, 70, 500); // digital time
    }

    var canvas = document.getElementById("clock-canvas"),
        ctx;

    if (canvas.getContext) {
        ctx = canvas.getContext("2d");

        startClock(ctx);

        setInterval(function() {
            startClock(ctx);
        }, 1000);
    } else {
        document.getElementsByTagName("body")[0].innerHTML += "<h2>Canvas not supported.</h2>";
    }

})();