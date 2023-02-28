<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lineas</div>

                    <div class="card-body">
                        <table class="table">
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
                            <tr v-for="(linea, index) in lineas " :key="index" :value="linea.id">
                                <th scope="row">{{ linea.id }}</th>
                                <td>{{ linea.nombre }}</td>
                                <td>{{ linea.descripcion }}</td>
                                <td>{{ linea.fecha }}</td>
                                <td>{{ linea.status }}</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "List",
        data() {
            return {    
                lineas : {}
            }
        },
        mounted() {
            this.getLinea()
        },

        methods: {
            getLinea: function () {
                let currentObj = this
                let url = '/api/linea/list'
                axios.get(url).then((response) => {
                    currentObj.lineas = response.data
                    console.log(currentObj.lineas)
                    
                })
            },

        }
    }
</script>
