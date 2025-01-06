document.addEventListener("DOMContentLoaded", function () {
    const timers = document.querySelectorAll(".timer");

    timers.forEach(time => {
        const endTime = parseInt(timers.dataset.endtime);
        const interval = setInterval(() => {
            const now = Math.floor(Date.now() / 1000);
            const remaining = endTime - now;

            if (remaining <= 0) {
                clearInterval(interval);
                time.textContent = "Waktu habis";
                time.closest("tr").classList.add("expired");
            } else {
                const hours = Math.floor(remaining / 3600);
                const minutes = Math.floor((remaining % 3600) / 60);
                const seconds = remaining % 60;
                timers.textContent = `${hours} jam ${minutes} menit ${seconds} detik`;
            }
        }, 1000);
    });
});