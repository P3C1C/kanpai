<template>
    <div>
        <div class="logo">
            <img src="../assets/gruppo.png" alt="background" class="mx-auto d-block" style="margin-bottom: -1px" />
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FBF5EB" fill-opacity="1" d="M0,96L40,101.3C80,107,160,117,240,149.3C320,181,400,235,480,234.7C560,235,640,181,720,160C800,139,880,149,960,176C1040,203,1120,245,1200,272C1280,299,1360,309,1400,314.7L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
        </svg>

        <div class="registrati">
            <div class="titolo">REGISTRATI</div>

            <div class="btn-group">
                <button type="button" :class="{ select: u }" class="gruppo" id="btnu" @click="switchu()">Utente</button>
                <button type="button" :class="{ select: b }" class="gruppo" id="btnb" @click="switchb()">Bar</button>
            </div>
            <br />

            <div v-if="u">
                <div>
                    <input type="text" v-model="nome" placeholder="Nome" class="inte" />
                </div>
                <div>
                    <input type="text" v-model="cognome" placeholder="Cognome" class="inte" />
                </div>
                <div>
                    <input type="text" v-model="email" placeholder="E-mail" class="inte" />
                </div>
                <div>
                    <input type="password" v-model="password" placeholder="Password" class="inte" />
                </div>
                <div>
                    <input type="password" v-model="conpas" placeholder="Conferma Password" class="inte" />
                </div>
                <div>
                    <button @click="registrati('u')" class="btn">Conferma</button>
                </div>
            </div>

            <div v-if="b">
                <div>
                    <input type="text" v-model="nome" placeholder="Nome Bar" class="inte" />
                </div>
                <div>
                    <input type="text" placeholder="Città" class="inte" />
                </div>
                <div>
                    <input type="text" placeholder="indirizzo" class="inte" />
                </div>
                <div>
                    <input type="text" placeholder="N. civico" class="inte" />
                </div>
                <div>
                    <input type="text" v-model="email" placeholder="E-mail" class="inte" />
                </div>
                <div>
                    <input type="password" v-model="password" placeholder="Password" class="inte" />
                </div>
                <div>
                    <input type="password" v-model="conpas" placeholder="Conferma Password" class="inte" />
                </div>
                <div>
                    <button @click="registrati('b')" class="btn">Conferma</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'PaginaRegistrazione',

    data() {
        return {
            u: true,
            b: false,
            nome: '',
            cognome: '',
            email: '',
            password: '',
            conpas: '',
        };
    },
    methods: {
        switchu() {
            this.u = true;
            this.b = false;
        },
        switchb() {
            this.u = false;
            this.b = true;
        },
        async registrati(tip) {
            let questo = this;
            await axios
                .post('http://localhost/kanpai/back-End/registrati.php', {
                    nome: this.nome,
                    cognome: this.cognome,
                    email: this.email,
                    password: this.password,
                    conpas: this.conpas,
                    tipo: tip,
                })
                .then(function (response) {
                    if (response.data == 'errore') {
                        console.log(response.data);
                        questo.$router.push('/pagina-errore');
                    } else {
                        localStorage.setItem('tipo', response.data[0].tipo);
                        localStorage.setItem('user', response.data[0].user);
                        questo.$router.push('/pagina-successo');
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
