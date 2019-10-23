<template>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <Section :framework="subject" @selectedFramework="selectedFramework"/>
            </div>
        </div>

        <div class="row" v-if="this.subject">
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
                    professor_subject: {
                        framework_id: null
                    }
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
                this.subject = subject.data;

                if (this.subject.professor_subject.framework_id) {
                    this.selected = true;
                } else {
                    this.selectedFramework();
                }
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
                    cancelButtonColor: '#ef7273',
                    background: '#fff url(/img/iot2.gif) no-repeat',
                    customClass: 'swal-height'
                }).then(function (confirm) {
                    if (confirm.dismiss) {
                        self.subject.framework = 'thingspeak';
                    } else {
                        self.subject.framework = 'ubidots';
                    }

                    self.selected = true;
                    self.setFramework();
                });
            },
            submitForm() {

                let self = this;

                axios.post(`subject/framework/{}`)
                    .then(response => {
                        this.$emit('subject', response)
                    });

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
