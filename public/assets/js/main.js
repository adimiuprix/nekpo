document.addEventListener("DOMContentLoaded", function() {
    let t = document.querySelectorAll("[data-tabs-toggle]"),
        e = document.querySelectorAll("[data-tabs-content]"),
        a = t[0],
        l = document.querySelector(a.getAttribute("data-tabs-toggle"));
    a.classList.add("active"), a.style.backgroundColor = "var(--warna_3)", l.style.display = "block", t.forEach(function(a) {
        a.addEventListener("click", function() {
            e.forEach(function(t) {
                t.style.display = "none"
            }), t.forEach(function(t) {
                t.classList.remove("active"), t.style.backgroundColor = "var(--warna_0)"
            });
            let a = this.getAttribute("data-tabs-toggle"),
                l = document.querySelector(a);
            l.style.display = "block", this.classList.add("active"), this.style.backgroundColor = "var(--warna_3)"
        })
    })
});

document.getElementById('scrollLeft').addEventListener('click', function() {
    document.querySelector('.tabs-container').scrollBy({
        left: -100,
        behavior: 'smooth'
    });
});

document.getElementById('scrollRight').addEventListener('click', function() {
    document.querySelector('.tabs-container').scrollBy({
        left: 100,
        behavior: 'smooth'
    });
});

document.addEventListener("DOMContentLoaded", function() {
document.getElementById("hero").classList.remove("hidden");
});