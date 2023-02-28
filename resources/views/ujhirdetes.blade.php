@include('includes.head')
<head>
<title>Új hirdetés</title>
</head>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>
<article>
<form  method="post" action="{{ url('/uj') }}" novalidate>
            @csrf



            <div class="form-group">
                <label>Ingatlan kategóriája:</label>
<!--                 <br>
                <input type="number"class="form-control @error('kategoria') is-invalid @enderror" name="kategoria" id="kategoria">
                @error('kategoria')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror -->

            <select name="kategoria" id="kategoria" placeholder="Kérem válasszon!">
                <OPTION VALUE="1">Ház</option>
                <OPTION VALUE="2">Lakás</option>
                <OPTION VALUE="3">Építési telek</option>
                <OPTION VALUE="4">Garázs</option>
                <OPTION VALUE="5">Mezőgazdasági terület</option>
                <OPTION VALUE="6">Ipari ingatlan</option>

            </select>
            </div>



            <div class="form-group mb-2">
                <label>Hirdetés dátuma</label>
                <input type="date" class="form-control @error('hirdetesDatuma') is-invalid @enderror" name="hirdetesDatuma" id="hirdetesDatuma">
                @error('hirdetesDatuma')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Ingatlan leírása</label>
                <input type="text" class="form-control @error('leiras') is-invalid @enderror" name="leiras" id="leiras">
                @error('leiras')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Tehermentes</label>
                <br>
                <label>
                <input type="checkbox" class="form-control @error('tehermentes') is-invalid @enderror" name="tehermentes" id="tehermentes" value="2">
                @error('tehermentes')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="form-group mb-2">
                <label>Fénylép az ingatlanról</label>
                <input type="text" class="form-control @error('kepUrl') is-invalid @enderror" name="kepUrl" id="kepUrl">
                @error('kepUrl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


              <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </div>

            </form>
</article>
</main>
</body>
</html>
