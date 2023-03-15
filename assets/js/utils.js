// var titleSuccess = '<strong class="me-auto">Parabéns!</strong>';
// var bodySuccess = ' Operação realizada com sucesso';
// var success = 'success';

var checkTodos = $(".checkTodos");
checkTodos.click(function () {
    document.querySelector('.tickets').textContent = ''
    if ($(this).is(':checked')) {
        $('input:checkbox').prop("checked", true);
        document.querySelector('.tickets').textContent = 'Desmarcar todos'
        eraseAlert('fieldAlertErrorDayWeekAllocation')
        eraseAlert('fieldAlertErrorShiftAllocation')
    } else {
        $('input:checkbox').prop("checked", false);
        document.querySelector('.tickets').textContent = 'Marcar todos'
    }
});

const eraseAlert = (option) => {

    if(typeof option == 'string') {
        document.getElementById(option).innerHTML = '';
    } else {        
        option.forEach((e)=>{
            document.getElementById(e).innerHTML = '';            
        })
    }
}

// const checkAll = document.getElementById('checkAll');
// console.log(checkAll.checked);

// checkAll.addEventListener('click', () => {
//     $(".checkbox").each(
//         function () {
//             if (checkAll.checked == false) {
//                 //$(this).bootstrapSwitch('state', false);
//                 // checkAll.style.backgroundColor = '#FFF'
//                 // checkAll.style.color = '#000'
//                 alert('marcou')
//             } else {
//                 //$(this).bootstrapSwitch('state', true)
//                 // checkAll.style.backgroundColor = 'green'
//                 // checkAll.style.color = '#FFF'
//                 alert('desmarcou')
//             }
//         }
//     );
// });

// function marcaDesmarca(caller) {
//     var checks = document.querySelectorAll('input[type="checkbox"]');    
//     for(let i = 0; i < checks.length; i++) {
//       checks[i].checked = checks[i] == caller;   
//     }
//   }

// function marca(caller) {
//     var checks = document.querySelectorAll('input[type="checkbox"]');
//     for (let i = 0; i < checks.length; i++) {
//         checks[i].checked = checks[i] == caller;
//     }

//     //     checks.addEventListener('click', () => {   
//     //     $(":checkbox").each(
//     //         function() {
//     //             if ($(this).bootstrapSwitch('state')) {
//     //                 $(this).bootstrapSwitch('state', false);
//     //             } else {
//     //                 $(this).bootstrapSwitch('state',true)
//     //             }            
//     //         }
//     //     );
//     // }
//     ;

// }
// const URL_BASE = 'http://localhost/nw-templ/soft-ui-dashboard-main/pages/';
//const URL_BASE = 'http://localhost/gerenciador-horario/public';

const convertStatus = (status) => {
    let _shift = 'INATIVO'
    if (status === 'A')
        _shift = 'ATIVO'
    return _shift;
}
const convertStatusRotulo = (status) => {
    let _shift = 'Ativar'
    if (status === 'A')
        _shift = 'Desativar'
    return _shift;
}

const convertDayWeek = (dia, status) => {

    let day
    let data = [
        "SEG",
        "TER",
        "QUA",
        "QUI",
        "SEX"
    ]
    console.log(status);

    if (status === true) {
        data = [];
        data = [
            "SEGUNDA",
            "TERÇA",
            "QUARTA",
            "QUINTA",
            "SEXTA"
        ]
    }
    data.forEach((item, indice) => {
        if (dia == indice + 2) {
            day = item
        }
    });
    return day;
}

function translateSchedule(position, shift) {
    let textSchedule
    var schedule = [];
    schedule['M'] = [
        "07:00 - 07:45",
        "07:45 - 08:30",
        "08:30 - 09:15",
        "09:15 - 10:00",
        "10:00 - 10:45",
        "10:45 - 11:30"
    ];
    schedule['T'] = [
        "13:00 - 13:45",
        "13:45 - 14:30",
        "14:30 - 15:15",
        "15:15 - 16:00",
        "16:00 - 16:45",
        "16:45 - 17:30"
    ];

    //console.log(schedule)
    schedule[shift].forEach((item, ind) => {
        if (position == ind + 1) {
            //console.log(item)
            textSchedule = item
        }
    })
    return textSchedule


}

const convertShift = (turno) => {
    let shift = 'TARDE'
    if (turno === 'M')
        shift = 'MANHÃ'
    return shift;
}

const convertShiftAbbreviation = (turno) => {
    let shift = 'Tar'
    if (turno === 'M')
        shift = 'Man'
    return shift;
}

const convertSituation = (situation) => {
    if (situation === 'L')
        return 'LIVRE';
    if (situation === 'O')
        return 'OCUPADO';
    return 'BLOQUEADO';
}

const loadToast = (title, body, status) => {

    let toast = {
        title: title,
        message: body,
        status: status,
        timeout: 1000
    }
    Toast.create(toast);
    Toast.setPlacement(TOAST_PLACEMENT.MIDDLE_CENTER);
    Toast.setTheme(TOAST_THEME.DARK);
    Toast.enableTimers(false);
    // $('.toast').on('hidden.bs.toast', e => {
    //     $(e.currentTarget).remove();
    //     //location.reload();
    //     //listYearSchool();
    //     //stopLoad();
    // });
}

const validateErros = (errors, locale) => {
    let r = document.getElementById(locale).innerHTML = '';
    if (errors) {
        r = document.getElementById(locale).innerHTML = `<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ${errors}!`
    }
    return r;
}

const writeZero = (values) => {
    let a = values.length
    if (a <= 1) {
        return `0${values}`;
    }
    return values;

}

function printReportSerie(idSerie) {
    //listScheduleSeriesModal.hide();

    window.open(`${URL_BASE}/report/series/${idSerie}`);
}