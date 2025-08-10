@extends('dashboard.layouts.master')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Back Links</h1>
@stop

@section('content')
    <div class="my-3">
        <x-adminlte-button class="btn-flat" type="submit" label="Add New" theme="success" icon="fas fa-lg fa-save" />
    </div>

    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">User Name</th>
                <th scope="col">Password</th>
                <th scope="col">Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>John</td>
                <td>Doe</td>
                <td>@social</td>
                <td>@social</td>
            </tr>
        </tbody>
</table>@stop

@section('css')
@stop

@section('js')

@stop
