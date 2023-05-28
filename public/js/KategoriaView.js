import ReceptSor from "./ReceptSor.js";

class KategoriaView
{
    #elem
    constructor(elem, szuloElem)
    {
        this.#elem=elem
        $(szuloElem).append(`<option value="${elem.nev}">${elem.nev}</option>`)

        $(`#szures`).on("change", function()
        {
            let ertek=$("option:selected").val();
            console.log(ertek);
            
            // new ReceptSor(ertek, $("article"));
        })
    }

    kattintasTrigger(esemenyNeve)
    {
        const esemeny = new CustomEvent(esemenyNeve, {detail: this.#elem});
        window.dispatchEvent(esemeny);
    }
}
export default KategoriaView