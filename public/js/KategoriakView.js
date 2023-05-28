import ReceptView from "./KategoriaView.js";

class KategoriakView
{
    constructor(tomb, szuloElem)
    {
        $(szuloElem).html(`<select id="szures"><option vlaue="mindegyik" >Mindegyik</option></select>`);

        this.selectElem=szuloElem.children("select:last-child")

        tomb.forEach(elem => 
        {
            new ReceptView(elem, this.selectElem);    
        });
    }
}
export default KategoriakView;