<template>
    <div>
        <div id="mapid" style="height: 527px;"></div>
    </div>
</template>

<script>

    export default {

        props: {
            subject: Object
        },
        data() {
            return {
                geo: null,
                ubidots: {
                    url: 'http://things.ubidots.com/api/v1.6/variables/',
                    token: '/values?token=A1E-XIo9hD4gmG52SIs4wShkXzPctWlO0d',
                    devices: {
                        led1: {
                            key: '5c83ca8d591636175266a032',
                            val: this.subject.led1
                        },
                        led2: {
                            key: '5c83ca8d591636175266a033',
                            val: this.subject.led2
                        },
                        led3: {
                            key: '5c83c6f0591636793a80998d',
                            val: this.subject.led3
                        },
                        led4: {
                            key: '5c83ca8e5916362f086bbee3',
                            val: this.subject.led4
                        },
                        led5: {
                            key: '5c83ca8e5916362f086bbee2',
                            val: this.subject.led5
                        },
                        led6: {
                            key: '5c83ca8e5916362f086bbee4',
                            val: this.subject.led6
                        },
                        led7: {
                            key: '5cc468ebc03f97447d48f66a',
                            val: this.subject.led7
                        },
                        led8: {
                            key: '5cc4695cc03f97451cb039d0',
                            val: this.subject.led8
                        },
                        led9: {
                            key: '5cc46975c03f97451cb039d4',
                            val: this.subject.led9
                        },
                        aire: {
                            key: '5c83ca8f591636175f67d4ca',
                            val: this.subject.temperature
                        }
                    }


                },
                thingspeak: {
                    firstRow: {
                        url: 'https://api.thingspeak.com/update?api_key=HJGFRSTPINPKPDS4',
                        data: {
                            field1: this.subject.led1,
                            field2: this.subject.led2,
                            field3: this.subject.led3,
                        }

                    },
                    secondRow: {
                        url: 'https://api.thingspeak.com/update?api_key=3C38II6RU9DO4DY1',
                        data:{
                            field1: this.subject.led4,
                            field2: this.subject.led5,
                            field3: this.subject.led6,
                        },
                    },
                    thirdRow: {
                        url:'https://api.thingspeak.com/update?api_key=RRECY6ZG2RT8TABI',
                        data: {
                            field1: this.subject.led7,
                            field2: this.subject.led8,
                            field3: this.subject.led9,
                        }
                    },
                    aire: {
                        url:'https://api.thingspeak.com/update?api_key=AZY58IAG5Z24IHG1',
                        data:{
                            temperature: this.subject.temperature
                        }
                    }
                }
            }
        },
        mounted() {
            let self = this;

            var mymap = L.map('mapid').setView([-27.369769, -55.939821], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mymap);

            var polygon = L.polygon([
                [-27.369464, -55.940272],
                [-27.369521, -55.939424],
                [-27.370535, -55.939493],
                [-27.370425, -55.940437]
            ]).addTo(mymap);

            var profesor = L.marker([-27.370417, -55.932751], {draggable: true}).addTo(mymap).on('dragend', () => {

                const coords = profesor.getLatLng();
                let inside = polygon.getBounds().contains(coords);
                let dioClases = 0;

                if (this.subject.attend) { // ASISTENCIA DEL PROFESOR
                    if (inside) { // SE ENCUENTRA EN EL RANGO DEFINIDO DEL MAPA
                        if (this.subject.time) { //COMENZO EL HORARIO DE CLASE

                            if (this.subject.framework == 'ubidots') {
                                self.sendUbidots();
                            } else {
                                self.sendThingspeak();
                            }

                        } else {
                            Swal.fire({
                                title: 'El profesor se encuentra en la facultad',
                                text: 'El horario no corresponde al de la clase',
                                type: 'warning',
                            });

                        }
                    } else { // SE ENCUENTRA FUERA DEL RANGO DEL MAPA
                        if (this.subject.time) { // COMENZO EL HORARIO DE CLASE
                            Swal.fire({
                                title: 'Esperando presencia del profesor',
                                text: 'El horario de la clase comenzó',
                                type: 'warning',
                            });
                        }
                    }
                } else { // NO ASISTE A CLASES
                    Swal.fire({
                        title: 'El profesor no asiste a clases',
                        type: 'warning',
                    });
                }
            });
        },
        methods: {
            sendUbidots() {
                let self = this;

                Object.entries(self.ubidots.devices).forEach( (key, val) => {

                    fetch(`${self.ubidots.url}${key[1]['key']}${self.ubidots.token}`, {
                        method: 'POST',
                        body: JSON.stringify({value: key[1]['val']}),
                        headers: {'Content-Type': 'application/json'}
                    }).then(res => res.json());
                });

            },
            sendThingspeak() {
                let self = this;

                Object.entries(self.thingspeak).forEach(val => {

                    fetch(val[1].url, {
                        method: 'POST',
                        body: JSON.stringify(val[1].data),
                        headers: {'Content-Type': 'application/json'}
                    }).then(res => res.json());
                });

            }
        }
    }
</script>
