$(document).ready(function() {
       $('form').submit(function(event) {
              $('.form-group').removeClass('has-error');
              $('.help-block').remove();
              var formData = {
                     'name'                 : $('input[name=name]').val(),
                     'email'                 : $('input[name=email]').val(),
                     'number'              : $('input[name=number]').val(),
                     'photographer'     : $('select[name=photographer]').val(),
                     'date'                    : $('input[name=date]').val()
              };
              $.ajax({
                     type                    : 'POST',
                     url                      : 'form.php',
                     data                    : formData,
                     dataType            : 'json',
                     encode               : true
              })
              .done(function(data) {
                     console.log(data);
                     if ( ! data.success) {
                            var alert     = '<div class="help-block">';
                            if (data.errors.name) {
                                   $('#name-group').addClass('has-error');
                                   $('#name-group').append(alert + data.errors.name + '</div>');
                            }
                            if (data.errors.email) {
                                   $('#email-group').addClass('has-error');
                                   $('#email-group').append(alert + data.errors.email + '</div>');
                            }
                            if (data.errors.number) {
                                   $('#number-group').addClass('has-error');
                                   $('#number-group').append(alert + data.errors.number + '</div>');
                            }
                            if (data.errors.photographer) {
                                   $('#photographer-group').addClass('has-error');
                                   $('#photographer-group').append(alert + data.errors.photographer + '</div>');
                            }
                            if (data.errors.date) {
                                   $('#date-group').addClass('has-error');
                                   $('#date-group').append(alert + data.errors.date + '</div>');
                            }
                     } else {
                            $('form').append('<div class="alert alert-success">' + data.message + '</div>');
                            alert('success');
                     }
              });
              event.preventDefault();
       });
       $('input[name="date"]').on('changeDate',function(){
              $('#date-group').removeClass('has-error');
              $('#date-group').find('.help-block').remove();
               var value = $(this).val();
               $.ajax({
                     type                    : 'GET',
                     url                      : 'date.php',
                     data                    : {'date' : value},
                     dataType            : 'json',
                     encode               : true
              })
              .done(function(data){
                     console.log(data);
                     if ( ! data.success) {
                            $('#date-group').addClass('has-error');
                            $('#date-group').append('<div class="help-block">' + data.error + '</div>');
                     }
              })
       })
});