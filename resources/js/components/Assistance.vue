<template>
    <div>
        <div class="ibox">
            <div class="ibox-title">
                <h5>
                    Asistencia Profesor
                    <span class="pull-right">
                        <div class="switch">
                            <strong></strong>
                            <div class="onoffswitch">
                                <input type="checkbox" :checked="subject.attend" class="onoffswitch-checkbox" id="attend-switch"
                                       :value="subject" name="attend" @change="attends">
                                    <label class="onoffswitch-label" for="attend-switch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </span>
                </h5>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: 'Assistance',
        props: ['subject'],
        methods: {
            attends() {
                this.subject.attend = !this.subject.attend;
                this.$emit('sendData', this.subject)
            }
        }

    }
</script>