<template>
    <div>
        <div class="indietro">
            <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
                <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
            </a>
            <div class="titoli" style="display: inline-block">Modifica evento</div>
        </div>

        <div class="fotobarevento">
            <img src="../assets/foto_bar.png" alt="" />
        </div>

        <div id="nomevento">
            <input type="text" class="inputce" v-model="nome" placeholder="Bar Minchione" />
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
                <div class="eqInner"><input type="number" v-model="np" class="inputpart" /></div>
            </div>
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Data
                <div class="eqInner">
                    <input type="date" v-model="data" class="inputdata" />
                </div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">
                    <input type="time" v-model="time" class="inputora" />
                </div>
            </div>
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Categoria
                <div class="eqInner">
                    <select name="categorie" v-model="categoria" class="menucat">
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
            <textarea name="inputdesc" v-model="descrizione" class="inputdesc" cols="30" rows="10" maxlength="50" placeholder="Inserisci delle informazioni aggiuntive"></textarea>
        </div>

        <div class="botoniConfEl">
            <button class="botonConfMod" @click="modifica()">
                <img src="../assets/V.png" alt="" />
                <div class="txtBotoni">
                    Conferma <br />
                    Modifiche
                </div>
            </button>
            <button class="eliminaEv" @click="elimina()">
                <img src="../assets/X.png" alt="" />
                <div class="txtBotoni">
                    Elimina <br />
                    Evento
                </div>
            </button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'ModificaEventoUtente',
    data() {
        return {
            nome: '',
            np: 0,
            data: '',
            time: '',
            categoria: '',
            descrizione: '',
            id: '',
        };
    },
    mounted() {
        this.id = JSON.parse(localStorage.evento).idUEvento;
    },
    methods: {
        async modifica() {
            await axios
                .post('http://localhost/kanpai/back-End/ModificaEventoUtente.php', {
                    nome: this.nome,
                    descrizione: this.descrizione,
                    categoria: this.categoria,
                    np: this.np,
                    id: this.id,
                    data: this.data,
                    time: this.time,
                })
                .then((response) => {
                    this.$router.push('/pagina-successo');
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        async elimina() {
            await axios
                .post('http://localhost/kanpai/back-End/EliminaEventoUtente.php', {
                    id: this.id,
                })
                .then((response) => {
                    this.$router.push('/pagina-successo');
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
