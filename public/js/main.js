$(document).ready(function() {
    // -------------------------
    // back to top
    // -------------------------

    var $bactotop = $('#back-to-top');
    if ($bactotop.length) {
        var scrollTrigger = 200, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $bactotop.addClass('backtotop-show');
                } else {
                    $bactotop.removeClass('backtotop-show');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $bactotop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });
    }


    // -------------------------
    // header
    // -------------------------

    var $header_search = $('#header-search'),
        $header_search_input = $header_search.find('.form-control'),
        $header_search_btn_send = $header_search.find('.header-search-btn-send'),
        $header_search_btn_close = $header_search.find('.header-search-btn-close');
    $header_search_btn_send.on('click', function() {
        $header_search.removeClass('deactive');
        $header_search_input.focus();
    });

    $header_search_btn_close.on('click', function() {
        $header_search.addClass('deactive');
    });

    var $product_detail_btn_more = $('#product-detail-btn-more');
    $product_detail_btn_more.on('click', function(e) {
        e.preventDefault();
        $(this).parents('.product-detail').toggleClass('active');
    });

    var baseUrl = window.location.origin + window.location.pathname;
    $('.nav-link').each(function(v, k) {
        if ($(k).attr('href') == baseUrl) {
            $(k).parents('.nav-item').addClass('active');
        }
    });
});

function get_query(url) {
    // var url = location.search;
    var qs = url.substring(url.indexOf('?') + 1).split('&');
    for (var i = 0, result = {}; i < qs.length; i++) {
        qs[i] = qs[i].split('=');
        result[qs[i][0]] = decodeURIComponent(qs[i][1]);
    }
    return result;
}

function trimText(str, wordCount) {
    var strArray = str.split(' ');
    var subArray = strArray.slice(0, wordCount);
    var result = subArray.join(" ");
    if (strArray.length < wordCount) {
        return result;
    } else {
        return result + '...';
    }
}

function sendContact() {
    const name = $(".contact_box .name").val();
    const email = $(".contact_box .email").val();
    const tel = $(".contact_box .tel").val();
    const message = $(".contact_box .message").val();

    const data = {
        "fullname": name,
        "email": email,
        "mobile": tel,
        "message": message
    }
    console.log(data);
    $.ajax({
        url: "/api/v1/contact",
        type: "post",
        data: data,
        success: function(result) {
            if (result.status) {
                toastr.success(result.message, 'SUCCESS');
                $(".contact_box .name").val('');
                $(".contact_box .email").val('');
                $(".contact_box .tel").val('');
                $(".contact_box .message").val('');
            } else
                toastr.error(result.message, 'ERROR');
        }
    });

}
// /* global Chart, coreui */

// /**
//  * --------------------------------------------------------------------------
//  * CoreUI Boostrap Admin Template (v4.2.2): main.js
//  * Licensed under MIT (https://coreui.io/license)
//  * --------------------------------------------------------------------------
//  */

// // Disable the on-canvas tooltip
// Chart.defaults.pointHitDetectionRadius = 1
// Chart.defaults.plugins.tooltip.enabled = false
// Chart.defaults.plugins.tooltip.mode = 'index'
// Chart.defaults.plugins.tooltip.position = 'nearest'
// Chart.defaults.plugins.tooltip.external = coreui.ChartJS.customTooltips
// Chart.defaults.defaultFontColor = '#646470'

// const random = (min, max) =>

//     Math.floor(Math.random() * (max - min + 1) + min)

// const cardChart1 = new Chart(document.getElementById('card-chart1'), {
//     type: 'line',
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//         datasets: [{
//             label: 'My First dataset',
//             backgroundColor: 'transparent',
//             borderColor: 'rgba(255,255,255,.55)',
//             pointBackgroundColor: coreui.Utils.getStyle('--cui-primary'),
//             data: [65, 59, 84, 84, 51, 55, 40]
//         }]
//     },
//     options: {
//         plugins: {
//             legend: {
//                 display: false
//             }
//         },
//         maintainAspectRatio: false,
//         scales: {
//             x: {
//                 grid: {
//                     display: false,
//                     drawBorder: false
//                 },
//                 ticks: {
//                     display: false
//                 }
//             },
//             y: {
//                 min: 30,
//                 max: 89,
//                 display: false,
//                 grid: {
//                     display: false
//                 },
//                 ticks: {
//                     display: false
//                 }
//             }
//         },
//         elements: {
//             line: {
//                 borderWidth: 1,
//                 tension: 0.4
//             },
//             point: {
//                 radius: 4,
//                 hitRadius: 10,
//                 hoverRadius: 4
//             }
//         }
//     }
// })


