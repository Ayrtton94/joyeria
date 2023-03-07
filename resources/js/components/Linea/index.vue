<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lineas</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <DataTable :data="lineas" :columns="columns" class="table table-striped table-bordered display"
                            :options="{responsive:true, autoWidth:false, dom:'Bfrtip'}">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                            </DataTable>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import DataTable from 'datatables.net-vue3';
    import DataTableLib from 'datatables.net-bs5';
    import Buttons from 'datatables.net-buttons-bs5';
    import ButtonsHtml5 from 'datatables.net-buttons/js/buttons.html5.mjs';
    import print from 'datatables.net-buttons/js/buttons.print';
    import pdfmake from 'pdfmake';
    import pdfFonsts from 'pdfmake/build/vfs_fonts';
    import 'datatables.net-responsive-bs5';
    import jszip from 'jszip';
    window.jszip = jszip;
    DataTable.use(DataTableLib);
    DataTable.use(pdfmake);
    DataTable.use(ButtonsHtml5 );

    export default {
        components:{
            DataTable
        },
        name: "List",
        data() {
            return {    
                lineas : null,
                columns:[
                    {data:null, render: function(data,type,row,meta){return `${meta.row+1}`}},
                    {data:'nombre'},
                    {data:'descripcion'},
                    {data:'fecha'},
                    {data:'status'},                                       
                ],
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
