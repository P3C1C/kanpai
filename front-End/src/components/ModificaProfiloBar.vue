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
            <span class="titolodesc">Indirizzo</span>
            <div>
                <input type="text" class="nomePro" />
            </div>
        </div>

        <div class="descrizionevento">
            <span class="titolodesc">Biografia</span>
            <div>
                <textarea v-model="descrizione" class="inputdesc" maxlength="100" placeholder="Racconta qualcosa su di te"></textarea>
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
    name: 'ModificaProfiloBar',
    data() {
        return {
            nome: '',
            descrizione: '',
            id: '',
        };
    },
    mounted() {
        this.id = JSON.parse(localStorage.user).idBar;
    },
    methods: {
        async modifica() {
            let questo = this;
            await axios
                .post('http://localhost/kanpai/back-End/ModificaProfiloBar.php', {
                    nome: this.nome,
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
