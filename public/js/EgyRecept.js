class EgyRecept
{
    constructor(elem, szuloElem)
    {
        console.log(elem.kategoria_nev);

        $(szuloElem).html(
            `<p>${elem.nev}</p>
            <p>${elem.kategoria_nev}</p>
            <p><img src="${elem.kep_eleresi_ut}" alt""></p>
            <p>${elem.leiras}</p>`
        )
    }
}
export default EgyRecept
