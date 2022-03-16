$(function() {

    const draw = function(plots, x, y) {
        var data = {
            datasets: [{
                label: '',
                data: plots,
                pointRadius: 0.1,
                borderColor: "rgba(60, 190, 20, 1)",
            }],
        };

        var options = {
            responsive: false,
            scales: {
                x: {
                    min: -10,
                    max: 10,
                    grid: {
                        borderWidth: 0,
                        lineWidth: 1,
                        display: true
                    },
                    ticks: {
                        stepSize: 2
                    }
                },
                y: {
                    min: -10,
                    max: 10,
                    grid: {
                        borderWidth: 0,
                        lineWidth: 1,
                        display: true
                    },
                    ticks: {
                        stepSize: 2
                    }
                },
            },
        };

        const ctx = document.getElementById('myChart');
        window.supi = new Chart(ctx, {
            type: 'scatter',
            data: data,
            options: options,
        });

    };

    $("#draw").click(function() {
        // check value
        const input = {
            start: ($.isNumeric($("#x-start").val())) ? parseFloat($("#x-start").val()) : -10,
            end: ($.isNumeric($("#x-end").val())) ? parseFloat($("#x-end").val()) : 10,
            pma: ($.isNumeric($("#pma").val())) ? parseFloat($("#pma").val()) : 1,
            pmb: ($.isNumeric($("#pmb").val())) ? parseFloat($("#pmb").val()) : 1,
            pmc: ($.isNumeric($("#pmc").val())) ? parseFloat($("#pmc").val()) : 0,
        };

        $.ajax({
            type: "post",
            url: "/data",
            data: JSON.stringify(input),
            contentType: 'application/json',
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(json_data) {
                console.log(json_data);
                if (window.supi) {
                    supi.destroy();
                }
                draw(json_data.plots);
            },
            error: function() {
                console.log('error!!');
            },
            complete: function() {

            }
        });
    });

    draw([]);
});