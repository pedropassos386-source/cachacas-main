(() => {
    "use strict";
    const mainImage = document.querySelector(".imagem-principal img");
    const thumbnails = document.querySelectorAll(".mini-imagem img");
    if (!mainImage || !thumbnails.length) return;
    thumbnails.forEach((thumbnail) => {
        thumbnail.tabIndex = 0;
        thumbnail.setAttribute("role", "button");
        thumbnail.setAttribute("aria-label", `Exibir ${thumbnail.alt.toLowerCase()}`);
        const select = () => { mainImage.src = thumbnail.src; mainImage.alt = thumbnail.alt; };
        thumbnail.addEventListener("click", select);
        thumbnail.addEventListener("keydown", (event) => {
            if (event.key === "Enter" || event.key === " ") { event.preventDefault(); select(); }
        });
    });
})();
