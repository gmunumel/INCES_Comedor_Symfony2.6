$(document).ready(function()
{
    $.validator.addMethod(
        "isEqual",
        function(value, element) {
            var pass1 = $('#fos_user_registration_form_plainPassword_first').val();
            var pass2 = $('#fos_user_registration_form_plainPassword_second').val();
            if(pass1 == "" || pass2 == "")
                return false;
            if(pass1 == pass2) return true;
            else return false;
        },
        "Please input an email"
    );
    $.validator.addMethod(
        "validateEmail",
        function(value, element) {
            if(value == '') return true;
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\ ".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA -Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(value);
        },
         "Please input an email"
    );
    $.validator.addMethod(
        "validateEmailNoNull",
        function(value, element) {
            if(value == '') return false;
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\ ".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA -Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(value);
        },
        "Please input an email"
    );
    $.validator.addMethod(
        "isANumber",
        function(value, element) {
            return (value - 0) == value && value.length > 0;
        },
        "Please input a valid number"
    );
    $.validator.addMethod(
        "venezuelanDate",
        function(value, element) {
            return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
        },
        "Please the dates format is dd/mm/yyyy"
    );
    $.validator.addMethod(
        "userImageExtension",
        function(value, element) {
            if(value == '') return true;
            var val = value.split('.').pop();
            if(val != "jpg" && val != "gif" && val != "png")
                return false
            return true;
        },
        "Please the file format must be jpg|gif|png"
    );
    $.validator.addMethod(
        "cmFileExtension",
        function(value, element) {
            if(value == '') return false;
            var val = value.split('.').pop();
            //alert(val);
            if(val != "csv") return false; else return true;
        },
        "Please the file format must be .csv"
    );
    $.validator.addMethod(
        "dateRange",
        function(value, element) {
            var from = $('#inces_comedorbundle_contabilidadtype_from').val();
            var to   = $('#inces_comedorbundle_contabilidadtype_to').val();
            if((from == "" && to != "") || (from != "" && to == ""))
                return false;
            return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
        },
        "Please the dates format is dd/mm/yyyy"
    );
    $.validator.addMethod(
        "atLeastOneRadioButton",
        function(value, element) {
          return ($('input[type=radio]:checked').size() > 0);
        },
        "Please select at least one Menu"
    );
    $.validator.addMethod(
      "uniqueUserName",
      function(value, element) {
        var isSuccess = false;
        if(value.length > 0){
          $.ajax({
            type: "POST",
            async: false,
            url: "/usuario/searchua",
            data: {
              query: value
            },
            dataType: "json",
            success: function(response) {
              isSuccess = response === true ? true: false;
            }
          });
          return isSuccess;
        }
      },
      "That username is already taken"
    );

    /* --------- Inicio de las validaciones ------- */
    $('.facturar_form').validate({
        rules: {
            'menus'     : { atLeastOneRadioButton : true }
        },
        messages: {
            'menus'     : { atLeastOneRadioButton : 'Please select one Menu' }
        },
        errorLabelContainer: '#errors'
    });

    $('.menu_form').validate({
        rules: {
            'inces_comedorbundle_menutype[seco]'     : { required         : true },
            'inces_comedorbundle_menutype[sopa]'     : { required         : true },
            'inces_comedorbundle_menutype[salado]'   : { required         : true },
            'inces_comedorbundle_menutype[jugo]'     : { required         : true },
            'inces_comedorbundle_menutype[ensalada]' : { required         : true },
            'inces_comedorbundle_menutype[postre]'   : { required         : true },
            'inces_comedorbundle_menutype[dia]'      : { venezuelanDate   : true }
        },
        messages: {
            'inces_comedorbundle_menutype[seco]'     : { required         : 'Fill the field \'First Plate\'' },
            'inces_comedorbundle_menutype[sopa]'     : { required         : 'Fill the field \'Soup\'' },
            'inces_comedorbundle_menutype[salado]'   : { required         : 'Fill the field \'Second Plate\'' },
            'inces_comedorbundle_menutype[jugo]'     : { required         : 'Fill the field \'Juice\'' },
            'inces_comedorbundle_menutype[ensalada]' : { required         : 'Fill the field \'Salad\'' },
            'inces_comedorbundle_menutype[postre]'   : { required         : 'Fill the field \'Dessert\'' },
            'inces_comedorbundle_menutype[dia]'      : { venezuelanDate   : 'Please fill a date in format dd/mm/yyyy' }
        }
    });
    $('.menu_alday_form').validate({
        rules: {
            'inces_comedorbundle_menutodaytype[seco]'     : { required       : true },
            'inces_comedorbundle_menutodaytype[sopa]'     : { required       : true },
            'inces_comedorbundle_menutodaytype[salado]'   : { required       : true },
            'inces_comedorbundle_menutodaytype[jugo]'     : { required       : true },
            'inces_comedorbundle_menutodaytype[ensalada]' : { required       : true },
            'inces_comedorbundle_menutodaytype[postre]'   : { required       : true }
        },
        messages: {
            'inces_comedorbundle_menutodaytype[seco]'     : { required       : 'Fill the field \'First Plate\'' },
            'inces_comedorbundle_menutodaytype[sopa]'     : { required       : 'Fill the field \'Soup\'' },
            'inces_comedorbundle_menutodaytype[salado]'   : { required       : 'Fill the field \'Second Plate\'' },
            'inces_comedorbundle_menutodaytype[jugo]'     : { required       : 'Fill the field \'Juice\'' },
            'inces_comedorbundle_menutodaytype[ensalada]' : { required       : 'Fill the field \'Salad\'' },
            'inces_comedorbundle_menutodaytype[postre]'   : { required       : 'Fill the field \'Dessert\'' }
        }
    });
    $('.usuario_form').validate({
        rules: {
            'inces_comedorbundle_usuariotype[nombre]'   : { required           : true },
            'inces_comedorbundle_usuariotype[apellido]' : { required           : true },
            'inces_comedorbundle_usuariotype[cedula]'   : { isANumber          : true },
            'inces_comedorbundle_usuariotype[ncarnet]'  : { isANumber          : true },
            'inces_comedorbundle_usuariotype[correo]'   : { validateEmail      : true },
	    'inces_comedorbundle_usuariotype[rol]'      : { required                 : true },
            'inces_comedorbundle_usuariotype[image]'    : { userImageExtension : true }
        },
        messages: {
            'inces_comedorbundle_usuariotype[nombre]'   : { required           : 'Fill the field \'Name\'' },
            'inces_comedorbundle_usuariotype[apellido]' : { required           : 'Fill the field \'Last Name\'' },
            'inces_comedorbundle_usuariotype[cedula]'   : { isANumber          : 'Fill the field \'Id\' with a valid input' },
            'inces_comedorbundle_usuariotype[ncarnet]'  : { isANumber          : 'Fill the field \'Card Number\' with a valid input' },
            'inces_comedorbundle_usuariotype[correo]'   : { validateEmail      : 'Fill the field \'Email\' with a valid format' },
            'inces_comedorbundle_usuariotype[rol]'      : { required           : 'Fill the field \'Rol\'' },
	    'inces_comedorbundle_usuariotype[image]'    : { userImageExtension : 'The format must be gif|jpg|png' }
        }
    });
    $('.usuario_externo_form').validate({
        rules: {
            'inces_comedorbundle_usuarioexternotype[nombre]'   : { required           : true },
            'inces_comedorbundle_usuarioexternotype[apellido]' : { required           : true },
            'inces_comedorbundle_usuarioexternotype[cedula]'   : { isANumber          : true }
        },
        messages: {
            'inces_comedorbundle_usuarioexternotype[nombre]'   : { required           : 'Fill the field \'Name\'' },
            'inces_comedorbundle_usuarioexternotype[apellido]' : { required           : 'Fill the field \'Last Name\'' },
            'inces_comedorbundle_usuarioexternotype[cedula]'   : { isANumber          : 'Fill the field \'Id\' with a valid input' }
        }
    });
    $('.user_admin_form').validate({
        rules: {
            'fos_user_registration_form[username]'              : { required              : true,
                                                                    uniqueUserName        : true },
            //'fos_user_registration_form[plainPassword][first]'  : { isEqual               : true },
            'fos_user_registration_form[plainPassword][second]' : { isEqual               : true },
            'fos_user_registration_form[nombre]'                : { required              : true },
            'fos_user_registration_form[apellido]'              : { required              : true },
            'fos_user_registration_form[cedula]'                : { isANumber             : true },
            'fos_user_registration_form[ncarnet]'               : { isANumber             : true },
            'fos_user_registration_form[email]'                 : { validateEmailNoNull   : true }
        },
        messages: {
            'fos_user_registration_form[username]'              : { required              : 'Fill the field \'Username\'',
                                                                    uniqueUserName        : 'The username is already taken'},
            //'fos_user_registration_form[plainPassword][first]'  : { isEqual               : 'Las contraseñas deben coincidir y no pueden ser vacías'},
            'fos_user_registration_form[plainPassword][second]' : { isEqual               : 'Las contraseñas deben coincidir y no pueden ser vacías'},
            'fos_user_registration_form[nombre]'                : { required              : 'Fill the field \'Name\''},
            'fos_user_registration_form[apellido]'              : { required              : 'Fill the field \'Last Name\''},
            'fos_user_registration_form[cedula]'                : { isANumber             : 'Fill the field \'Id\' with a valid input'},
            'fos_user_registration_form[ncarnet]'               : { isANumber             : 'Fill the field \'Card Number\' with a valid input'},
            'fos_user_registration_form[email]'                 : { validateEmailNoNull   : 'Fill the field \'Email\' with a valid format'}
        }
    });
    $('.user_admin_profile_form').validate({
        rules: {
            'fos_user_profile_form[user][username]'        : { required              : true },
            'fos_user_profile_form[current]'               : { required              : true },
            'fos_user_profile_form[user][email]'           : { validateEmailNoNull   : true }
        },
        messages: {
            'fos_user_profile_form[user][username]'        : { required              : 'Fill the field \'Username\''},
            'fos_user_profile_form[current]'               : { required              : 'Fill the field \'Password\''},
            'fos_user_profile_form[user][email]'           : { validateEmailNoNull   : 'Fill the field \'Email\' with a valid format'}
        }
    });
    $('.rol_form').validate({
        rules: {
            'inces_comedorbundle_roltype[nombre]'             : { required       : true },
            'inces_comedorbundle_roltype[monal]'              : { isANumber      : true },
            'inces_comedorbundle_roltype[horaComerStart]'     : { isANumber      : true },
            'inces_comedorbundle_roltype[horaComerStartAMPM]' : { required       : true },
            'inces_comedorbundle_roltype[horaComerEnd]'       : { isANumber      : true },
            'inces_comedorbundle_roltype[horaComerEndAMPM]'   : { required       : true }
        },
        messages: {
            'inces_comedorbundle_roltype[nombre]'             : { required       : 'Fill the field \'Name\'' },
            'inces_comedorbundle_roltype[monto]'              : { isANumber      : 'Fill the field \'Last Name\'' },
            'inces_comedorbundle_roltype[horaComerStart]'     : { isANumber      : 'Fill with a valid input' },
            'inces_comedorbundle_roltype[horaComerStartAMPM]' : { required       : true },
            'inces_comedorbundle_roltype[horaComerEnd]'       : { isANumber      : 'Fill with a valid input' },
            'inces_comedorbundle_roltype[horaComerEndAMPM]'   : { required       : true }
        }
    });
    $('.reporte_usuarios_form').validate({
        rules: {
            'inces_comedorbundle_contabilidadtype[cedula]'   : { required       : true },
            'inces_comedorbundle_contabilidadtype[from]'     : { dateRange      : true },
            'inces_comedorbundle_contabilidadtype[to]'       : { dateRange      : true }
        },
        messages: {
            'inces_comedorbundle_contabilidadtype[cedula]'   : { required       : 'Fill the field \'Id\' with a valid input' },
            'inces_comedorbundle_contabilidadtype[from]'     : { dateRange      : 'Please check the dates' },
            'inces_comedorbundle_contabilidadtype[to]'       : { dateRange      : 'Please check the dates' }
        }
    });
    $('.reporte_ingresos_form').validate({
        rules: {
            //'inces_comedorbundle_contabilidadtype[rol]'      : { required       : true },
            'inces_comedorbundle_contabilidadtype[from]'     : { dateRange      : true },
            'inces_comedorbundle_contabilidadtype[to]'       : { dateRange      : true }
        },
        messages: {
            //'inces_comedorbundle_contabilidadtype[rol]'      : { required     : 'Fill the field \'Rol\'' },
            'inces_comedorbundle_contabilidadtype[from]'     : { dateRange    : 'Please check the dates' },
            'inces_comedorbundle_contabilidadtype[to]'       : { dateRange    : 'Please check the dates' }
        }
    });
    $('.carga_masiva_form').validate({
        rules: {
            'inces_comedorbundle_carga_masivatype[file]'     : { cmFileExtension : true }
        },
        messages: {
            'inces_comedorbundle_carga_masivatype[file]'     : { cmFileExtension : 'The file must be in .csv format'}
        }
    });
    /* -------- Fin de las validaciones --------- */

    /* -------- Propiedades generales para las fechas ------ */
    $("#inces_comedorbundle_menutype_dia" ).datepicker({
        timeFormat: 'hh:mm:ss',
        dateFormat: 'dd/mm/yy',
        showButtonPanel: true
    });
    $( "#inces_comedorbundle_contabilidadtype_from" ).datepicker({
        //defaultDate: "+1w",
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        numberOfMonths: 3,
        onSelect: function( selectedDate ) {
            $( "#inces_comedorbundle_contabilidadtype_to" ).datepicker( "option", "minDate", selectedDate );
        }
    });
    $( "#inces_comedorbundle_contabilidadtype_to" ).datepicker({
        //defaultDate: "+1w",
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        numberOfMonths: 3,
        onSelect: function( selectedDate ) {
            $( "#inces_comedorbundle_contabilidadtype_from" ).datepicker( "option", "maxDate", selectedDate );
        }
    });

    /* ------ Fin Propiedades generales para las fechas ----- */

    function changeDate(date){
        var year = date.substring(6);
        var month = date.substring(3,5);
        var day = date.substring(0,2);
        return year + '-' + month + '-' + day;
    }
    $('.reporte_usuarios_link').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');

        if (form.valid()){
            $("#lightbox, #lightbox-loader").fadeIn(300);

            var url  = $(this).attr('href');
            var ced  = $('#inces_comedorbundle_contabilidadtype_cedula').val();
            var from = $('#inces_comedorbundle_contabilidadtype_from').val();
            var to   = $('#inces_comedorbundle_contabilidadtype_to').val();
            var urlFinal = url;

            if(ced != "")
                urlFinal = urlFinal + '/' + ced;
            if(from != ""){
                from = changeDate(from);
                urlFinal = urlFinal + '/' + from;
            }
            if(to != ""){
                to = changeDate(to);
                urlFinal = urlFinal + '/' + to;
            }

            $("#lightbox, #lightbox-loader").fadeOut(300);
            window.location.href = urlFinal;
        }
    });
    $('.reporte_ingresos_link').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');

        if (form.valid()){
            $("#lightbox, #lightbox-loader").fadeIn(300);

            var url  = $(this).attr('href');
            var rol  = $('#inces_comedorbundle_contabilidadtype_rol').val();
            var from = $('#inces_comedorbundle_contabilidadtype_from').val();
            var to   = $('#inces_comedorbundle_contabilidadtype_to').val();
            var urlFinal = url;

            if(from != ""){
                from = changeDate(from);
                urlFinal = urlFinal + '/' + from;
            }
            if(to != ""){
                to = changeDate(to);
                urlFinal = urlFinal + '/' + to;
            }
            if(rol != "")
                urlFinal = urlFinal + '/' + rol;

            $("#lightbox, #lightbox-loader").fadeOut(300);
            window.location.href = urlFinal;
        }
    });
    $('[type=submit]:not(.search_keywords, '
      +'.delete_form_btn, .reporte_form_btn, .carga_masiva_form_btn, '
      +'.login_form_btn)').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        if (form.valid()){
            $("#lightbox, #lightbox-loader").fadeIn(300);
            $("form:first").ajaxForm({
                success: function(msg) {
                    $("#lightbox, #lightbox-loader").fadeOut(300);
                    window.location.href = msg;
                }
            }).submit();
        }
    });

    $('.login_form_btn').on('click', function(e) {
        e.preventDefault();
        var url = $('.route').val();
        var form = $(this).closest('form');
        if (form.valid()){
            $("#lightbox, #lightbox-loader").fadeIn(300);
            $("form").ajaxForm({
                success: function(msg) {
                    $("#lightbox, #lightbox-loader").fadeOut(300);
                    if(msg.indexOf("ERROR") != -1)
                        $( "#results" ).html( msg );
                    else{
                        window.location.href = url;
                    }
                }
            }).submit();
        }
    });

    $('.reporte_form_btn').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        if (form.valid()){
            $("#lightbox, #lightbox-loader").fadeIn(300);
            $("form").ajaxForm({
                target: '#results',
                success: function(msg) {
                    $("#lightbox, #lightbox-loader").fadeOut(300);
                }
            }).submit();
        }
    });

    $('.carga_masiva_form_btn').on('click', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        if (form.valid()){
            $("#lightbox, #lightbox-loader").fadeIn(300);
            $("form").ajaxForm({
                target: '#messages',
                success: function(msg) {
                    $("#lightbox, #lightbox-loader").fadeOut(300);
                }
            }).submit();
        }
    });

    $('.delete_form_btn').on('click', function(e) {
        e.preventDefault();
        $("#lightbox, #lightbox-loader").fadeIn(300);
        $("form").ajaxForm({
            success: function(msg) {
                $("#lightbox, #lightbox-loader").fadeOut(300);
                window.location.href = msg;
            }
        }).submit();
    });

    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();

    $('#search_keywords').keyup(function(e) {
        e.preventDefault();
        if(e.keyCode == 13) return false;
        var val = this.value + '*';
        if (val.length >= 3 || val == '*') {
            delay(function(){
                if (val.length >= 3 || val == '*') {
                    $("#lightbox, #lightbox-loader").fadeIn(300);

                    $('#content').load(
                        $('#search_keywords').parents('form').attr('action') + "?page=1&query=" + encodeURI(val),
                        { query: val },
                        function() {
                            $("#lightbox, #lightbox-loader").fadeOut(300);
                        }
                    );
                }
            }, 800 );
        }
    });

    $(".filter").click(function(event) {
        if(event.keyCode == 13) return false;
        event.preventDefault();
        $("#lightbox, #lightbox-loader").fadeIn(300);
        var field = $(this).attr('value');
        var attr  = $(this).attr('asc');
        var url   = $(this).attr('href');
        if (attr == '1')
            attr = '0';
        else
            attr = '1';
        $('#content').load(
            url,
            { field: field, attr: attr },
            $("#lightbox, #lightbox-loader").fadeOut(300)
        );
    });

    // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
    $( "#dialog:ui-dialog" ).dialog( "destroy" );

    $( "#dialog" ).dialog({
        autoOpen: false,
        resizable: false,
        height:250,
        width:500,
        modal: true,
        open: function(){
            jQuery('#closer').bind('click',function(){
                jQuery('#dialog').dialog('close');
            })
        },
        buttons: {
            Ok: function() {
                $( this ).dialog( "close" );
            }
        }
    });

    $( ".opener" ).on('click', function(event) {
        var url = $(this).find('a').attr("value");
        if(typeof url != 'undefined') {
          $.ajax({
              url: url,
              success: function(msg) {
                  $( "#dialog" ).html( msg );
                  $( "#dialog" ).dialog( "open" );
              }
          });
          event.preventDefault();
          event.stopPropagation();
        }else {
          window.location = $(this).find('a').attr('href');
        }
    }).hover( function() {
      $(this).toggleClass('hover');
    });

    $('#search_keywords').bind("keypress", function (e) {
       if (e.keyCode == 13) return false;
    });

    // Fade In or Fade Out
    $("a#show-panel").click(function(){
        $("#lightbox, #lightbox-loader").fadeIn(300);
    })
    $("a#close-panel").click(function(){
        $("#lightbox, #lightbox-loader").fadeOut(300);
    })

    // Desabilitando input de fecha today
    $(".menu_today_form #inces_comedorbundle_menutodaytype_dia").attr('readonly','readonly');

    $('tbody tr').not('.tsearch, .opener').click( function() {
        window.location = $(this).find('a').attr('href');
    }).hover( function() {
        $(this).toggleClass('hover');
    });
});
