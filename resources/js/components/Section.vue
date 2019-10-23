<template>
    <div class="row wrapper border-bottom white-bg page-heading mb-3">
        <div class="col-lg-12">
            <h2>
                <label for="" style="font-size: 27px;font-weight: bold;">
                    <span >{{professor.first_name}} {{professor.last_name}}</span>
                    <a href="javascript:;" class="btn btn-sm btn-primary ubidots text-uppercase"
                       v-if="framework.professor_subject.framework_id" @click="selectedFramework">
                        <strong> {{framework.professor_subject.framework_id}}</strong>
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </label>
                <label for="" class="pull-right">
                    <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#timeline">
                        Cronograma
                    </a>
                </label>

            </h2>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['framework'],
        mounted() {
            this.getProfessor();
        },
        data() {
            return {
                professor: '',
            }
        },
        methods: {
            selectedFramework() {
                this.$emit('selectedFramework');
            },
            getProfessor() {
                axios.get('/professor')
                    .then(response => {
                        this.professor = response.data
                    })
            }
        }
    }
</script>
