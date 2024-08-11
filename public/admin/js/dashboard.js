$(function () {
    // =====================================
    // Profit
    // =====================================
    if (typeof salesData === "undefined") {
        console.error("Sales data is not available.");
        return;
    }

    // Kiểm tra dữ liệu
    const data_total = salesData.map((data) => data.total_sales);
    const data_month = salesData.map((data) => data.month);
    console.log(data_total);

    const max = Math.max(...data_total);
    function getNextEvenNumber(num) {
        const nextTens = Math.ceil(num / 10) * 10;
        return nextTens % 20 === 0 ? nextTens : nextTens + 10;
    }
    const nextEvenNumber = getNextEvenNumber(max);
    var chart = {
        series: [
            {
                name: "Tổng doanh thu",
                data: data_total,
            },
            {
                name: "Expense this month:",
                data: [],
            },
        ],

        chart: {
            type: "bar",
            height: 345,
            offsetX: -15,
            toolbar: { show: true },
            foreColor: "#adb0bb",
            fontFamily: "inherit",
            sparkline: { enabled: false },
        },

        colors: ["#5D87FF", "#49BEFF"],

        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "35%",
                borderRadius: [6],
                borderRadiusApplication: "end",
                borderRadiusWhenStacked: "all",
            },
        },
        markers: { size: 0 },

        dataLabels: {
            enabled: false,
        },

        legend: {
            show: false,
        },

        grid: {
            borderColor: "rgba(0,0,0,0.1)",
            strokeDashArray: 3,
            xaxis: {
                lines: {
                    show: false,
                },
            },
        },

        xaxis: {
            type: "category",
            categories: data_month,
            labels: {
                style: {
                    cssClass: "grey--text lighten-2--text fill-color",
                },
            },
        },

        yaxis: {
            show: true,
            min: 0,
            max: nextEvenNumber,
            tickAmount: 4,
            labels: {
                style: {
                    cssClass: "grey--text lighten-2--text fill-color",
                },
            },
        },
        stroke: {
            show: true,
            width: 3,
            lineCap: "butt",
            colors: ["transparent"],
        },

        tooltip: { theme: "light" },

        responsive: [
            {
                breakpoint: 600,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 3,
                        },
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector("#chart"), chart);
    chart.render();

    // =====================================
    // Breakup
    // =====================================
    var breakup = {
        color: "#adb5bd",
        series: [38, 40, 25],
        labels: ["2022", "2021", "2020"],
        chart: {
            width: 180,
            type: "donut",
            fontFamily: "Plus Jakarta Sans', sans-serif",
            foreColor: "#adb0bb",
        },
        plotOptions: {
            pie: {
                startAngle: 0,
                endAngle: 360,
                donut: {
                    size: "75%",
                },
            },
        },
        stroke: {
            show: false,
        },

        dataLabels: {
            enabled: false,
        },

        legend: {
            show: false,
        },
        colors: ["#5D87FF", "#ecf2ff", "#F9F9FD"],

        responsive: [
            {
                breakpoint: 991,
                options: {
                    chart: {
                        width: 150,
                    },
                },
            },
        ],
        tooltip: {
            theme: "dark",
            fillSeriesColor: false,
        },
    };

    var chart = new ApexCharts(document.querySelector("#breakup"), breakup);
    chart.render();

    // =====================================
    // Earning
    // =====================================
    var earning = {
        chart: {
            id: "sparkline3",
            type: "area",
            height: 60,
            sparkline: {
                enabled: true,
            },
            group: "sparklines",
            fontFamily: "Plus Jakarta Sans', sans-serif",
            foreColor: "#adb0bb",
        },
        series: [
            {
                name: "Earnings",
                color: "#49BEFF",
                data: data_total,
            },
        ],
        stroke: {
            curve: "smooth",
            width: 2,
        },
        fill: {
            colors: ["#f3feff"],
            type: "solid",
            opacity: 0.05,
        },

        markers: {
            size: 0,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: true,
                position: "right",
            },
            x: {
                show: false,
            },
        },
    };
    new ApexCharts(document.querySelector("#earning"), earning).render();
});
