class KategoriaView
{
    #elem
    ertek
    constructor(elem, szuloElem)
    {
        this.#elem=elem
        $(szuloElem).append(`<option value="${elem.id}">${elem.nev}</option>`)
    }
}
export default KategoriaView