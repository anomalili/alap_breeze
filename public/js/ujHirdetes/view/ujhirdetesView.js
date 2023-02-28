class OsszesView {
    constructor(elem, szuloElem) {

        szuloElem.append(`<tr>
            <th> <p class="kategoriaP">${elem.kategoria}"></p></th>
            <th> <p class="leirasP">${elem.leiras}</p></th>
            <th> <p class="hirdetesDatumaP">${elem.hirdetesDatuma}</p></th>
            <th> <p class="tehermentesP">${elem.tehermentes}</p></th>
            <th> <p class="arP">${elem.ar}</p></th>
            <th> <img src="${elem.kepUrl}"></th>       
        </tr> `);
    }
}



class OsszesekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        console.log(this.#elem);

        szuloElem.append(`
        
        <div class= "ajanlatok">
        
            <table>
           
            </table>
        </div>
                       
                                
         `);

        const szuloElemem = $('.ajanlatok table')
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {

                new OsszesView(elemem, szuloElemem);
            });
        }
    }
}

export default OsszesekView;