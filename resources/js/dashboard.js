import Chart from "chart.js/auto";

const canvas = document.getElementById("organizationChart");

if (canvas) {
    const labels = JSON.parse(canvas.dataset.labels);

    const values = JSON.parse(canvas.dataset.values);

    new Chart(canvas, {
        type: "bar",

        data: {
            labels: labels,

            datasets: [
                {
                    label: "Jumlah Event",

                    data: values,

                    borderWidth: 1,
                },
            ],
        },

        options: {
            responsive: true,

            plugins: {
                legend: {
                    display: false,
                },
            },

            scales: {
                y: {
                    beginAtZero: true,

                    ticks: {
                        precision: 0,
                    },
                },
            },
        },
    });
}
