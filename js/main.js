/**
 * Created by Dima on 19.08.2017.
 */
window.onwheel = function () {
    menuChanger()
};
function menuChanger(a) {
    var loc;
    if (a) {
        loc = a;
    } else {
        loc = window.location.hash.replace("#", "");
    }
    var menu = document.getElementById("menu");
    var links = menu.children;

    function offAllIds() {
        for (var i = 0; i < 4; i++) {
            links[i].id = "";
        }
    }

    offAllIds();
    switch (loc) {
        case 'main':
            links[0].id = "active";
            break;
        case 'about':
            links[1].id = "active";
            break;
        case "gallery":
            links[2].id = "active";
            break;
        case "free_lesson":
            links[3].id = "active";
            break;
    }
}

