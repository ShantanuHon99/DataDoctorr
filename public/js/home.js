document.addEventListener("DOMContentLoaded", () => {
    const stats = document.querySelectorAll('.stat-number');

    stats.forEach(stat => {
        const updateCount = () => {
            const target = +stat.getAttribute('data-target');
            const count = +stat.innerText;

            // Determine the increment
            let increment;
            if (target > 1000) {
                increment = target / 200; // Fast for large numbers
            } else {
                increment = target / 1000000; // Slower for smaller numbers
            }

            if (count < target) {
                stat.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1); // Adjust the timeout for speed
            } else {
                stat.innerText = target; // Ensure it ends at the target
            }
        };

        updateCount();
    });
});
