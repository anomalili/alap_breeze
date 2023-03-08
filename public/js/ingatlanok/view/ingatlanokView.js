class IngatlanView {
    constructor(elem, szuloElem) {

        console.log("IngatlanView")
        
        let teher = " ";
        if (elem.tehermentes == 0) {
            teher = "igen"; 
        } else {
            teher = "nem";
        }

        szuloElem.append(`
         
       
            <div class="grid-item">
                ${elem.nev}
            </div>
            <div class="grid-item">
                ${elem.leiras}
            </div>
            <div class="grid-item">
                ${elem.hirdetesDatuma}
            </div>
            <div class="grid-item">
                ${teher}
            </div>
            <div class="grid-item">
                <img src="${elem.kepUrl}"> </img>
            </div>
        
        
        `)
    }
}

class IngatlanokView {
    #elem;
    constructor(elem, szuloElem) {

        console.log("IngatlanokView")

        this.#elem = elem
        szuloElem.append(`
        
        <div class="main">
        
            <div class="grid-item">
                <p>Kategória</p>
            </div>
            <div class="grid-item">
                <p>Leírás</p>
            </div>
            <div class="grid-item">
                <p>Hírdetés Dátuma</p>
            </div>
            <div class="grid-item">
                <p>Tehermentes</p>
            </div>
            <div class="grid-item">
                <p>Fénykép</p>
            </div>
        
        </div>

        `);

        const szuloElemem = $(`.main`)
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {
                new IngatlanView(elemem, szuloElemem);
            });
        }
    }
}

export default IngatlanokView;

