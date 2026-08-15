document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("themeToggle");
    const body = document.body;

    const saved = localStorage.getItem("delvin-theme");
    if (saved === "dark") body.classList.add("dark");

    function syncIcon() {
        if (!themeToggle) return;
        themeToggle.textContent = body.classList.contains("dark") ? "☀" : "☾";
    }
    syncIcon();

    if (themeToggle) {
        themeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");
            localStorage.setItem(
                "delvin-theme",
                body.classList.contains("dark") ? "dark" : "light"
            );
            syncIcon();
        });
    }

    document.querySelectorAll(".tab").forEach((tab) => {
        tab.addEventListener("click", () => {
            document.querySelectorAll(".tab").forEach((item) => item.classList.remove("active"));
            tab.classList.add("active");
        });
    });

    document.querySelectorAll(".product-tool").forEach((btn) => {
        btn.addEventListener("click", () => {
            if (btn.textContent.trim() === "♡") {
                btn.textContent = "♥";
            } else if (btn.textContent.trim() === "♥") {
                btn.textContent = "♡";
            }
        });
    });
});
