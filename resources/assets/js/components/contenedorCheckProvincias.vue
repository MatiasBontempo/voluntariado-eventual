<template>
    <div class="acordion ">
        <a 
            v-bind:class="{active: $parent.dataLocalidades.length > 0}"
            data-toggle="collapse" href="#provincias" 
            role="button" aria-expanded="false"
        ><span> Provincias</span> <i class="fas fa-caret-down"></i>
        </a>
        <div id="provincias" class="collapse lista-opciones" >

            <div v-for="provincia in listaProvincias">
                <check-provincias class="opciones"
                    :key="provincia.id_provincia"
                    v-bind:propdatos="provincia"
                >
                </check-provincias>

            </div>
            <button class="btn btn-sm" type="button" v-on:click="borrar">Borrar</button>
            <button class="btn btn-sm aplicar" type="button" v-on:click="aplicar">Aplicar</button>
        </div>
    </div>
</template>

<script>
    import CheckProvincias from './checkProvincias';

    export default {
        name: "contenedor-check-provincias",
        props: ['provincias'],
        components: {'check-provincias': CheckProvincias},
        data () {
            return {
                selected: [],
                selectAll: false
            }
        },
        methods: {
            aplicar() {
               let seleccionados = [];
               for (let i =0; i < this.$children.length; i++) {
                   seleccionados.push(this.$children[i].selected);
               }
               this.$parent.dataLocalidades = [].concat.apply([], seleccionados);
               $('#provincias').collapse('hide')
            },

            borrar() {
                for (let i =0; i < this.$children.length; i++) {
                    this.$children[i].selected = [];
                }
                this.$parent.dataLocalidades = [];
                $('#provincias').collapse('hide')
            },
            // seleccionarTodos() {
            //     for (let i =0; i < this.$children.length; i++) {
            //         this.$children[i].selectAll = !this.$children[i].selectAll;
            //     }
            // }

        },
        computed: {
            listaProvincias: {
                get: function() {
                    return this.provincias;
                },
                set: function(nuevoValor) {}
            }
        }
    }
</script>

<style scoped>
    .acordion {
        height: 100%;
        margin-left: -1px;
        margin-right: -1px;
    }
    .acordion a {
        color: #494848;
        display: inline-block;
        height: 100%;
        padding-top: 11px;
        text-decoration: none;
        vertical-align: middle;
        width: 100%;
    }
    .acordion a span {
        margin: auto 15px;
    }
    .opciones {
        color: black;
        font-weight: 500;
    }
    .opciones strong {
        font-weight: 900;
    }
    .acordion a.active {
        background-color: #0092dd;
        color: #fff;
    }
    .acordion a svg {
        color: #494848;
        float: right;
        margin-right: 15px;
    }
    .aplicar {
        background-color: #0092dd;
        color: #fff;
    }
    .acordion .collapsing, .acordion .collapse.show {
        z-index: 20;
        width: 100%;
        overflow:visible;
        border-bottom-left-radius:5px;
        border-bottom-right-radius:5px;
        padding: 5% 5%;
    }
    .lista-opciones {
        background: #fff;
        border: 1px solid #0092dd;
        border-top: 1px solid #a9a9a9;
        margin-left: 1px;
        position: absolute;
    }
    .acordion .collapsing.lista-opciones {
        display: none;
    }
    .dropdown-button {
        width: 100%;
    }
</style>