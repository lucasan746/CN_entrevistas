/*
 *  Document   : formsWizard.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Wizard page
 */

var FormsWizard = function() {

    return {
        init: function() {
            /*
             *  Jquery Wizard, Check out more examples and documentation at http://www.thecodemine.org
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */
            var acomp_dni = jQuery("#acomp_dni_prospecto").on("change");
            var es_cliente = jQuery("#es_cliente_prospecto").on("change");
            

            /* Initialize Progress Wizard */
            $('#progress-wizard').formwizard({focusFirstInput: true, disableUIStyles: true, inDuration: 0, outDuration: 0});

            // Get the progress bar and change its width when a step is shown
            var progressBar = $('#progress-bar-wizard');
            progressBar
                .css('width', '33%')
                .attr('aria-valuenow', '33');

            $("#progress-wizard").bind('step_shown', function(event, data){
		if (data.currentStep === 'progress-first') {
                    progressBar
                        .css('width', '33%')
                        .attr('aria-valuenow', '33')
                        .removeClass('progress-bar-warning progress-bar-success')
                        .addClass('progress-bar-danger');
                }
                else if (data.currentStep === 'progress-second') {
                    progressBar
                        .css('width', '66%')
                        .attr('aria-valuenow', '66')
                        .removeClass('progress-bar-danger progress-bar-success')
                        .addClass('progress-bar-warning');
                }
                else if (data.currentStep === 'progress-third') {
                    progressBar
                        .css('width', '100%')
                        .attr('aria-valuenow', '100')
                        .removeClass('progress-bar-danger progress-bar-warning')
                        .addClass('progress-bar-success');
                }
            });

            /* Initialize Basic Wizard */
            $('#basic-wizard').formwizard({disableUIStyles: true, inDuration: 0, outDuration: 0});

            /* Initialize Advanced Wizard with Validation */
            $('#advanced-wizard').formwizard({
                disableUIStyles: true,
                validationEnabled: true,
                validationOptions: {
                    errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                    errorElement: 'span',
                    errorPlacement: function(error, e) {
                        e.parents('.form-group > div').append(error);
                    },
                    highlight: function(e) {
                        $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                        $(e).closest('.help-block').remove();
                    },
                    success: function(e) {
                        // You can use the following if you would like to highlight with green color the input after successful validation!
                        e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                        e.closest('.help-block').remove();
                    },
                    rules: {
                       dni_prospecto: {
                            required: true,
                            minlength: 6
                        },
                        nombre_prospecto: {
                            required: true,
                            minlength: 5 
                        },
                        val_profesion_prospecto: {
                            required: true,
                            minlength: 12
                        },
                        val_email: {
                            required: true,
                            email: true
                        },
                        val_terms: {
                            required: true
                        }
                    },
                    messages: {
                        dni_prospecto: {
                            required: 'Please enter a username',
                            minlength: 'Your username must consist of at least 2 characters'
                        },
                        nombre_prospecto: {
                            required: 'Please provide a password',
                            minlength: 'Your password must be at least 5 characters long'
                        },
                        val_profesion_prospecto: {
                            required: 'Please provide a password',
                            minlength: 'Your password must be at least 5 characters long',
                            equalTo: 'Please enter the same password as above'
                        },
                        val_email: 'Please enter a valid email address',
                        val_terms: 'Please accept the terms to continue'
                    }
                },
                inDuration: 0,
                outDuration: 0
            });

            /* Initialize Clickable Wizard */
            var clickableWizard = $('#clickable-wizard');

            clickableWizard.formwizard({
                disableUIStyles: false, 
                validationEnabled: true, 
                validationOptions: {
                    errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                    errorElement: 'span',
                    errorPlacement: function(error, e) {
                        e.parents('.form-group > div').append(error);
                    },
                    highlight: function(e) {
                        $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                        $(e).closest('.help-block').remove();
                    },
                    success: function(e) {
                        // You can use the following if you would like to highlight with green color the input after successful validation!
                        e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                        e.closest('.help-block').remove();
                    },
                    rules: {
                       dni_prospecto: {
                            required: true,
                            minlength: 8,
                        },
                        nombre_prospecto: {
                            required: true,
                        },
                        apellido_prospecto: {
                            required: true,
                        },
                        nacimiento_prospecto: {
                            required: true,
                            date: true,
                        },
                        profesion_prospecto: {
                            required: true,
                        },
                        edad_prospecto: {
                            required: true
                        },
                        celular_prospecto: {
                            required: true
                        },
                        telefono_prospecto: {
                            required: true
                        },
                        email_prospecto: {
                            required: true,
                            email: true
                        },
                        celalternativo: {
                            required: false
                        },
                        telalternativo: {
                            required: false
                        },
                        mailalternativo: {
                            required: false,
                            email: true
                        },
                        direccion_prospecto: {
                            required: true,
                        },
                        localidad_prospecto: {
                            required: true,
                        },
                        codigopostal_prospecto: {
                            required: true,
                        },
                        pais_prospecto: {
                            required: true,
                        },
                        provincia_prospecto: {
                            required: true,
                        },
                        acomp_dni_prospecto: {
                            required: false,
                        },
                        acomp_nombre_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_apellido_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_nacimiento_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                            date: true,
                        },
                        acomp_profesion_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_edad_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_celular_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_telefono_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_email_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                            email: true
                        },
                        acomp_celalternativo: {
                            required: false
                        },
                        acomp_telalternativo: {
                            required: false
                        },
                        acomp_mailalternativo: {
                            required: false,
                            email: true
                        },
                        acomp_direccion_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_localidad_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_codigopostal_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_pais_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        acomp_provincia_prospecto: {
                            required: function(){
                                return parseInt(acomp_dni.val()) >= 10000000;
                            },
                        },
                        es_cliente_prospecto: {
                            required: true
                        },
                        nro_cliente_prospecto: {
                            required: function(){
                                return es_cliente.val() == "si";
                            }
                        },
                        referente_prospecto:{
                            required: true
                        },
                        fecha_prospecto: {
                            required: true,
                            date: true,
                        },
                        procedencia_prospecto: {
                            required: true
                        },
                        opc_prospecto: {
                            required: true
                        },
                        liner_prospecto: {
                            required: true
                        }
                    },
                    messages: {
                        dni_prospecto: {
                            required: 'Este campo es requerido',
                            minlength: 'Ingrese un DNI valido',
                            digits: 'Solo se deben ingresar numeros'
                        },
                        nombre_prospecto: {
                            required: 'Este campo es requerido',
                        },
                        apellido_prospecto:{
                            required: "Este campo es requerido"
                        },
                        nacimiento_prospecto: {
                            required: "Este campo es requerido",
                            date: "formato incorrecto"
                        },
                        profesion_prospecto: {
                            required: "Este campo es requerido"
                        },
                        edad_prospecto: {
                            required: "Este campo es requerido"
                        },
                        celular_prospecto: {
                            required: "Este campo es requerido"
                        },
                        telefono_prospecto: {
                         required: "Este campo es requerido"
                        },
                        email_prospecto: {
                            required: "Este campo es requerido",
                            email: "Ingrese un mail valido"
                        },
                        mailalternativo: {
                            email: "Ingrese un mail valido"
                        },
                        direccion_prospecto: {
                            required: "Este campo es requerido"
                        },
                        localidad_prospecto: {
                            required: "Este campo es requerido"
                        },
                        codigopostal_prospecto: {
                            required: "Este campo es requerido"
                        },
                        pais_prospecto: {
                            required: "Este campo es requerido"
                        },
                        provincia_prospecto: {
                             required: "Este campo es requerido"
                        },
                        acomp_nombre_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_apellido_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_nacimiento_prospecto: {
                            required: "Este campo es requerido",
                            date: "formato incorrecto",
                        },
                        acomp_profesion_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_edad_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_celular_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_telefono_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_email_prospecto: {
                            required: "Este campo es requerido",
                            email: "Ingrese un mail valido"
                        },
                        acomp_celalternativo: {
                            required: "Este campo es requerido"
                        },
                        acomp_telalternativo: {
                            required: "Este campo es requerido"
                        },
                        acomp_mailalternativo: {
                            required: "Este campo es requerido",
                            email: "Ingrese un mail valido"
                        },
                        acomp_direccion_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_localidad_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_codigopostal_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_pais_prospecto: {
                            required: "Este campo es requerido"
                        },
                        acomp_provincia_prospecto: {
                            required: "Este campo es requerido"
                        },
                        es_cliente_prospecto: {
                             required: "Este campo es requerido"
                        },
                        nro_cliente_prospecto: {
                            required: "Este campo es requerido"
                        },
                        referente_prospecto:{
                             required: "Este campo es requerido"
                        },
                        fecha_prospecto: {
                            required: "Este campo es requerido",
                            date: "Formato incorrecto" 
                        },
                        procedencia_prospecto: {
                             required: "Este campo es requerido"
                        },
                        opc_prospecto: {
                             required: "Este campo es requerido"
                        },
                        liner_prospecto: {
                             required: "Este campo es requerido"
                        }
                        
                    }
                },
                inDuration: 0,
                outDuration: 0
            });

            $('.clickable-steps a').on('click', function(){
                var gotostep = $(this).data('gotostep');

                clickableWizard.formwizard('show', gotostep);
            });
        }
    };
}();