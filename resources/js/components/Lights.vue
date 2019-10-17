<template>
    <div class="ibox">
        <div class="ibox-title">
            <h5>Luces</h5>
        </div>
        <div class="ibox-content ">
            <div class="row">
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 1</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led1" class="onoffswitch-checkbox"
                                   name="subject.led1" id="subject.led1" v-model="subject.led1"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led1">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 2</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led2" class="onoffswitch-checkbox"
                                   name="subject.led2" id="subject.led2" v-model="subject.led2"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 3</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led3" class="onoffswitch-checkbox"
                                   name="subject.led3" id="subject.led3" v-model="subject.led3"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led3">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 4</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led4" class="onoffswitch-checkbox"
                                   name="subject.led4" id="subject.led4" v-model="subject.led4"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led4">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 5</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led5" class="onoffswitch-checkbox"
                                   name="subject.led5" id="subject.led5" v-model="subject.led5"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 6</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led6" class="onoffswitch-checkbox"
                                   name="subject.led6" id="subject.led6" v-model="subject.led6"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led6">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 7</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led7" class="onoffswitch-checkbox"
                                   name="subject.led7" id="subject.led7" v-model="subject.led7"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led7">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 8</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led8" class="onoffswitch-checkbox"
                                   name="subject.led8" id="subject.led8" v-model="subject.led8"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led8">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="switch">
                        <strong>Led 9</strong>
                        <div class="onoffswitch">
                            <input type="checkbox" :checked="subject.led9" class="onoffswitch-checkbox"
                                   name="subject.led9" id="subject.led9" v-model="subject.led9"
                                   @change="sendData">
                            <label class="onoffswitch-label" for="subject.led9">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    export default {
        name: 'Lights',
        props: {
            subject: Object
        },
        methods: {
            sendData() {
                this.$emit('sendData', this.subject)
            },

        }
    }
</script>

<style scoped>
    .d-flex {
        justify-content: center;
    }
</style>
