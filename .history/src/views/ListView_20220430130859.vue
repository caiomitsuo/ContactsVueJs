<template>
  <div>
    <b-button v-b-modal.modal-1>Adicionar Novo Contato</b-button>
    <b-modal id="modal-1" title="BoostrapVue">
      <div class="column">
        <div class="col-8 mt-3">
            <b-input-group class="mb-2">
      <b-input-group-prepend is-text>
        <b-icon icon="person-fill"></b-icon>
               <b-form-input
            v-model="nome"
            placeholder="Digite o Nome do Contato"
            icon="person-fill"
          >
          </b-form-input>
      </b-input-group-prepend>
    </b-input-group>








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
        src="https://www.psicologo.com.br/wp-content/uploads/sou-uma-pessoa-boa-ou-nao.jpg"
      />
      <div class="card-body">
        <h5 class="card-title">{{ user.nome }}</h5>
        <h5 class="card-title">{{ user.email }}</h5>
        <h5 class="card-title">{{ user.telefone }}</h5>

        <a href="#" class="btn btn-primary"></a>
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
      this.listagem.push({nome:this.nome,email:this.email,telefone:this.telefone})
      this.nome = '',
      this.email = '',
      this.telefone = ''
    }
  },
  created() {
    var list = [
      {
        nome: "Caio Mitsuo",
        email: "caio_mitsuo@hotmail.com",
        telefone: "43 996807692",
      },
    ];
    this.listagem = list;
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