const buttonRight = document.getElementById('slide-right');

buttonRight.onclick = function () {
    document.getElementById('scrolling-wrapper').scrollLeft += 116;
};

const buttonLeft = document.getElementById('slide-left');

buttonLeft.onclick = function () {
    document.getElementById('scrolling-wrapper').scrollLeft += -116;
};


const buttonRights = document.getElementById('slide-right-calendar');

buttonRights.onclick = function () {
    document.getElementById('scrolling-wrapper-calendar').scrollLeft += 350;
};

const buttonLefts = document.getElementById('slide-left-calendar');

buttonLefts.onclick = function () {
    document.getElementById('scrolling-wrapper-calendar').scrollLeft += -350;
};
