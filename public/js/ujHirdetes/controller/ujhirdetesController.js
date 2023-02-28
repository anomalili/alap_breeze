import Aszinkron from "../../aszinkron.js";
import OsszesekView from "../view/osszesView.js";

class UjhirdetesController{
    constructor(){

      

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);

        $("#ajanlatok").on("click", () => {
            let vegpont = "mindegyik";
            console.log("megjelenik az ajánlat")
            aszinkron.adatBe(vegpont, this.megjelenit);

        });
        

    }
    megjelenit(adat) {
        console.log(adat);

        new OsszesekView(adat, $("#ingatlanokHelye") );
}
}

export default UjhirdetesController;