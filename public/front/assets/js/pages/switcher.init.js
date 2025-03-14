function toggleSwitcher() {
    var t = document.getElementById("style-switcher");
    "-165px" === t.style.left
        ? (t.style.left = "-0px")
        : (t.style.left = "-165px");
}
function setColor(t) {
    (document.getElementById("bootstrap-style").href =
        "assets/css/bootstrap-" + t + ".min.css"),
        (document.getElementById("app-style").href =
            "assets/css/app-" + t + ".min.css");
}
function setColorGreen() {
    (document.getElementById("bootstrap-style").href =
        "assets/css/bootstrap.min.css"),
        (document.getElementById("app-style").href = "assets/css/app.min.css");
}
var btn = document.getElementById("mode");
btn.addEventListener("click", function (t) {
    var e = localStorage.getItem("theme");
    "light" == e || "" == e
        ? (document.body.setAttribute("data-layout-mode", "dark"),
          localStorage.setItem("theme", "dark"))
        : (document.body.removeAttribute("data-layout-mode"),
          localStorage.setItem("theme", "light"));
});
var mybutton = document.getElementById("back-to-top");
function scrollFunction() {
    100 < document.body.scrollTop || 100 < document.documentElement.scrollTop
        ? (mybutton.style.display = "block")
        : (mybutton.style.display = "none");
}
function topFunction() {
    (document.body.scrollTop = 0), (document.documentElement.scrollTop = 0);
}
window.onscroll = function () {
    scrollFunction();
};
var preloader = document.getElementById("preloader");
window.addEventListener("load", function () {
    (preloader.style.opacity = "0"), (preloader.style.visibility = "hidden");
});
for (
    var favouriteBtn = document.getElementsByClassName("bookmark-btn"), i = 0;
    i < favouriteBtn.length;
    i++
) {
    var favouriteBtns = favouriteBtn[i];
    favouriteBtns.onclick = function () {
        favouriteBtns.classList.toggle("active");
    };
}
