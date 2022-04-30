<template>
  <div class="container">
    <h1>Editar Contato {{ this.$route.params.usuario }}</h1>
    <div>
      <div class="row">
        <div class="col-8">
          <b-form-input v-model="nome" placeholder="Digite o Nome do Contato">
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
          <button @click="update" class="btn btn-primary btn-block">
            Salvar
          </button>
          <button @click="excluir" class="btn btn-danger btn-block">
            Excluir
          </button>
          <div v-if="excluido" class="alert alert-success">
            Excluido com Sucesso
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      nome: "",
      email: "",
      telefone: "",
      excluido: false,
    }
  },
  methods: {
    getUser() {
      this.$http
        .get(`editar/${this.$route.params.usuario}`)
        .then((response) => {
          this.nome = response.data.nome;
          this.email = response.data.email;
          this.telefone = response.data.telefone;
        });
    },
    update() {
      var data = {
        name: this.nome,
        email: this.email,
        telefone: this.telefone,
      };
      this.$http
        .put(`update/${this.$route.params.usuario}`, data)
        .then((response) => {
          console.log(response + "CHEGOUCARAIO");
        });
    },
      excluir() {
    this.$http
      .delete(`delete/${this.$route.params.usuario}`)
      .then((response) => {
        if (response.data == "success") {
          this.excluido = true;
          setTimeout(() => {
            this.$router.push("/lista");
          }, 1000);
        }
      });
  },
  },
  created() {
    this.getUser();
  },
};
</script>

<style scoped>
</style>