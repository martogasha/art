<div>
    <h1 class="cssanimation sequence zoomInLeft">AleFerrari.me</h1>
    <!--<h1 class="cssanimation zoomInLeft random">AlejandroFerrari.com</h1>
  please uncomment if you want to see random version-->
</div>
<style>
    body {overflow: hidden;}
    div { font-family: 'Ubuntu', sans-serif; position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); } /* center text styling */
    h1 { font-size: 4.5em; letter-spacing: -4px; font-weight: 700; color: #4684ee; text-align: center; } /* h1 styling */
    @media screen and (max-width: 488px) { h1 { font-size: 2.6em; letter-spacing: -2px; } } /* control h1 font size below 768px screen */

    /* animation duration and fill mode */
    .cssanimation {
        animation-duration: 1s;
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
</style>
