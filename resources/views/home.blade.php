@extends('layouts.layout')


@section('content')

    {{-- Registros por MES --}}

    <h1 class="text-center mt-3">Registros totales por Mes</h1>
    <div class="container mt-5" style="display: flex;">
        <div class="col-6">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Mes</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="tdBodyMonths">
                    {{-- Datos Alimentados via AJAX --}}
                </tbody>
            </table>
        </div>
        <div class="col-6" style="margin-left: 40px;">
            <canvas id="monthsChart" width="400" height="400"></canvas>
        </div>
    </div>

    {{-- Registro totales pos Estado --}}

    <h1 class="text-center mt-5">Registros totales por Estado</h1>
    <div class="container mt-5" style="display: flex;">
        <div class="col-6">
            <table id="example1" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Estado Contacto</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="tdBodyStatus">
                    {{-- Datos Alimentados via AJAX --}}
                </tbody>
            </table>
        </div>
        <div class="col-6" style="margin-left: 40px;">
            <canvas id="statusChart" width="400" height="400"></canvas>
        </div>
    </div>


    {{-- Registro totales pos Estado --}}

    <h1 class="text-center mt-5">Registros totales de Estado por Mes</h1>
    <div class="container mt-5">
        <div class="col-12">
            <table id="example2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Estado Contacto</th>
                        <th>Mes</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="tdBodyStatusByMonths">
                </tbody>
            </table>
        </div>
        <div class="col-12" style="margin-left: 40px;">
            <canvas id="statusByMonthsChart" width="400" height="400"></canvas>
        </div>
    </div>
@endsection
