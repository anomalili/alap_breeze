class OsszesView {
    constructor(elem, szuloElem) {

        let kat = " ";

        if (elem.kategoria == 1) {
            kat = "Ház";
        }
        else if (elem.kategoria == 2) { kat = "Lakás"; }
        else if (elem.kategoria == 3) { kat = "Építési telek"; }
        else if (elem.kategoria == 4) { kat = "Garázs"; }
        else if (elem.kategoria == 5) { kat = "Mezőgazdasági terület"; }
        else { kat = "Ipari ingatlan" }




        let teherment = " ";

        if (elem.tehermentes == 1) {
            teherment = "tehermentes";
        } else { teherment = "terhes" }






        szuloElem.append(`<tr>
            <th> <p class="kategoriaP">${kat}</p></th>
            <th> <p class="leirasP">${elem.leiras}</p></th>
            <th> <p class="hirdetesDatumaP">${elem.hirdetesDatuma}</p></th>
            <th> <p class="tehermentesP">${teherment}</p></th>
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
            <tr>
            <th>Kategória</th>
            <th>Leírás</th>
            <th>Hirdetés dátuma</th>
            <th>Tehermentesség</th>
            <th>Ár</th>
            <th>Fénykép</th>
            </tr>
            </table>
           <table class="ajanlatok">
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