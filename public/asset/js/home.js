$(document).ready(()=>{
    let dataMonths = getCountByMonths();
    let dataStatus = getCountByStatus();
    let dataStatusByMonths = getStatusByMonths();
    initChartCountByMonths(dataMonths);
    initChartCountByStatus(dataStatus);
    initChartStatusByMonths(dataStatusByMonths);
})


function getCountByMonths() {

    let data;
    $.ajax({
        type: "GET",
        url: 'getMonths',
        contentType: "application/json; charset=utf-8",
        async: false,
        cache: false
    }).done(function (Response) {
        data = Response;
        renderTableCountByMonths(data);
        initDatatableCountByMonths();
    })
    return data;

}


function getCountByStatus() {

    let data;
    $.ajax({
        type: "GET",
        url: 'getStatus',
        contentType: "application/json; charset=utf-8",
        async: false,
        cache: false
    }).done(function (Response) {
        data = Response;
        renderTableCountByStatus(data);
        initDatatableCountByStatus();
    })
    return data;

}


function getStatusByMonths() {

    let data;
    $.ajax({
        type: "GET",
        url: 'getStatusByMonths',
        contentType: "application/json; charset=utf-8",
        async: false,
        cache: false
    }).done(function (Response) {
        console.log(Response);
        data = Response;
        renderTableStatusByMonths(data);
        initDatatableStatusByMonths();
    })
    return data;

}


function initDatatableCountByMonths() {
    $('#example').DataTable( {
        "order": [[ 1, "desc" ]]
    });
}

function initDatatableCountByStatus() {
    $('#example1').DataTable( {
        "order": [[ 1, "desc" ]]
    });
}

function initDatatableStatusByMonths() {
    $('#example2').DataTable( {
        "order": [[ 1, "desc" ]]
    });
}

function renderTableCountByMonths(data) {
    let tBody = $('#tdBodyMonths');
    data.forEach(el => {
        let row = `<tr>
            <td>${el.month}</td>
            <td>${el.TOTAL}</td>
        </tr>`
        tBody.append(row);
    });
}

function renderTableCountByStatus(data) {
    let tBody = $('#tdBodyStatus');
    data.forEach(el => {
        let row = `<tr>
            <td>${el.estado}</td>
            <td>${el.total}</td>
        </tr>`
        tBody.append(row);
    });
}


function renderTableStatusByMonths(data) {
    let tBody = $('#tdBodyStatusByMonths');
    data.forEach(el => {
        let row = `<tr>
            <td>${el.estado}</td>
            <td>${el.month}</td>
            <td>${el.total}</td>
        </tr>`
        tBody.append(row);
    });
}

function initChartCountByMonths(datos) {

    const labels = [];
    datos.forEach(el => {
        let month = `${el.month}`
        labels.push(month)
    });
    const data = {
        labels: labels,
        datasets: [{
          label: 'Registros totales por Mes',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [],
        }]
    };
    datos.forEach(el => {
        data.datasets[0].data.push(el.TOTAL);
    });
    const config = {
        type: 'line',
        data,
        options: {},
        hover: {
            mode: 'index',
            intersec: false
        }
    };

    var myChart = new Chart(
        document.getElementById('monthsChart'),
        config
    );
}


function initChartCountByStatus(datos) {

    const labels = [];
    datos.forEach(el => {
        let month = `${el.estado}`
        labels.push(month)
    });
    const data = {
        labels: labels,
        datasets: [{
          label: 'Registros totales por Estado',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [],
        }]
    };
    datos.forEach(el => {
        data.datasets[0].data.push(el.total);
    });
    const config = {
        type: 'line',
        data,
        options: {},
        hover: {
            mode: 'index',
            intersec: false
        }
    };

    var myChart = new Chart(
        document.getElementById('statusChart'),
        config
    );
}


function initChartStatusByMonths(datos) {


    const labels = [];
    datos.forEach(el => {
        let status = `${el.estado}`
        labels.push(status)
    });
    const data = {
        labels: labels,
        datasets: [{
          label:['Enero','Febrero','Marzo','Abril','Mayo'],
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [],
        }]
    };

    datos.forEach(el => {
        data.datasets[0].data.push(el.total);
    });
    const config = {
        type: 'bar',
        data,
        options: {
            responsive: true,
        }
    };

    var myChart = new Chart(
        document.getElementById('statusByMonthsChart'),
        config
    );
}
