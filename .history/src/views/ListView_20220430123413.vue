<template>
  <div>
    <b-button v-b-modal.modal-1>Adicionar Novo Contato</b-button>
        <b-modal id="modal-1" title="BoostrapVue>
            <p></p>
        </b-modal>
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
</template>

<script>
export default {
  data() {
    return {
      listagem: [],
    };
  },
  methods: {
    adicionarListagem() {},
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

<style lang="scss" scoped>
</style>