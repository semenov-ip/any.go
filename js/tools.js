$(document).ready(function(){
	
    // Редактор кнопки "Номера отправителя"
    // Редактор кнопки "Даты следующего действия"
    $('.senders_number').toggle(
        function(){
            $(this).prev().removeAttr("disabled"); 
            $(this).children().removeClass("icon-edit");
            $(this).children().addClass("icon-ok");
        },
        function(){
            // Сохранение данных в БД.
            var id = $(this).prev().attr("id_order");
            var senders_num = $(this).prev().val();
            var column_name = $(this).prev().attr("name");
            
            if( senders_num.length > 0 ){
                $.ajax({
                    type : "POST",
                    url : "/admin/senders_number/",
                    data : "id=" + id + "&value=" + senders_num + "&column_name=" + column_name,
                    success : function(data){
                        if(data.length > 2){
                            alert(data);
                        }
                    }
                })
            }
            
            $(this).prev().attr("disabled","disabled");
            $(this).children().removeClass("icon-ok");
            $(this).children().addClass("icon-edit");
        }
    );
});

function onOff(id){
    var on_off = Number($(".on_off_" + id).is(":checked"));

    $.ajax({
        type : "POST",
        url : "/admin/on_off/",
        data : "id=" + id + "&on_off=" + on_off,
        success : function(data){
            return true;
        }
    });
}

function SaveUpdate(event, form, events, dbcolumnname){
    event.preventDefault();
    var input, url_request;

    var dataForm = {};

    if(dbcolumnname != undefined){
        dataForm['dbcolumnname'] = dbcolumnname;
    }
    if( events != undefined ){
        dataForm['events'] = events;
    }

    // Подготовливаем данные  
    var input_count = $('input', $(form)).length - 1;

    for(var i=0; i < input_count; i++ ){
        
        input = $('input', $(form))[i];

        if( $(input).attr('type') == 'checkbox' ){

            dataForm[$(input).attr('name')] = Number( $(input).is(":checked") );

        } else {

            dataForm[$(input).attr('name')] = $.trim( $(input).val() );

        }

    }

    if(dataForm.length != 0){
        
        url_request = "/crud/CommonData/";
        
        return ajax_record(dataForm, url_request);
    }

    return false;
}

function ajax_record(dataForm, url_request){

    $.ajax({
        type: "POST",
        
        url: url_request,
        
        data: 'dataForm=' + $.toJSON(dataForm),
        
        success : function(data){
            
            location.reload();

        }
    });

}





