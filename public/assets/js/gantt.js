window.addEventListener("load", createChart);
window.addEventListener("resize", createChart)

function createChart(e) {
// 1 
const days = document.querySelectorAll(".chart-values li");
const tasks = document.querySelectorAll(".chart-bars li");
// 2 
const daysArray = [...days];
// 3 
tasks.forEach(el => {
    ...
});
}

tasks.forEach(el => {
// 1 
const duration = el.dataset.duration.split("-");
// 2 
const startDay = duration[0];
const endDay = duration[1];
let left = 0,
width = 0;
// 3 
if (startDay.endsWith("½")) {
const filteredArray = daysArray.filter(day => day.textContent == startDay.slice(0, -1));
left = filteredArray[0].offsetLeft + filteredArray[0].offsetWidth / 2;
} else {
const filteredArray = daysArray.filter(day => day.textContent == startDay);
left = filteredArray[0].offsetLeft;
}

// 4 
if (endDay.endsWith("½")) {
const filteredArray = daysArray.filter(day => day.textContent == endDay.slice(0, -1));
width = filteredArray[0].offsetLeft + filteredArray[0].offsetWidth / 2 - left;
} else {
const filteredArray = daysArray.filter(day => day.textContent == endDay);
width = filteredArray[0].offsetLeft + filteredArray[0].offsetWidth - left;
}
...
});