import Aszinkron from "../../aszinkron.js";
import IngatlanokView from "../view/ingatlanok.js";

class IngatlanokController {
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);

        $("#ingatlanokGomb").on("click", () => {
            let vegpont = "all";
            aszinkron.adatBe(vegpont, this.megjelenit);
            console.log('gomb');
        });
    }

    megjelenit(adat) {
        new IngatlanokView(adat, $("#ingatlanokHelye"));
    }
}

export default IngatlanokController;