<template>

    <div>
        <div class="row">
            <div class="col-lg-12">
                <Section :framework="subject.framework" @selectedFramework="selectedFramework"/>
            </div>
        </div>
        <div class="row" v-if="this.subject.framework">
            <div class="col-lg-5">
                <form @submit="selectedFramework" v-if="selected" method="POST">
                    <input type="hidden" name="_token" id="csrf-token" :value="csrf"/>
                    <div class="row">
                        <div class="col-lg-6">
                            <Assistance :subject="subject" @sendData="sendData"/>
                        </div>
                        <div class="col-lg-6">
                            <Time :subject="subject" @sendData="sendData"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <Air :subject="subject" @sendData="sendData"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <Lights :subject="subject" @sendData="sendData"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7">
                <Map :subject="subject"/>
            </div>
        </div>

        <Timeline @subject="setSubject"/>
    </div>

</template>

<script>
    import Section from './Section';
    import Timeline from './Timeline';
    import Map from './Map';
    import Assistance from './Assistance';
    import Air from './Air';
    import Lights from './Lights';
    import Time from './Time';

    export default {
        name: 'App',
        components: {
            Section,
            Timeline,
            Map,
            Assistance,
            Air,
            Lights,
            Time
        },
        data() {
            return {
                subject: {
                    attend: false,
                    air: false,
                    selected: false,
                    framework: null,
                    time: false,
                    led1: false,
                    led2: false,
                    led3: false,
                    led4: false,
                    led5: false,
                    led6: false,
                    led7: false,
                    led8: false,
                    led9: false,
                    temperature: 0
                },
                selected: false,
                csrf: document.head.querySelector('meta[name="csrf-token"]').content
            }
        },
        methods: {
            sendData(data) {
                this.subject = data
                this.submitForm();
            },
            setSubject(subject) {
                this.subject = subject;

                if (this.subject.framework) {
                    this.selected = true;
                } else {
                    this.selectedFramework();
                }
            },
            submitForm() {

                let self = this;

                fetch(
                    `/iot/setup`, {
                        method: 'POST',
                        body: JSON.stringify(self.subject),
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': self.csrf
                        }
                    }).then(res => res.json())
                    .catch(error => {
                        console.log('Error: ' + error)
                    })
                    .then(response => {
                        $('#timeline').modal('hide')

                        this.$emit('subject', response)
                    });
            },
            selectedFramework() {

                let self = this;

                Swal.fire({
                    title: '<strong>SELECCIONAR FRAMEWORK</strong>',
                    animation: false,
                    customClass: {
                        popup: 'animated tada'
                    },
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText:
                        'UBIDOTS',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText:
                        'THINGSPEAK',
                    cancelButtonAriaLabel: 'Thumbs down',
                    background: '#fff url(/img/iot2.gif) no-repeat',
                    customClass: 'swal-height'
                }).then(function (confirm) {
                    if (confirm.dismiss) {
                        self.subject.framework = 'thingspeak';
                    } else {
                        self.subject.framework = 'ubidots';
                    }

                    self.selected = true;
                    self.submitForm();
                });
            }
        }

    }
</script>

<style scoped>
    .swal2-popup {
        height: 367px;
    }

    .swal-height {
        background: 700px;
    }

    .swal2-header {
        position: absolute;
        left: 55px;
        top: 30px;
    }

    .swal2-actions {
        display: flex;
        position: absolute;
        bottom: 20px;
        left: 0px;
    }

    .swal2-cancel {
        background: #29bb9e !important;
    }

    .swal2-confirm {
        background: #ff7373 !important;
    }
</style>
