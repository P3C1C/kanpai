<template>
    <div>
        <div class="indietro">
            <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
                <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
            </a>
            <div class="titoli" style="display: inline-block">Crea evento</div>
        </div>

        <div class="fotobarevento">
            <img src="../assets/foto_bar.png" alt="" />
        </div>

        <div class="nomevento">
            <input type="text" class="inputce" v-model="nome" placeholder="Nome evento" />
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
                <div class="eqInner"><i class="bi bi-person-fill"></i><input v-model="np" type="number" class="inputpart" /></div>
            </div>
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Data
                <div class="eqInner">
                    <input v-model="data" type="date" class="inputdata" />
                </div>
            </div>
            <div class="innContenitore eqTitle">
                Orario
                <div class="eqInner">
                    <input v-model="time" type="time" class="inputora" />
                </div>
            </div>
        </div>

        <div class="informazioni">
            <div class="innContenitore eqTitle">
                Categoria
                <div class="eqInner">
                    <select v-model="categoria" name="categorie" class="menucat">
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
            <textarea v-model="descrizione" class="inputdesc" cols="30" rows="10" maxlength="50" placeholder="Inserisci delle informazioni aggiuntive"></textarea>
        </div>

        <div class="bottonecrea">
            <button @click="creaEvento()" class="btn"><img src="../assets/piu.png" alt="per unirsi ad un evento" style="width: 16px; height: 16px" /> Crea</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'CreaEventoUtente',
    data() {
        return {
            nome: '',
            descrizione: '',
            categoria: '',
            np: 0,
            id: '',
            data: '',
            time: '',
        };
    },
    mounted() {
        this.id = JSON.parse(localStorage.user).idUtente;
    },
    methods: {
        async creaEvento() {
            await axios
                .post('http://localhost/kanpai/back-End/CreaEventoUtente.php', {
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
    },
};
</script>

<style></style>
