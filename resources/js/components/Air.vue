<template>
    <div class="ibox">
        <div class="ibox-title">
            <h5>
                Aire
                <span class="pull-right">
                <div class="switch">
                    <strong></strong>
                    <div class="onoffswitch">
                        <input type="checkbox" class="onoffswitch-checkbox" id="air-switch"
                               :checked="this.subject.air" :value="this.subject.air" @change="is"
                               name="aire">
                        <label class="onoffswitch-label" for="air-switch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </span>
            </h5>
        </div>

        <div class="ibox-content text-center" style="height: 155px;">
            <div class="temperatura-container">
                <input type="hidden" :value="subject.temperature" name="temperature" id="temperature">
                <knob-control :min="20" :max="28" v-model="temperature" primary-color="#1ab394"
                              secondary-color="#2f4050" :disabled=!this.subject.air text-color="#2f4050">
                </knob-control>
            </div>
        </div>
    </div>
</template>


<script>
    import KnobControl from 'vue-knob-control'

    export default {
        name: 'Air',
        components: {
            KnobControl: KnobControl
        },
        props: {
            subject: Object
        },
        data() {
            return {
                temperature: this.subject.temperature
            }
        },
        mounted() {
            $("#temp").knob();
        },
        watch: {
            temperature() {
                this.subject.temperature = this.temperature;
                this.$emit('sendData', this.subject)
            }
        },
        methods: {
            is() {
                this.subject.air = !this.subject.air;
                this.$emit('sendData', this.subject)
            }
        },
    }
</script>
