import IngatlanokController from "./ingatlanok/controller/ingatlanokController.js";

class Init {
    constructor(){
        new IngatlanokController;

    }
}

$(function () {
    new Init();
});