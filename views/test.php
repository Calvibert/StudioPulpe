<script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<style>
    .bar {
        width: 35px;
        height: 5px;
        background-color: black;
        margin: 6px 0;
    }

    .menu-elements-mb {
        display: inline-block;
        cursor: pointer;
    }

    .bar1,
    .bar2,
    .bar3 {
        width: 35px;
        height: 5px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
    }

    /* Rotate first bar */
    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    /* Fade out the second bar */
    .change .bar2 {
        opacity: 0;
    }

    /* Rotate last bar */
    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
    }
</style>
<div class="navbar">
    <div class="logo" style="float:left">
        Logo
    </div>
    <div class="menu-elements" style="float: right">
        Contact
        À propos
    </div>
    <div class="menu-elements-mb" style="float: right">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="menu-elements-mb-dropdown" style="float: right; margin-top: 10px; margin-right: -25px; background: #000; width: 120%; opacity: 0">
        <table>
            <tr>
                <div class="menu-item" style="color: #fff; float: right; padding-right: 50px; position: relative; padding: 10px 50px"><a>Contact</a></div>
                <br><br><br>
            </tr>
            <tr>
                <div class="menu-item" style="color: #fff; float: right; padding-right: 50px; position: relative; padding: 10px 50px"><a>À propos</a></div>
            </tr>
    </div>
</div>

<script>
    $(document).ready(function() {
        if (window.innerWidth < 600) {
            $(".menu-elements").hide();
            $(".menu-elements-mb-dropdown").hide();
            $(".menu-elements-mb").show();
        } else {
            $(".menu-elements").show();
            $(".menu-elements-mb-dropdown").hide();
            $(".menu-elements-mb").hide();
        }

        $(".menu-elements-mb").on('click', function() {
            if ($(".menu-elements-mb-dropdown").css("opacity") < 1) {
                $(".menu-elements-mb").addClass("change");
                $(".menu-elements-mb-dropdown").fadeTo(500, 1);
            } else {
                $(".menu-elements-mb").removeClass("change");
                $(".menu-elements-mb-dropdown").fadeTo(500, 0);
            }

        });
    });
</script>