class EgyRecept
{
    constructor(elem, szuloElem)
    {
        console.log(elem.kategoria_nev);

        $(szuloElem).html(
            `<p>${elem.nev}</p>
            <p>${elem.kategoria_nev}</p>
            <p>${elem.kep_eleresi_ut}</p>
            <p>${elem.leiras}</p>`
        )
    }
}
export default EgyRecept
