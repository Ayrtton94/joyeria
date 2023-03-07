<template>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr  v-for="(linea, index) in lineas " :key="index" :value="linea.id">
                    <td>{{ linea.id }}</td>
                    <td>{{ linea.nombre }}</td>
                    <td>{{ linea.descripcion }}</td>
                    <td>{{ linea.fecha }}</td>
                    <td>{{ linea.status }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <button class="btn btn-primary" @click="getLinea(paginacion.prev_page_url)" :disabled="!paginacion.prev_page_url">Anterior</button>
            <button class="btn btn-primary" @click="getLinea(paginacion.next_page_url)" :disabled="!paginacion.next_page_url">Siguiente</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                lineas: [],
                paginacion: {}
            };
        },
        mounted() {
            this.getLinea('/api/linea/list');
        },
        methods: {
            getLinea(url) {                
                axios.get(url).then(response => {
                    this.lineas = response.data.data;
                    this.paginacion = response.data;
                });
            }
        }
    };
</script>
