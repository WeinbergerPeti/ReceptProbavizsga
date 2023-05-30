import ReceptView from "./KategoriaView.js";

class KategoriakView
{
    
    constructor(tomb, szuloElem)
    {
        this.ertek;
        $(szuloElem).html(`<select id="szures"><option value="0">Mindegyik</option></select>`);

        this.selectElem=szuloElem.children("select:last-child")

        tomb.forEach(elem => 
        {
            new ReceptView(elem, this.selectElem);    
        });

        $(`#szures`).on("change", ()=>
        {
            this.ertek=$("option:selected").val();
            console.log(this.ertek);
            this.kattintasTrigger("kategoriaSzures");
        })
    }

    kattintasTrigger(esemenyNeve)
    {
        const esemeny = new CustomEvent(esemenyNeve, {detail: this.ertek});
        window.dispatchEvent(esemeny);
    }
}
export default KategoriakView;