import Chart from "chart.js/auto";

let myChart = null

document.addEventListener('livewire:initialized', () => {
    Livewire.on('chartUpdate', () => {
        initCalorieChart();
        adjustCanvasSize();
    });
});

function initCalorieChart() {
    const ctx = document.getElementById('calorieChart').getContext('2d');
    if (myChart) {
        myChart.destroy();
    }
    const calorieData = JSON.parse(document.getElementById('calorieChart').dataset.calories);
    const dateLabels = JSON.parse(document.getElementById('calorieChart').dataset.labels);

    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: Object.values(dateLabels),
            datasets: [{
                label: 'Kalorie na tydzień',
                data: Object.values(calorieData),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            onClick: function(event, elements) {
                if (elements.length > 0) {
                    const firstElement = elements[0];
                    const label = this.data.labels[firstElement.index];
                    console.log(label);
                    document.getElementById('selectedWeek').value = label;
                    var element = document.getElementById('selectedWeek');
                    element.dispatchEvent(new Event('input'));
                }
            }
        }
    });
}

function adjustCanvasSize() {
    const canvas = document.getElementById('calorieChart');
    const parentWidth = canvas.parentElement.offsetWidth;
    const maxHeight = 320;

    canvas.width = parentWidth;
    canvas.height = Math.min(window.innerHeight * 0.6, maxHeight);
}
initCalorieChart();
adjustCanvasSize();
