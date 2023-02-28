import OsszesController from "./osszesMegjelenitese/controller/osszesController.js";

class Init {
    constructor(){
        new OsszesController;

    }
}

$(function () {
    new Init();
});