// const cardChart2 = new Chart(document.getElementById('card-chart2'), {
//     type: 'line',
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//         datasets: [{
//             label: 'My First dataset',
//             backgroundColor: 'transparent',
//             borderColor: 'rgba(255,255,255,.55)',
//             pointBackgroundColor: coreui.Utils.getStyle('--cui-info'),
//             data: [1, 18, 9, 17, 34, 22, 11]
//         }]
//     },
//     options: {
//         plugins: {
//             legend: {
//                 display: false
//             }
//         },
//         maintainAspectRatio: false,
//         scales: {
//             x: {
//                 grid: {
//                     display: false,
//                     drawBorder: false
//                 },
//                 ticks: {
//                     display: false
//                 }
//             },
//             y: {
//                 min: -9,
//                 max: 39,
//                 display: false,
//                 grid: {
//                     display: false
//                 },
//                 ticks: {
//                     display: false
//                 }
//             }
//         },
//         elements: {
//             line: {
//                 borderWidth: 1
//             },
//             point: {
//                 radius: 4,
//                 hitRadius: 10,
//                 hoverRadius: 4
//             }
//         }
//     }
// })


// const cardChart3 = new Chart(document.getElementById('card-chart3'), {
//     type: 'line',
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//         datasets: [{
//             label: 'My First dataset',
//             backgroundColor: 'rgba(255,255,255,.2)',
//             borderColor: 'rgba(255,255,255,.55)',
//             data: [78, 81, 80, 45, 34, 12, 40],
//             fill: true
//         }]
//     },
//     options: {
//         plugins: {
//             legend: {
//                 display: false
//             }
//         },
//         maintainAspectRatio: false,
//         scales: {
//             x: {
//                 display: false
//             },
//             y: {
//                 display: false
//             }
//         },
//         elements: {
//             line: {
//                 borderWidth: 2,
//                 tension: 0.4
//             },
//             point: {
//                 radius: 0,
//                 hitRadius: 10,
//                 hoverRadius: 4
//             }
//         }
//     }
// })

// const cardChart4 = new Chart(document.getElementById('card-chart4'), {
//     type: 'bar',
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April'],
//         datasets: [{
//             label: 'My First dataset',
//             backgroundColor: 'rgba(255,255,255,.2)',
//             borderColor: 'rgba(255,255,255,.55)',
//             data: [78, 81, 80, 45, 34, 12, 40, 85, 65, 23, 12, 98, 34, 84, 67, 82],
//             barPercentage: 0.6
//         }]
//     },
//     options: {
//         maintainAspectRatio: false,
//         plugins: {
//             legend: {
//                 display: false
//             }
//         },
//         scales: {
//             x: {
//                 grid: {
//                     display: false,
//                     drawTicks: false

//                 },
//                 ticks: {
//                     display: false
//                 }
//             },
//             y: {
//                 grid: {
//                     display: false,
//                     drawBorder: false,
//                     drawTicks: false
//                 },
//                 ticks: {
//                     display: false
//                 }
//             }
//         }
//     }
// })


// const mainChart = new Chart(document.getElementById('main-chart'), {
//     type: 'line',
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//         datasets: [{
//                 label: 'My First dataset',
//                 backgroundColor: coreui.Utils.hexToRgba(coreui.Utils.getStyle('--cui-info'), 10),
//                 borderColor: coreui.Utils.getStyle('--cui-info'),
//                 pointHoverBackgroundColor: '#fff',
//                 borderWidth: 2,
//                 data: [
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200)
//                 ],
//                 fill: true
//             },
//             {
//                 label: 'My Second dataset',
//                 borderColor: coreui.Utils.getStyle('--cui-success'),
//                 pointHoverBackgroundColor: '#fff',
//                 borderWidth: 2,
//                 data: [
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200),
//                     random(50, 200)
//                 ]
//             },
//             {
//                 label: 'My Third dataset',
//                 borderColor: coreui.Utils.getStyle('--cui-danger'),
//                 pointHoverBackgroundColor: '#fff',
//                 borderWidth: 1,
//                 borderDash: [8, 5],
//                 data: [65, 65, 65, 65, 65, 65, 65]
//             }
//         ]
//     },
//     options: {
//         maintainAspectRatio: false,
//         plugins: {
//             legend: {
//                 display: false
//             }
//         },
//         scales: {
//             x: {
//                 grid: {
//                     drawOnChartArea: false
//                 }
//             },
//             y: {
//                 ticks: {
//                     beginAtZero: true,
//                     maxTicksLimit: 5,
//                     stepSize: Math.ceil(250 / 5),
//                     max: 250
//                 }
//             }
//         },
//         elements: {
//             line: {
//                 tension: 0.4
//             },
//             point: {
//                 radius: 0,
//                 hitRadius: 10,
//                 hoverRadius: 4,
//                 hoverBorderWidth: 3
//             }
//         }
//     }
// })