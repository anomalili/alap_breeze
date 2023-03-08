<link href="../css/app.css" rel="stylesheet">

<form action="/store" method="post">
    @csrf
<div class="ujMain">
    <div class="ujIngatlanKategoria">
        <p>Ingatlan kategória</p>
        <select id="kategoria" name="kategoria">
            <option value="">Kérem válasszon</option>
            <option value="1">Ház</option>
            <option value="2">Lakás</option>
            <option value="3">Garázs</option>
            <option value="4">Lakóöev</option>
            <option value="5">Iker</option>
        </select>
    </div>
    <div class="ujIngatlanDatum">
        <p>Hírdetés Dátuma</p>
        <input type="date" id="hirdetesDatuma" name="hirdetesDatuma"></input>
    </div>
    <div class="ujIngatlanLeiras">
        <p>Ingatlan leírása</p>
        <textarea rows="4" cols="50" id="leiras" name="leiras"></textarea>
    </div>
    <div class="ujIngatlanTeher">
        <br>
        <input type="checkbox" id="tehermentes" name="tehermentes" value=1>
        Tehermentes ingatlan
        
    </div>
    <div class="ujIngatlanFenykep">

    </div>
    <br>
    <div class="ujFenykep">
        <p>Fénykép az ingatlanról</p>
        <input type="text" id="kepUrl" name="kepUrl"></input>
    </div>
    <br>
    <input type="submit" value="Submit">
</div>
</form>    

<button><a href="welcome">Vissza</a></button>