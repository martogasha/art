<!-- Curtain moving to the sides and stopping when 30% of sides is left to be seen  -->

<div class="curtain curtain-left">
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
</div>
<div class="container"  >
    <div class="center">
        <div>
            <h1 class="cssanimation sequence zoomInLeft"><a href="{{url('/')}}"><img src="images/logo.png" alt="Header Logo"></a></h1>
            <!--<h1 class="cssanimation zoomInLeft random">AlejandroFerrari.com</h1>
          please uncomment if you want to see random version-->
        </div>

    </div>
</div>
<div class="curtain curtain-right">
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
    <div class="curtain-element"></div>
</div>
<style>


    /* animation duration and fill mode */
    .cssanimation {
        animation-duration: 3s;
        animation-fill-mode: both;
        display: inline-block;
    }

    /* zoomInLeft animation declaration & iteration counting */
    .zoomInLeft { animation-name: zoomInLeft }

    /* zoomInLeft animation keyframes */
    @keyframes zoomInLeft {
        from {
            transform: scale(10) translateX(-50%);
            opacity: 0;
        }
    }
    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .curtain {
        width: 50%;
        height: 99vh;
        float: left;
        animation-duration: 3s;
        animation-iteration-count: 1;
        animation-timing-function:ease-out;
    }

    .curtain-left {
        animation-name: go-left;

    }

    .curtain-right {
        animation-name: go-right;
    }

    @keyframes go-left {
        0% {
            transform: translate(0%, 0%);
        }
        100% {
            transform: translate(-70%, 0%);
        }
    }

    @keyframes go-right {
        0% {
            transform: translate(0%, 0%);
        }
        100% {
            transform: translate(70%, 0%);
        }
    }

    .curtain-element {
        width: 10%;
        height: 100%;
        float: left;
    }

    /* Alternating color of curtain pieces */

    .curtain-element:nth-child(odd) {
        background-color: black;
    }

    .curtain-element:nth-child(even) {
        background-color: black;
    }

</style>
<script data-cfasync="false"
        src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6f3ef95afd63cb73","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
<script>
$('#test').on('click',function () {
    window.location = "{{url('/')}}";//here double curly bracket
});
setTimeout( function(){
    window.location = "{{url('home')}}";//here double curly bracket
}  , 3000 );
</script>
