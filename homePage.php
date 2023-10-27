<?php
$title = "Dashboard";
$homeActive = " active";
include("./includes/head.php");
?>

<!-- chart -->
<style>
    .chart-container {
        width: 55%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        margin-left: 100px;
        position: relative;
    }

    .chart-wrapper {
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
    }

    path {
        stroke: white;
        cursor: pointer;
        transition: fill 250ms;
    }

    path:hover {
        fill: black;
    }

    text {
        font-size: 1rem;
        text-transform: uppercase;
    }

    polyline {
        fill: none;
        stroke: white;
        stroke-width: 1px;
        stroke-dasharray: 3px;
    }

    .heading {
        width: 100%;
        text-align: center;
        padding-top: 5px;
    }

    .total-container {
        text-align: center;
        position: absolute;
        top: 48%;
        left: 0%;
        right: 0%;
        height: 25px;
    }

    .total {
        display: none;
        font-weight: 400;
        color: white;
    }
</style>
<!-- ||||| -->



<!-- css -->
<style>
    body {
        overflow: hidden !important;
    }

    .main {
        height: 90vh;
        display: flex;
        background-image: url('./images/running_00000.jpg');
        background-position: center;
        background-size: cover;
    }


    .info-container {
        height: 100%;
        width: 50%;
        color: white;
        font-family: "roboto";
    }

    .info-heading {
        font-family: "Montserrat";
        margin-top: 130px;
        margin-left: 355px;
        font-weight: bold;
        font-size: 2rem;
        margin-bottom: -30px;
    }

    .plans {
        margin-top: 40px;
        margin-left: 350px;
    }

    img {
        height: 200px;
        width: 200px;
        margin: 8px;
        border-radius: 12px;
    }

    .keto {
        width: 60px;
        position: absolute;
        top: 20%;
        left: 18%;
        font-size: 3.1rem;
        font-style: italic;
        font-weight: bold;
        z-index: 999;
    }

    .ketoImg {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 10px;
        margin-left: 9px;
    }

    .ketoImg img {
        margin: 0px;
        padding: 0px;
    }

    .ketoImg::before {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: black;
        z-index: 99;
        opacity: 0.3;
        border-radius: 10px;

    }
</style>


<body>
    <!-- main -->
    <div class="container-fluid main">

        <!-- chart container left -->
        <div class="chart-container">
            <!-- chart -->
            <div class="chart-wrapper">

                <!-- total container -->
                <div class="total-container">
                    <!-- total -->
                    <h4 class="total">Total: 13hrs</h4>
                </div>

            </div>
        </div>

        <!-- info container right -->
        <div class="info-container">

            <h3 class="info-heading">MY PLANS</h3>
            <div class="plans">
                <img src="../project3/images/C25K_logo.png" alt="">
                <div class="ketoImg">
                    <img id="ketoImg" src="../project3/images/74396538.jfif" alt="">
                    <h5 class="keto">Keto Diet</h5>
                </div>
            </div>
        </div>
    </div>




    <!-- chart js -->
    <script>
        // dataset
        const dataset = [4, 3, 2, 2, 2, 1, 1]
        // colors
        const colors = ['#BF9CFF', '#A274F8', '#8953EC', '#773DE0', '#682ED3', '#581BC7', '#4e15b7']
        // classes
        const classes = ['Monday (4hrs)', 'Tuesday (3hrs)', 'Wednesday (2hrs)', 'Thursday (2hrs)', 'Friday (1hr)', 'Saturday (30min)', 'Sunday (30min)']


        const width = document.querySelector('.chart-wrapper').offsetWidth
        const height = document.querySelector('.chart-wrapper').offsetHeight
        const minOfWH = Math.min(width, height) / 2
        const initialAnimDelay = 300
        const arcAnimDelay = 150
        const arcAnimDur = 3000
        const secDur = 1000
        const secIndividualdelay = 150

        let radius

        // calculate minimum of width and height to set chart radius
        if (minOfWH > 200) {
            radius = 200
        } else {
            radius = minOfWH
        }

        // append svg
        let svg = d3.select('.chart-wrapper').append('svg')
            .attr({
                'width': width,
                'height': height,
                'class': 'pieChart'
            })
            .append('g')

        svg.attr({
            'transform': `translate(${width / 2}, ${height / 2})`
        });

        // for drawing slices
        let arc = d3.svg.arc()
            .outerRadius(radius * 0.6)
            .innerRadius(radius * 0.45)

        // for labels and polylines
        let outerArc = d3.svg.arc()
            .innerRadius(radius * 0.85)
            .outerRadius(radius * 0.85)

        // d3 color generator
        // let c10 = d3.scale.category10();

        let pie = d3.layout.pie()
            .value(d => d)

        let draw = function() {

            svg.append("g").attr("class", "lines")
            svg.append("g").attr("class", "slices")
            svg.append("g").attr("class", "labels")

            // define slice
            let slice = svg.select('.slices')
                .datum(dataset)
                .selectAll('path')
                .data(pie)
            slice
                .enter().append('path')
                .attr({
                    'fill': (d, i) => colors[i],
                    'd': arc,
                    'stroke-width': '25px',
                    'transform': (d, i) => 'rotate(-180, 0, 0)'
                })
                .style('opacity', 0)
                .transition()
                .delay((d, i) => (i * arcAnimDelay) + initialAnimDelay)
                .duration(arcAnimDur)
                .ease('elastic')
                .style('opacity', 1)
                .attr('transform', 'rotate(0,0,0)')

            slice.transition()
                .delay((d, i) => arcAnimDur + (i * secIndividualdelay))
                .duration(secDur)
                .attr('stroke-width', '5px')

            let midAngle = d => d.startAngle + (d.endAngle - d.startAngle) / 2

            let text = svg.select(".labels").selectAll("text")
                .data(pie(dataset))

            text.enter()
                .append('text')
                .attr('dy', '0.35em')
                .style("opacity", 0)
                .style('fill', (d, i) => 'white')
                .text((d, i) => classes[i])
                .attr('transform', d => {
                    // calculate outerArc centroid for 'this' slice
                    let pos = outerArc.centroid(d)
                    // define left and right alignment of text labels 							
                    pos[0] = radius * (midAngle(d) < Math.PI ? 1 : -1)
                    return `translate(${pos})`
                })
                .style('text-anchor', d => midAngle(d) < Math.PI ? "start" : "end")
                .transition()
                .delay((d, i) => arcAnimDur + (i * secIndividualdelay))
                .duration(secDur)
                .style('opacity', 1)

            let polyline = svg.select(".lines").selectAll("polyline")
                .data(pie(dataset))

            polyline.enter()
                .append("polyline")
                .style("opacity", 0.5)
                .attr('points', d => {
                    let pos = outerArc.centroid(d)
                    pos[0] = radius * 0.95 * (midAngle(d) < Math.PI ? 1 : -1)
                    return [arc.centroid(d), arc.centroid(d), arc.centroid(d)]
                })
                .transition()
                .duration(secDur)
                .delay((d, i) => arcAnimDur + (i * secIndividualdelay))
                .attr('points', d => {
                    let pos = outerArc.centroid(d)
                    pos[0] = radius * 0.95 * (midAngle(d) < Math.PI ? 1 : -1)
                    return [arc.centroid(d), outerArc.centroid(d), pos]
                })

            setTimeout(function() {
                $(".total").fadeIn(3000);
            }, 3000);


        }
        draw()
    </script>
    <!-- |||||||| -->
</body>

</html>