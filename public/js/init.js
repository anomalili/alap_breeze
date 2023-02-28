import OsszesController from "./osszesMegjelenitese/controller/osszesController.js";
import UjhirdetesController from "./ujHirdetes/controller/ujhirdetesController.js";

class Init {
    constructor(){
        new OsszesController;
        new UjhirdetesController;

    }
}

$(function () {
    new Init();
});