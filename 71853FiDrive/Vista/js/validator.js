$(document).ready(function() {
    $('.amarchivo').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'El nombre de archivo no es valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre de archivo es obligatorio y no puede estar vacio'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El nombre debe tener mas de 6 y menos de 30 caracteres de largo'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
            desc: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
});