const arrows = document.querySelectorAll(".arrows");
const cardCarousel = document.querySelectorAll(".card");
let count = 0;
const maxConut = cardCarousel.length;

arrows.forEach((arrow) => {
    arrow.addEventListener("click", () => {
        if (arrow.classList.contains("right")) {
            count += 1;
            if (count >= maxConut) {
                count = 0;
            }
        } else {
            count -= 1;
            if (count < 0) {
                count = maxConut - 1;
            }
        }
        cardCarousel[count].scrollIntoView({
            inline: "center",
            behavior: "smooth",
            block: "nearest",
        });
    });
});
