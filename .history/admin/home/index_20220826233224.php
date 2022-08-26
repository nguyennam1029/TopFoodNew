<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <style>
        .active-bg--home {
            background-color: var(--white) !important;
            pointer-events: none;

        }

        .active-text--home {
            color: var(--blue) !important;

        }

        .active-text--home::before {
            content: "";
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
        }

        .active-text--home::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;

        }

        .rad-body-wrapper {
            position: absolute;
            left: 250px;
            top: 75px;
            width: auto;
            right: 0;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        .rad-body-wrapper.rad-nav-min {
            left: 50px;
        }

        .rad-chart {
            height: 250px;
        }

        @-webkit-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-transition-timing-function: ease-in;
                transition-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            100% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @media screen and (max-width: 850px) {
            .rad-navigation {
                height: 100px;
            }

            .rad-logo-container {
                display: block;
                float: none;
                width: 100%;
                border-bottom: 1px solid #F2F2F2;
            }

            .rad-top-nav-container {
                display: block;
                float: none;
                height: 50px;
                font-size: 12px;
                background: white;
            }

            .rad-menu-badge {
                font-size: 10px;
                min-width: 15px;
                min-height: 15px;
                line-height: 15px;
            }

            .links {
                float: right;
            }

            .rad-sidebar {
                top: 100px;
            }

            .rad-sidebar.rad-nav-min {
                -webkit-transform: translate3d(-200px, 0, 0);
                transform: translate3d(-200px, 0, 0);
            }

            .rad-body-wrapper {
                top: 125px;
                position: relative;
            }

            .rad-body-wrapper.rad-nav-min {
                left: 0px;
            }
        }

        .panel {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
            border-radius: 0 !important;
        }

        .panel-heading {
            background: #2f4050 !important;
            border-radius: 0;
            padding: 15px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
        }

        .panel-heading .panel-title {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 12px;
            color: #dce0f3;
        }

        #areaChart path[AttributesStyle] {
            fill: #39c7aa;
            stroke: none;
            fill-opacity: 1;
        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php include '../menu2.php' ?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <?php
            include '../top_menu.php';
            ?>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <main>
                <section>
                    <div class="rad-body-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Area Chart</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div id="areaChart" class="rad-chart"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Line Chart</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div id="lineChart" class="rad-chart"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- here-->
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Donut Chart</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div id="donutChart" class="rad-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Bar Chart</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div id="barChart" class="rad-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        $(function() {

            $(document).on("click", function(e) {
                var $item = $(".rad-dropmenu-item");
                if ($item.hasClass("active")) {
                    $item.removeClass("active");
                }
            });

            $(".rad-toggle-btn").on('click', function() {
                $(".rad-sidebar").toggleClass("rad-nav-min");
                $(".rad-body-wrapper").toggleClass("rad-nav-min");
                setTimeout(function() {
                    initializeCharts();
                }, 200);
            });


            $(window).resize(function() {
                $.throttle(250, setTimeout(function() {
                    initializeCharts();
                }, 200));
            });

            var colors = [
                '#E94B3B',
                '#39C7AA',
                '#1C7EBB',
                '#F98E33'
            ];

            var panelList = $('.row');

            panelList.sortable({
                handle: '.row',
                update: function() {
                    $('.panel', panelList).each(function(index, elem) {
                        var $listItem = $(elem),
                            newIndex = $listItem.index();
                    });
                }
            });

            function initializeCharts() {

                $(".rad-chart").empty();

                Morris.Line({
                    lineColors: colors,
                    element: 'lineChart',
                    data: [{
                        year: '2011',
                        value: 32
                    }, {
                        year: '2012',
                        value: 17
                    }, {
                        year: '2013',
                        value: 41
                    }, {
                        year: '2014',
                        value: 26
                    }, {
                        year: '2015',
                        value: 9
                    }],
                    xkey: 'year',
                    ykeys: ['value'],
                    labels: ['Value']
                });

                Morris.Donut({
                    element: 'donutChart',
                    data: [{
                        value: 40,
                        label: 'SS'
                    }, {
                        value: 15,
                        label: 'baz'
                    }, {
                        value: 35,
                        label: 'bar'
                    }, {
                        value: 15,
                        label: 'baz'
                    }, ],
                    labelColor: '#23AE89',
                    colors: colors
                });

                Morris.Bar({
                    element: 'barChart',
                    data: [{
                        y: 'Jan',
                        a: 55,
                        b: 90,
                        c: 12
                    }, {
                        y: 'Feb',
                        a: 65,
                        b: 15,
                        c: 16
                    }, {
                        y: 'Mar',
                        a: 50,
                        b: 40,
                        c: 05
                    }, {
                        y: 'May',
                        a: 95,
                        b: 65,
                        c: 65
                    }, {
                        y: 'Jun',
                        a: 50,
                        b: 40,
                        c: 20
                    }, {
                        y: 'Jul',
                        a: 75,
                        b: 65,
                        c: 85
                    }, {
                        y: 'Aug',
                        a: 10,
                        b: 90,
                        c: 90
                    }, {
                        y: 'Sep',
                        a: 15,
                        b: 65,
                        c: 07
                    }, {
                        y: 'Oct',
                        a: 75,
                        b: 18,
                        c: 13
                    }, {
                        y: 'Nov',
                        a: 15,
                        b: 65,
                        c: 03
                    }, {
                        y: 'Dec',
                        a: 03,
                        b: 95,
                        c: 02
                    }],

                    xkey: 'y',
                    ykeys: ['a', 'b', 'c'],
                    barColors: [

                        '#39C7AA',
                        '#1C7EBB',
                        '#E94B3B',
                    ],
                    labels: ['Series ASH', 'Series SS']
                });

                Morris.Area({
                    element: 'areaChart',
                    lineColors: colors,
                    data: [{
                        y: '2006',
                        a: 100,
                        b: 90
                    }, {
                        y: '2007',
                        a: 75,
                        b: 65
                    }, {
                        y: '2008',
                        a: 50,
                        b: 40
                    }, {
                        y: '2009',
                        a: 75,
                        b: 65
                    }, {
                        y: '2010',
                        a: 50,
                        b: 40
                    }, {
                        y: '2011',
                        a: 75,
                        b: 65
                    }, {
                        y: '2012',
                        a: 100,
                        b: 90
                    }],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series ASH', 'Series SS']
                });

            }

            initializeCharts();
        });
    </script>
</body>

</html>