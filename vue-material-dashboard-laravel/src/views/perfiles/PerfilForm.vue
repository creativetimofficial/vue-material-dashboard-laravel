<template>
  <div class="py-4 container-fluid">
    <div class="mt-4 user">
      <div class="col-12">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-bottom">
            <div class="user d-flex align-items-center">
              <div class="col-6">
                <h5 class="mb-0 ms-0">{{ id ? 'Editar Perfil' : 'Crear Perfil' }}</h5>
              </div>
            </div>
          </div>

          <!-- Card body -->
          <div class="px-0 pb-0 card-body">
            <form @submit.prevent="submitForm">
              <div class="mb-3">
                <material-input
                    id="nombre"
                    label="Nombre del Perfil"
                    variant="static"
                    v-model:value="perfil.nombre"
                    name="nombre" />
              </div>
              <div class="text-end">
                <material-button type="submit" color="dark" variant="gradient">
                  Guardar
                </material-button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import MaterialButton from "@/components/MaterialButton.vue";
import MaterialInput from "@/components/MaterialInput.vue";

export default {
  props: {
    id: {
      type: [String, Number],
      default: null
    }
  },
  components: {
    MaterialButton,
    MaterialInput
  },
  data() {
    return {
      perfil: {
        nombre: ''
      }
    };
  },
  mounted() {
    if (this.id) {
      this.fetchPerfil();
    }
  },
  methods: {
    fetchPerfil() {
      axios.get(`http://localhost:8000/api/v2/perfiles/${this.id}`)
          .then(response => {
            this.perfil = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    submitForm() {
      const method = this.id ? 'put' : 'post';
      const url = this.id ? `http://localhost:8000/api/v2/perfiles/${this.id}` : 'http://localhost:8000/api/v2/perfiles';

      axios[method](url, this.perfil)
          .then(() => {
            this.$router.push('/perfiles');
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    }
  }
}
</script>

<style scoped>
.card {
  margin: 20px 0;
}

.card-header {
  padding: 15px;
  background-color: #f8f9fa;
}

.card-body {
  padding: 15px;
}

.mb-3 {
  margin-bottom: 1rem;
}

.text-end {
  text-align: right;
}
</style>
