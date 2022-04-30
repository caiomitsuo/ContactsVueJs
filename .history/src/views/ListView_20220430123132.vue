<template>
  <div>
    <button>testes</button>
    <div class="card" style="width: 18rem;" v-for="user in listagem" :key="user.id">
         <img class="card-img-top" src="https://www.psicologo.com.br/wp-content/uploads/sou-uma-pessoa-boa-ou-nao.jpg">
        <div class="card-body">
    <h5 class="card-title">{{user.name}}</h5>
    
    <a href="#" class="btn btn-primary"></a>
  </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            listagem: []
        }
    },
    methods: {
        adicionarListagem() {

        },
    },
    created(){
        var list = [
            {nome: 'Caio Mitsuo', email:'caio_mitsuo@hotmail.com', id:'1'}
        ]
        this.listagem = list
    }
};
</script>

<style lang="scss" scoped>
</style>