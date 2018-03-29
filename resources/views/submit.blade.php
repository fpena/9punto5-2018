@extends('layouts.master')

@section('content')
    <v-toolbar class="white--text" color="purple darken-4">
        <v-toolbar-title>9punto5</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn class="white--text" href="{{ url('') }}" flat>Inicio</v-btn>
        </v-toolbar-items>
    </v-toolbar>

    <v-container grid-list-md text-xs-center>
        <v-layout row wrap>
            <v-flex xs12 class="px-3 text-lg-center text-md-center text-sm-center pt-3">
                <h1 class="display-1 mb-3">¿Quieres contarnos tu historia?</h1>
                <h2 class="subheading mb-2">Estamos buscando speakers que se tomen el escenario de 9punto5 para compartir su historia - y nos encantaría que fueras tu. </h2>
                <h4 class="body-2 mb-3">La versión 2018 de 9punto5 será el 7 y 8 de Septiembre en Hotel Villa del Río en Valdivia, Chile.</h4>
                <v-btn target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQTWR1liwR7jZ7HAGXwKIobBw2Hvrxjk0uAAegAlgPiskppg/viewform" class="mb-4" small color="primary">Postula a una charla</v-btn>
            </v-flex>
        </v-layout>

        <v-divider></v-divider>

        <v-layout row wrap pt-4 text-xs-left mb-3>
            <v-flex xs12 text-xs-center mb-5>
                <h1 class="display-1 mb-3">¿Que debes saber?</h1>
            </v-flex>
            <v-flex xs12 sm5>
                <h3 class="headline mb-3">Temas</h3>
                <p>Este año, queremos enfocarnos en experiencias de equipos con culturas de trabajo incipientes e innovadoras. Nos interesa exponer casos donde se hayan implementado políticas de trabajo relacionadas a la felicidad y productividad del empleado. También, como el desarrollo de un producto o servicio se ha visto impactado positivamente por la cultura de trabajo de tu empresa. Por último, experiencias de trabajo remoto en ámbitos no digitales (leyes, medicina, aviación, construcción, etc.).</p>
                <p>Nos interesan personas críticas, disruptivas y/o conscientes respecto a las actuales culturas de trabajo en Chile y Latinoamérica. Que puedan exponer alternativas, casos de éxito y fallo en su experiencia laboral. Y que demuestren pasión y compromiso con el tema que están hablando.</p>
            </v-flex>
            <v-flex xs12 sm5 offset-sm2>
                <h3 class="headline mb-3">Audiencia</h3>
                <p>Los asistentes de 9punto5 están buscando mejorar sus habilidades blandas para adaptarse a nuevas culturas laborales y economías de trabajo a escala. La audiencia varía desde startups que desean confirmar sus culturas flexibles, hasta empresas de mediano y gran tamaño, que buscan innovar y complementar sus actuales prácticas laborales en sus empleados. Para el número de asistentes, espera algo cercano a 450 personas.</p>
                <h3 class="headline mb-3">Estructura</h3>
                <p>Estamos buscando postulaciones de dos tipos. Primero, una charla de 20 minutos (presentación más preguntas). Este es el formato más estándar. Por otro lado, habrá un bloque de "lightning talks". Cada una de estas duran 5 minutos.</p>
            </v-flex>
        </v-layout>

        <v-divider></v-divider>

        <v-layout row wrap pt-4 text-xs-left mb-3>
            <v-flex xs12 text-xs-center mb-5>
                <h1 class="display-1 mb-3">Consideraciones</h1>
            </v-flex>
            <v-flex xs12 sm5>
                <ul>
                   <li class="mb-2">Si eres seleccionado para la charla, obtendrás un ticket gratuito de acceso a los dos días del evento. Si eres seleccionado para una "lightning talk", deberás adquirir un ticket.</li>
                   <li class="mb-2">El equipo de 9punto5 será el responsable de elegir las charlas participantes. </li>
                   <li class="mb-2">Para las "lightning talks", habrá un sistema de votación abierto comenzando en el mes de Junio 2018. Para obtener más votaciones, no te olvides de incluir un video ;)</li>
                </ul>
            </v-flex>

            <v-flex xs12 sm5 offset-sm2>
                <ul>
                    <li class="mb-2">Puedes realizar múltiples postulaciones para distintos tipos de charlas.</li>
                    <li class="mb-2">La fecha límite para las postulaciones es el día 25 de Mayo de 2018. Publicaremos resultados el 14 de Junio de 2018.</li>
                    <li class="mb-2">No postules el último día. Date unos días para trabajar en la postulación. Te ayudaremos si tu postulación tiene problemas, pero esto es solo posible si nos envías la propuesta con días de anticipación.</li>
                </ul>
            </v-flex>

        </v-layout>

    </v-container>

    <v-divider></v-divider>

    <v-flex xs12 class="px-3 text-lg-center text-md-center text-sm-center pt-5 mb-5">
        <h1 class="display-1 mb-3">Ahora que sabes todo...</h1>
        <v-btn target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQTWR1liwR7jZ7HAGXwKIobBw2Hvrxjk0uAAegAlgPiskppg/viewform" small color="primary">Postula a una charla</v-btn>
    </v-flex>

    <v-footer xs12 height="auto" style="width: 100%">
        <v-card
            flat
            tile
            class="purple darken-4 white--text text-xs-center"
            style="width: 100%"
        >
        <v-card-text class="white--text pt-4">
            Para más información o alguna pregunta respecto a esta información, contáctanos a <a class="white--text" href="mailto:hola@9punto5.cl">hola@9punto5.cl.</a>
        </v-card-text>
        <v-card-text class="white--text">
            &copy;2018 — <strong>9punto5</strong>
        </v-card-text>
        </v-card>
    </v-footer>
@stop