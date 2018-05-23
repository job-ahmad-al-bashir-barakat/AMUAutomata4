<style>

    .node {
        cursor: pointer;
    }

    .overlay{
        background-color:#EEE;
    }

    .node circle {
        fill: #fff;
        stroke-width: 1.5px;
    }

    .node text {
        font-size:10px;
        font-family:sans-serif;
    }

    .link {
        fill: none;
        stroke-width: 1.5px;
    }

    .templink {
        fill: none;
        stroke: red;
        stroke-width: 3px;
    }

    .ghostCircle.show{
        display:block;
    }

    .ghostCircle, .activeDrag .ghostCircle{
        display: none;
    }

</style>
@php($rotate = $data->get('rotate', 'V') == 'V'?90:0)
<div id="tree-container"></div>

<script src="//d3js.org/d3.v3.min.js"></script>
<script>

    // size of the diagram
    var viewerWidth = $(document).width();
    var viewerHeight = $(document).height();

    var tree = d3.layout.tree()
        .size([viewerHeight, viewerWidth]);

    // define the baseSvg, attaching a class for styling and the zoomListener
    var baseSvg = d3.select("#tree-container").append("svg")
        .attr("width", viewerWidth)
        .attr("height", viewerHeight)
        .attr("class", "overlay")
        .call(zoomListener);

    d3.json("{{ RouteUrls::hierarchy() }}", function(error, flare) {

        if (error) throw error;

        root = flare;
        root.x0 = height / 2;
        root.y0 = 0;

        function collapse(d) {
            if (d.children) {
                d._children = d.children;
                d._children.forEach(collapse);
                d.children = null;
            }
        }

        if(root.children)
        {
            root.children.forEach(collapse);
            update(root);
        }
    });

</script>