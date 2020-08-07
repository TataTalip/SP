@extends('layouts.app_admin')

@section('content')
    <section class="content-header">
    </section>
    <br>
<div class="col-md-12">
    <div class="box box-info">
        <div class="box-body">
            <div class="table-responsive">
                <br>
                <input class="form-control" type="text" placeholder="Введите текст для поиска" id="search-text" onkeyup="tableSearch()">
                <table id="info-table" class="table table-hover">
                    <thead>
                    <tr class='table-data'>
                        <th data-field="id" data-sortable="true">Номер</th>
                        <th data-field="name" data-sortable="true">Наимнование</th>
                        <th data-field="status" data-sortable="true" style="">Статус</th>
                        <th data-field="in_work" data-sortable="true" style="">В работе</th>
                        <th data-field="amount" data-sortable="true">Сумма</th>
                        <th data-field="created_at" data-sortable="true">Дата создания</th>
                        <th data-field="user_name" data-sortable="true">Исполнитель</th>
                    </tr>

                    </thead>
                    <tbody id="myTable">


                    </tbody>

                </table>

            </div>


        </div>
    </div>
</div>

<div class="text-center">
    <p> задач из </p>

        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                    </div>

                </div>

            </div>

        </div>


</div>
@endsection
