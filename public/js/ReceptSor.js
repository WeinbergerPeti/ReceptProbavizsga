class ReceptSor
{
    #elem
    constructor(elem, szuloElem)
    {
        this.#elem=elem

        $(szuloElem).append(
            `<tr>
                <td>${elem.nev}</td>
                <td>${elem.kategoria_nev}</td>
                <td>${elem.kep_eleresi_ut}</td>
                <td>${elem.leiras}</td>
                <td><button id="gomb${elem.id}">Kiválasztás</button></td>
            </tr>`
        )

        $(`#gomb${elem.id}`).on("click", ()=>
        {
            this.kattintasTrigger("receptKivalasztasa");
        })
    }

    kattintasTrigger(esemenyNeve)
    {
        const esemeny = new CustomEvent(esemenyNeve, {detail: this.#elem});
        window.dispatchEvent(esemeny);
    }
}
export default ReceptSor;