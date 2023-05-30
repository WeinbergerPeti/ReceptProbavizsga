import AdatFeldolgozModel from "./AdatFeldolgozModel.js";
import EgyRecept from "./EgyRecept.js";
import KategoriakView from "./KategoriakView.js";
import ReceptTablazat from "./ReceptTablazat.js";

class IndexController
{
    constructor()
    {
        console.log("Controller");

        const token= $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel(token);

        adatFeldolgozModel.adatBe("/receptek", this.receptAdatok);

        adatFeldolgozModel.adatBe("/kategoriak", this.kategoriaAdatok);

        $(window).on("receptKivalasztasa", (event)=>
        {
            console.log(event.detail);
            this.egyRecept(event.detail)
        })

        $(window).on("kategoriaSzures", (event)=>
        {
            console.log(event.detail);
            if(event.detail==0)
            {
                adatFeldolgozModel.adatBe("/receptek", this.receptAdatok);
            }
            else
            {
                adatFeldolgozModel.adatBe("/kategoria_szures/"+event.detail, this.receptAdatok);
            }
        })
    }

    kategoriaAdatok(tomb)
    {
        const szuloElem=$("header")
        new KategoriakView(tomb, szuloElem);
    }

    receptAdatok(tomb)
    {
        const szuloElem=$("article");
        new ReceptTablazat(tomb, szuloElem);
    }

    egyRecept(adat)
    {
        const szuloElem=$("section")
        new EgyRecept(adat, szuloElem);
    }
}
export default IndexController;