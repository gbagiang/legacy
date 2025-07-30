import "./bootstrap";

document.querySelector(".header__burger").addEventListener("click", (e) => {
    e.currentTarget.classList.toggle("is-active");
    document.querySelector(".header__nav").classList.toggle("is-active");
    e.currentTarget.setAttribute(
        "aria-expanded",
        e.currentTarget.getAttribute("aria-expanded") === "false"
            ? "true"
            : "false"
    );
});
