import ReceptSor from "./ReceptSor.js";

class ReceptTablazat
{
    constructor(tomb, szuloElem)
    {
        console.log("receptek");

        console.log(tomb);

        $(szuloElem).html(
        `<table class="table">
            <tr>
                <th>Név</th>
                <th>Kategória</th>
                <th>Kép</th>
                <th>Leírás</th>
                <th>Kiválasztás</th>
            </tr>
        </table>`);

        this.tablaElem=szuloElem.children("table:last-child");
        this.tbodyElem=this.tablaElem.children("tbody");

        tomb.forEach(elem => 
        {
            new ReceptSor(elem, this.tbodyElem);
        });
    }
}
export default ReceptTablazat;