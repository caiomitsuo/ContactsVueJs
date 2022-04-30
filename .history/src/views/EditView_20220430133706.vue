<template>
  <div>Editar {{this.$route.params.id}}</div>
  <div class="row">
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
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>