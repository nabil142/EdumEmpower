document.addEventListener("DOMContentLoaded", () => {
    const container = document.querySelector(".cards-work-container");
    const prevButton = document.querySelector(".prevButton");
    const nextButton = document.querySelector(".nextButton");

    prevButton.addEventListener("click", () => {
        container.scrollBy({
            left: -300, // Geser ke kiri sejauh 300px (atur sesuai kebutuhan)
            behavior: "smooth" // Efek transisi yang halus
        });
    });

    nextButton.addEventListener("click", () => {
        container.scrollBy({
            left: 300, // Geser ke kanan sejauh 300px
            behavior: "smooth" // Efek transisi yang halus
        });
    });
});
