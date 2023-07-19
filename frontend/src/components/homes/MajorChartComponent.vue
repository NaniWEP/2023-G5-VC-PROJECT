<template>
  <div class="chart-container">
    <canvas id="myChart"></canvas>
  </div>
  <div id="chart">
    <apexchart width="380"></apexchart>
  </div>
</template>

<script>
import Chart from "chart.js/auto";

export default {
  name: "App",
  mounted() {
    const ctx = document.getElementById("myChart");
    const myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Red"],
        datasets: [
          {
            data: [50, 40, 30, 20, 12, 10, 8],
            backgroundColor: [
              "rgba(255, 99, 132, 0.7)",
              "rgba(54, 162, 235, 0.7)",
              "rgba(255, 206, 86, 0.7)",
              "rgba(75, 192, 192, 0.7)",
              "rgba(153, 102, 255, 0.7)",
              "rgba(255, 159, 64, 0.7)",
              "red",
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
              "rgba(255, 159, 64, 1)",
            ],
            borderWidth: 2,
          },
        ],
      },
      options: {
        plugins: {
          legend: {
            display: false,
          },
          title: {
            display: true,
            text: "Popular major",
            font: {
              size: 28,
            },
          },
        },
        scales: {
          y: {
            grid: {
              display: true,
              color: "rgba(0, 0, 0, 0.1)",
            },
            ticks: {
              font: {
                size: 14,
              },
            },
          },
          x: {
            ticks: {
              font: {
                size: 16,
              },
            },
          },
        },
      },
    });
    myChart;
  },
};
</script>

<style scoped>
.chart-container {
  max-width: 65%;
  margin: 0 auto;
  margin-top: 4%;
}
</style>