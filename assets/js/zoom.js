(() => {
    "use strict";
    const container = document.querySelector(".imagem-principal");
    const image = container?.querySelector("#img");
    if (!container || !image || window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
    container.addEventListener("pointermove", (event) => {
        if (event.pointerType === "touch") return;
        const rect = container.getBoundingClientRect();
        image.style.transformOrigin = `${((event.clientX - rect.left) / rect.width) * 100}% ${((event.clientY - rect.top) / rect.height) * 100}%`;
        image.style.transform = "scale(2)";
    }, { passive: true });
    container.addEventListener("pointerleave", () => { image.style.transformOrigin = "center"; image.style.transform = "scale(1)"; });
})();
