<div data-animation='first'>
    <div></div>
    <div></div>
</div>
<style>
    :root {
        --transform-value: -100%;
        --animation-duration: 1s;
        --animation-ease: ease-in;
    }

    @keyframes initialAnimation-horizontal {
        from {
            transform: translateX(0)
        }
        to {
            transform: translateX(var(--transform-value));
        }
    }

    [data-animation*='first'] div:first-child, [data-animation*='first'] div:last-child {
        position: fixed;
        width: 50vw;
        height: 100vh;

        top: 0;

        border: .25em solid #a90329;
        background: linear-gradient(to right, #a90329 0%,#a90329 6%,#6d0019 10%,#a90329 14%,#a90329 20%,#6d0019 24%,#a90329 28%,#a90329 34%,#6d0019 38%,#a90329 42%,#a90329 48%,#6d0019 52%,#a90329 56%,#a90329 62%,#6d0019 66%,#a90329 70%,#a90329 76%,#6d0019 80%,#a90329 84%,#a90329 90%,#6d0019 94%,#a90329 98%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

        z-index: 123456;
    }

    [data-animation*='first'] div:first-child {
        left: 0;

        animation: var(--animation-duration) var(--animation-ease) var(--animation-duration) 1 forwards initialAnimation-horizontal;
    }
    [data-animation*='first'] div:last-child {
        right: 0;

        --transform-value: 100%;
        animation: var(--animation-duration) var(--animation-ease) var(--animation-duration) 1 forwards initialAnimation-horizontal;
    }

</style>
