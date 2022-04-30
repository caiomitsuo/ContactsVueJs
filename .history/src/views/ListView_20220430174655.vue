<template>
  <div>
    <b-button v-b-modal.modal-1>Adicionar Novo Contato</b-button>
    <b-modal id="modal-1" title="Adicionar um Contato">
      <div class="column">
        <div class="col-8 mt-3">
          <b-form-input
            v-model="nome"
            placeholder="Digite o Nome do Contato"
          >
          </b-form-input>
        </div>
        <div class="col-8 mt-3">
          <b-form-input
            v-model="email"
            placeholder="Digite o Email do Contato"
          ></b-form-input>
        </div>
        <div class="col-8 mt-3">
          <b-form-input

           v-model="telefone"
            placeholder="Digite o Telefone do Contato"
          ></b-form-input>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <button @click="addContato" class="btn btn-success btn-block">Salvar Contato </button>
        </div>
      </div>
    </b-modal>
  <div class="card-container">
    <div
      class="card"
      style="width: 18rem"
      v-for="user in listagem"
      :key="user.id"
    >
      <img
        class="card-img-top"
        src="https://scontent.fldb5-1.fna.fbcdn.net/v/t1.18169-9/14291733_1104021529635060_4879761985621351972_n.png?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=RzZBJ4Pj82MAX-r_yNh&_nc_ht=scontent.fldb5-1.fna&oh=00_AT_I7d2dMioSfzi77DZJbxgsY8V73tWTmKqoUkyapgXqaQ&oe=62915892"
      />
      <div class="card-body">
        <h5 class="card-title">{{ user.nome }}</h5>
        <h5 class="card-title">{{ user.email }}</h5>
        <h5 class="card-title">{{ user.telefone }}</h5>
        <router-link  :to="{name:'editar', params:{usuario:user.id}}">
          <b-button variant="outline-primary">Editar Contato</b-button>
        </router-link>
      </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      listagem: [],
      nome: '',
      email: '',
      telefone: '',
    };
  },
  methods: {
    adicionarListagem() {},
    addContato(){
      var data = {nome:this.nome,email:this.email,telefone:this.telefone}

      this.$http.post('adicionar',data).then((response) => {
        console.log(response)
      })
      this.listagem.push(data)
      this.nome = '',
      this.email = '',
      this.telefone = ''
    },
    getListagem(){
      this.$http.get('lista').then((response)=> {
        this.listagem = response.data
      })
    }
  },
  created() {
    this.getListagem();
  },
};
</script>

<style lang="css" scoped>
.card-container{
  margin-left: 5vw;
  display: flex;
  flex-direction: row;
  align-items: flex-start;

}
</style>