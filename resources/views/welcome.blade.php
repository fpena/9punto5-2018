@extends('layouts.master')

@section('content')
    <v-content>
        <intro inline-template>
            <div style="overflow: auto; max-height: 100%; height: 100%">
                <v-jumbotron
                        src="{{ asset('img/background.jpg') }}"
                        :gradient="gradient"
                        dark
                        height="100%"
                        style="overflow: auto; max-height: 100%"
                >
                    <v-container fill-height>
                        <v-layout align-center>
                            <v-flex text-xs-center>
                                <img width="150" src="{{ asset('img/logo.png') }}" class="mb-3" alt="9punto5">
                                <h3 class="display-3 mb-3">9PUNTO5</h3>
                                <h4 class="headline mb-3" style="">Expande tus habilidades digitales</h4>
                                <h4 class="subheading mb-4">7 - 8 de Septiembre 2018 - Hotel Villa del R&iacute;o, Valdivia - Chile</h4>

                                <v-flex lg6 xs12 offset-lg3 mb-4>
                                    <v-alert type="info" :value="true">
                                        Adquiere tus tickets de forma temprana,
                                        <a target="_blank" class="white--text" href="https://welcu.com/9punto5/9punto5-2018-expande-tus-habilidades-digitales">aquí</a>.
                                    </v-alert>
                                </v-flex>

                                <v-flex lg6 xs12 offset-lg3 mb-4>
                                    <v-alert type="success" :value="true">
                                        Postula con tu charla o "lightning talk". Más información
                                        <a target="_blank" class="white--text" href="{{ route('home.submit') }}">aquí</a>.
                                    </v-alert>
                                </v-flex>

                            <!--v-flex lg6 xs12 offset-lg3 mb-5>
                                                <v-card dark class="px-4 py-4" color="grey darken-3">
                                                    <h3 class="subtitle mb-2">Entérate de las últimas novedades y venta de entradas</h3>

                                                    <ul class="auth-error-list mb-2">
                                                        @foreach($errors->all() as $error)
                                <li clasS="red--text">{{ $error }}</li>
                                                        @endforeach
                                    </ul>

@isset($success)
                                <v-alert type="success" :value="true">
                                    Gracias por suscribirte. Recibirás un correo con mayor información.
                                </v-alert>
@endisset

                                    <v-form id="register-form" method="POST" action="{{ route('home.register') }}" v-model="valid">
                                                        @csrf
                                    <v-text-field
                                        name="email"
                                        id="email"
                                        v-model="email"
                                        label="Email"
                                        color="light-blue darken-2"
                                        :error-messages="emailErrors"
                                        @input="$v.email.$touch()"
                                        @blur="$v.email.$touch()"
                                        required
                                    ></v-text-field>
                                    <v-btn
                                        @click="submit"
                                        color="light-blue darken-2"
                                        :disabled="!valid"
                                    >
                                        Enviar
                                    </v-btn>
                                </v-form>
                            </v-card>
                        </v-flex-->

                                <p class="subtitle">
                                    <a target="_blank" class="white--text" href="http://2016.9punto5.cl">Versión 2016</a> <span class="mx-3">|</span>
                                    <a target="_blank" class="white--text" href="http://2017.9punto5.cl">Versión 2017</a>
                                </p>

                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-jumbotron>
            </div>
        </intro>
    </v-content>
    @stop