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
            <input v-model="nome" type="text" class="inputce" placeholder="Nome evento" />
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

        <div class="bioDesc">
            <div class="descrEvBar">Descrizione</div>
            <textarea v-model="descrizione" class="inputdesc" cols="30" rows="10" placeholder="Inserisci delle informazioni aggiuntive"></textarea>
        </div>

        <div class="bottonecrea">
            <button @click="creaEvento()" class="btn"><img src="../assets/piu.png" alt="per unirsi ad un evento" style="width: 16px; height: 16px" />Crea</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'CreaEventoBar',
    data() {
        return {
            nome: '',
            data: '',
            time: '',
            descrizione: '',
            id: '',
        };
    },
    mounted() {
        this.id = JSON.parse(localStorage.user).idBar;
    },
    methods: {
        async creaEvento() {
            let questo = this;
            await axios
                .post('http://localhost/kanpai/back-End/CreaEventoBar.php', {
                    nome: this.nome,
                    descrizione: this.descrizione,
                    id: this.id,
                    data: this.data,
                    time: this.time,
                })
                .then(function (response) {
                    questo.$router.push('/pagina-successo');
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
