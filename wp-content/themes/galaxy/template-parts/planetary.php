<div class="planetary-loading">
    <div class="system" role="status" aria-live="polite" aria-label="Loading — planetary system">
        <div class="sun" aria-hidden="true"></div>

        <div class="orbit one" aria-hidden="true"></div>

        <span class="label">Loading</span>
    </div>
</div>
<style>
    :root {
        --bg: #0b1020;
        --sun: #e0e0e0ff;
        --orbit-color: rgba(255, 255, 255, 0.06);
        --planet-1: #f8f8f8ff;
        --size: 220px;
        /* overall scale */
        --center-size: 28px;
        /* sun size */
    }

    /* Centring + container */
    body {
        margin: 0;
        min-height: 100vh;
        display: grid;
        place-items: center;
        background: linear-gradient(180deg, var(--bg) 0%, #061025 100%);
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    .system {
        width: var(--size);
        height: var(--size);
        position: relative;
        display: grid;
        place-items: center;
        isolation: isolate;
    }

    /* The sun (center) */
    .sun {
        position: absolute;
        width: var(--center-size);
        height: var(--center-size);
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%, #fff 0 10%, var(--sun) 12%, #ebebebff 45%);
        box-shadow: 0 0 18px 6px rgba(255, 211, 107, 0.12), 0 0 50px 12px rgba(255, 160, 40, 0.06) inset;
        z-index: 20;
        transform: translateZ(0);
        animation: pulse 2.4s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.06);
            opacity: .92;
        }
    }

    /* Generic orbit wrapper — we rotate this to make the planet orbit */
    .orbit {
        --radius: 48px;
        /* distance from center */
        --dot-size: 10px;
        /* planet visual size (if using pseudo) */
        --speed: 6s;
        /* orbit period */
        position: absolute;
        width: calc(var(--radius) * 2 + var(--dot-size));
        height: calc(var(--radius) * 2 + var(--dot-size));
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        /* keep stacking order: inner orbits above outer orbits */
        display: block;
        pointer-events: none;
        transform-origin: 50% 50%;
        will-change: transform;
    }

    /* Orbit track using ::before, minimalist faint ring */
    .orbit::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 50%;
        box-shadow: 0 0 0 1px var(--orbit-color);
        transform: translateZ(0);
    }

    /* Planet using ::after — positioned at right side of orbit and follows by rotating parent */
    .orbit::after {
        content: "";
        position: absolute;
        width: var(--dot-size);
        height: var(--dot-size);
        border-radius: 50%;
        top: 50%;
        left: 100%;
        transform: translate(-50%, -50%) translateX(calc(-1 * var(--dot-size) / 2));
        box-shadow: 0 6px 10px rgba(2, 6, 23, 0.45);
        /* subtle self-spin */
        animation: planet-spin 1.8s linear infinite;
    }

    @keyframes planet-spin {
        from {
            transform: translate(-50%, -50%) translateX(calc(-1 * var(--dot-size) / 2)) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) translateX(calc(-1 * var(--dot-size) / 2)) rotate(360deg);
        }
    }

    /* Create different orbits/planets by changing variables on each .orbit instance */
    .orbit.one {
        --radius: 36px;
        --dot-size: 8px;
        --speed: 2.8s;
        z-index: 18;
    }

    .orbit.one::after {
        background: var(--planet-1);
    }

    .orbit.two {
        --radius: 70px;
        --dot-size: 10px;
        --speed: 7.2s;
        z-index: 16;
    }

    .orbit.two::after {
        background: var(--planet-2);
    }

    .orbit.three {
        --radius: 112px;
        --dot-size: 12px;
        --speed: 11.5s;
        z-index: 14;
    }

    .orbit.three::after {
        background: var(--planet-3);
    }

    /* rotate orbit wrapper — direction alternates for visual variety */
    .orbit.one {
        animation: orbit-rotate var(--speed) linear infinite;
        animation-direction: normal;
    }

    @keyframes orbit-rotate {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    /* Add tiny star specks for ambience using pseudo elements on container */
    .system::before,
    .system::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background-image:
            radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.06) 0 1px, transparent 2px),
            radial-gradient(circle at 70% 10%, rgba(255, 255, 255, 0.04) 0 1px, transparent 2px),
            radial-gradient(circle at 30% 80%, rgba(255, 255, 255, 0.03) 0 1px, transparent 2px);
        z-index: 0;
        mix-blend-mode: screen;
    }

    /* accessible hidden text and spacing */
    .label {
        position: absolute;
        left: -9999px;
        width: 1px;
        height: 1px;
        overflow: hidden;
    }

    /* Responsive scaling: make it smaller on small screens */
    @media (max-width:360px) {
        :root {
            --size: 160px;
            --center-size: 20px;
        }
    }
</style>