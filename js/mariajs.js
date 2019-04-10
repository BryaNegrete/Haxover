function foo() {
    "use strict";
    ('img_click').click(function (e) {
        var img, modal;
        img = e.target.src;
        modal = '<div class="imgrande"><img src="' + img + '" alt=""><div class="btnx" id="btnx">x</div></div>';
        ('body').append(modal);
    });
    ('#btnx').click(function () {
        ('#modal').remove();
    });
}