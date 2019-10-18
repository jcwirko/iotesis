<template><!-- Modal -->
    <div class="modal fade" id="timeline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: 50%; max-width: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Cronograma</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ibox ">
                        <div class="ibox-content" id="ibox-content">

                            <div id="vertical-timeline" class="vertical-container center-orientation dark-timeline">
                                <div v-for="(item,index) in days" v-if="index % 2 == 0" class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon navy-bg">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                    </div>
                                    <div class="vertical-timeline-content">
                                        <h3 class="title-subject">
                                            <span>  {{item.subject.name}}</span>
                                            <a href="#" class="btn btn-sm btn-primary pull-right"
                                               style="float: right;" @click="selectProfile(item.subject.id)"> Ver
                                                perfil</a>
                                        </h3>
                                        <span class="vertical-date">
                                            <small>{{item.left}}</small> <br>
                                            <small>{{item.date}}</small> <br>
                                            <small>{{item.start_time}} - {{item.end_time}}</small>
                                        </span>

                                    </div>
                                </div>

                                <div v-else class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon blue-bg">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                    </div>

                                    <div class="vertical-timeline-content">
                                        <h3 class="title-subject">
                                            <span>{{item.subject.name}}</span>
                                            <a href="#" class="btn btn-sm btn-success pull-right"
                                               @click="selectProfile(item.subject.id)"> Ver perfil </a>
                                        </h3>

                                        <span class="vertical-date">
                                            <small>{{item.left}}</small> <br>
                                            <small>{{item.date}}</small> <br>
                                            <small>{{item.start_time}} - {{item.end_time}}</small>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Timeline',
        data() {
            return {
                days: {}
            }
        },
        mounted() {
            this.getSubjectDays();
        },
        methods: {
            selectProfile: function (subjectId) {

                $('#timeline').modal('hide');

               axios.get(`subject/${subjectId}`)
                    .catch(error => {
                        console.log('Error: ' + error)
                    })
                    .then(response => {
                        this.$emit('subject', response)
                    });
            },
            getSubjectDays() {
                axios.get('/subject/getDays')
                    .then(response => {
                        this.days = response.data
                    })
            }
        }

    }
</script>

<style scoped>
    .ibox-content {
        border: none;
        padding: 0;
    }

    .swal-popup {
        height: 320px;
    }
</style>
