<template>
    <div>
        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
            <img src="../assets/left arrow.png" alt="freccia" class="freccia" />
        </a>
        <div class="titoli" style="display: inline-block">Modifica Profilo</div>

        <div class="imgProfilo">
            <img src="../assets/imgUser.png" alt="" />
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Nome</span>
            <div>
                <input type="text" v-model="nome" class="nomePro" />
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">cognome</span>
            <div>
                <input type="text" v-model="cognome" class="nomePro" />
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Data di nascita</span>
            <div>
                <input type="date" class="inputdata" />
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Sesso</span>
            <div>
                <select class="selec" v-model="sesso">
                    <option value="Indeterminato">Indeterminato</option>
                    <option value="femmina">F</option>
                    <option value="maschio">M</option>
                </select>
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Biografia</span>
            <div>
                <textarea class="inputdesc" v-model="descrizione" maxlength="100" placeholder="Racconta qualcosa su di te"></textarea>
            </div>
        </div>

        <div class="bottonecrea">
            <button @click="modifica()" class="btn"><i class="bi bi-plus-circle-fill"></i> Conferma</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'ModificaProfiloUtente',
    data() {
        return {
            nome: '',
            cognome: '',
            sesso: '',
            descrizione: '',
            id: '',
        };
    },
    mounted() {
        this.id = JSON.parse(localStorage.user).idUtente;
    },
    methods: {
        async modifica() {
            let questo = this;
            await axios
                .post('http://localhost/kanpai/back-End/ModificaProfiloUtente.php', {
                    nome: this.nome,
                    cognome: this.cognome,
                    sesso: this.sesso,
                    descrizione: this.descrizione,
                    id: this.id,
                })
                .then(function (response) {
                    console.log(response.data);
                    localStorage.tipo = response.data[0].tipo;
                    localStorage.user = response.data[0].user;
                    questo.$router.push('/pagina-successo');
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
