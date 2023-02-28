class ingatlanView {
    constructor(elem, szuloElem) {
        szuloElem.append(`
        
        <tr>
            <th>
                ${elem.kategoria}
            </th>
            <th>
                ${elem.leiras}
            </th>
            <th>
                ${elem.hirdetesDatuma}
            </th>
            <th>
                ${elem.tehermentes}
            </th>
            <th>
                ${elem.kepUrl}
            </th>
        </tr>
        
        `);
    }
}

class IngatlanokView {
    #elem
    constructor(elem, szuloElem) {
        this.#elem = elem;
        console.log(this.elem);
        szuloElem.append(`
        <div class="ingatlanok">
        <table>
        
        </table>
        </div>
        `)

        const szuloElem = $('.ingatlanok table')
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {
                new ingatlanView(elemem, szuloElem);
            });
        }
    }
}

export default IngatlanokView;