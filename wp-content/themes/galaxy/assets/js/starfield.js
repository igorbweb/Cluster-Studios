const canvas = document.getElementById("starfield");
const ctx = canvas.getContext("2d");

let width = canvas.width = window.innerWidth;
let height = canvas.height = window.innerHeight;

let stars = [];
const STAR_COUNT = 500;

const BASE_SPEED_MULTIPLIER = 1;

let scrollVelocity = 0;
let lastScrollY = window.scrollY;

function random(min, max) {
    return Math.random() * (max - min) + min;
}

function init() {
    stars = [];

    for (let i = 0; i < STAR_COUNT; i++) {
        let size_pre = Math.random() * 0.9 + 0.1;

        let star = {
            x: random(0, width + 20),
            y: random(0, height),
            size: size_pre * 2.0,
            baseSpeed: size_pre * 2.0 * (0.08 + Math.random() * 0.2),
            r: 0.85 + Math.random() * (1.0 - 0.85),
            g: 0.85 + Math.random() * (1.0 - 0.85) * 0.5,
            b: 0.85 + Math.random() * (1.0 - 0.85),
            a: Math.random()
        };

        if (i < 1500) {
            star.size += 1.0;
            star.a += 0.3;
        }

        stars.push(star);
    }
}

window.addEventListener("scroll", () => {
    let newY = window.scrollY;

    // velocidade absoluta (NUNCA inverte direção)
    scrollVelocity = Math.abs(newY - lastScrollY) * 0.3;

    lastScrollY = newY;
});

function easeScrollVelocity() {
    scrollVelocity *= 0.9;
}

function draw() {
    ctx.clearRect(0, 0, width, height);
    easeScrollVelocity();

    for (let s of stars) {
        s.x -= s.baseSpeed * BASE_SPEED_MULTIPLIER + scrollVelocity;

        if (s.x < -2) {
            s.x = width + 20;
            s.y = random(0, height);
        }

        ctx.fillStyle = `rgba(${s.r * 255}, ${s.g * 255}, ${s.b * 255}, ${s.a})`;
        ctx.beginPath();
        ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2);
        ctx.fill();
    }

    requestAnimationFrame(draw);
}

window.addEventListener("resize", () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    init();
});

init();
draw();