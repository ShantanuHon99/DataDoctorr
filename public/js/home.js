document.addEventListener("DOMContentLoaded", () => {
    const stats = document.querySelectorAll('.stat-number');

    stats.forEach(stat => {
        const updateCount = () => {
            const target = +stat.getAttribute('data-target');
            const count = +stat.innerText;

            let increment;
            if (target > 1000) {
                increment = target / 200; 
            } else {
                increment = target / 1000000;
            }

            if (count < target) {
                stat.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1); 
            } else {
                stat.innerText = target; 
            }
        };

        updateCount();
    });
});
