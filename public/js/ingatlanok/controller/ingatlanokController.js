import Aszinkron from "../../aszinkron.js";
import IngatlanokView from "../view/ingatlanokView.js";

class IngatlanokController{
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);

        console.log("IngatlanokController"); 

        $("#ingatlanokGomb").on("click", () => {
            let vegpont = "all";
            console.log("gombra *katt*");
            aszinkron.adatBe(vegpont, this.megjelenit);
        });

    }

    megjelenit(adat) {
        //console.log("megjelenit: " + adat);
        new IngatlanokView(adat, $(".ingatlanokHelye"));
    }
}

export default IngatlanokController;