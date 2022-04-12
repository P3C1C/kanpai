<template>
    <div>
        <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        <div class="titoli" style="display: inline-block">Crea evento</div>

        <div class="fotobarevento">
            <img src="../assets/foto_bar.png" alt="" />
        </div>

        <div class="nomevento">
            <input type="text" class="inputce" placeholder="Nome evento" />
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Luogo
                <div class="eqInner">
                    <input type="text" class="inputluogo" placeholder="Nome bar" />
                </div>
            </div>
            <div class="innContenitore eqTitle">
                N° Part.
                <div class="eqInner"><i class="bi bi-person-fill"></i><input type="number" class="inputpart" /></div>
            </div>
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Data
                <div class="eqInner">
                    <input type="date" class="inputdata" />
                </div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">
                    <input type="time" class="inputora" />
                </div>
            </div>
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Categoria
                <div class="eqInner">
                    <select name="categorie" class="menucat">
                        <option value="musica">Musica</option>
                        <option value="film_serietv">Film/Serie tv</option>
                        <option value="videogiochi">Videogiochi</option>
                        <option value="sport">Sport</option>
                        <option value="informatica">Informatica</option>
                        <option value="manga_anime">Manga/Anime</option>
                        <option value="macchine">Macchine</option>
                        <option value="cibo">Cibo</option>
                        <option value="vino">Vino</option>
                        <option value="libri">Libri</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            <textarea class="inputdesc" cols="30" rows="10" maxlength="50" placeholder="Inserisci delle informazioni aggiuntive"></textarea>
        </div>

        <div class="bottonecrea">
            <button class="btn"><i class="bi bi-plus-circle-fill"></i> Crea</button>
        </div>

        <div class="menu">
            <router-link to="pagina-home" tag="a" class="link">
                <img src="../assets/bx_bxs-home.png" alt="casa" />
                Home
            </router-link>
            <router-link to="pagina-preferiti" tag="a" class="link">
                <img src="../assets/bx_bxs-heart.png" alt="cuore" />
                Preferiti
            </router-link>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/crea.png" alt="zircles" />
            </router-link>
            <router-link to="pagina-scopri" tag="a" class="link">
                <img src="../assets/bx_bxs-drink.png" alt="bicchiere" />
                Scopri
            </router-link>
            <router-link to="#" tag="a" class="link">
                <img src="../assets/bx_bxs-user.png" alt="utente" />
                Profilo
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CreaEventoUtente',
    data() {
        return {};
    },
    methods: {},
};
</script>

<style></style>
