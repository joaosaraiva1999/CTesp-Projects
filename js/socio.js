$(document).ready(function() {
    $('#form_socio').on('submit', function(event) {
        event.preventDefault(); // Prevents page refresh

        let isValid = true;
        let nome = $('#nome').val().trim();
        let telefone = $('#telefone').val().trim();
        let email = $('#email').val().trim();
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        $('.invalid-feedback').text('');
        $('.form-control').removeClass('is-invalid');

        if (nome.length < 3 || nome.length > 70) {
            $('#nome').addClass('is-invalid');
            $('#nome').next('.invalid-feedback').text('O nome não é válido');
            isValid = false;
        }

        if (!emailRegex.test(email)) {
            $('#email').addClass('is-invalid');
            $('#email').next('.invalid-feedback').text('O Email não é válido');
            isValid = false;
        }

        if (telefone.length != 9 || isNaN(telefone)) {
            $('#telefone').addClass('is-invalid');
            $('#telefone').next('.invalid-feedback').text('O seu Número de Telemóvel não é válido');
            isValid = false;
        }

        if (isValid) {
            $.ajax({
                type: 'POST',
                url: 'socio.php',
                data: $('#form_socio').serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('#form_socio')[0].reset();
                        $('#modalsocio').modal('show'); // Correct way to show the modal
                    } else if (response.status === 'error') {
                        if (response.errors) {
                            response.errors.forEach(function(error) {
                                alert(error);
                            });
                        }
                    }
                },
            });
        }
    });
});