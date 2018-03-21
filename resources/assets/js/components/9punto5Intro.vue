<script>
    import { Vue } from 'vue'
    import { validationMixin } from 'vuelidate'
    import { required, email } from 'vuelidate/lib/validators'

    export default {
        mixins: [validationMixin],

        validations: {
            email: { required, email }
        },

        data: () => ({
            valid: false,
            email: '',
            gradient: 'to top right, rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)'
        }),

        computed: {
            emailErrors () {
                const errors = []
                if (!this.$v.email.$dirty) return errors
                !this.$v.email.email && errors.push('Debe ser un email válido.')
                !this.$v.email.required && errors.push('El email es necesario.')
                return errors
            }
        },

        methods: {
            submit () {
                this.$v.$touch()
                if (!this.$v.$invalid) {
                    document.getElementById('register-form').submit();
                }
            }
        }
    };
</script>