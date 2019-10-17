<template>
    <div>
        <div class="ibox">
            <div class="ibox-title">
                <h5>
                    Horario de clase
                    <span class="pull-right">
                        <div class="switch">
                            <strong></strong>
                            <div class="onoffswitch">
                                <input type="checkbox" :checked="subject.time" class="onoffswitch-checkbox" id="time-switch"
                                        :value="subject.time" name="time" @change="times">
                                    <label class="onoffswitch-label" for="time-switch" >
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
        props: {
          subject: Object
        },
        methods: {
            times(){
                this.subject.time = !this.subject.time;
                this.$emit('sendData', this.subject)
            }
        }

    }
</script>