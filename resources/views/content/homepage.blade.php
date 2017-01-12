@extends('layout.default')

@section('content')

    <div ng-view class="container">
        <br>
        <div class="page-header">
            <h1>Topics</h1>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List of topics</h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Topic 1</h3>
                    </div>
                    <div class="panel-body">
                        <p>Description</p>
                        <a href="#" class="btn btn-success" role="button">Enter</a>
                        <a href="#" class="btn btn-danger" role="button">Delete</a>
                    </div>
                </div>
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Topic 2</h3>
                    </div>
                    <div class="panel-body">
                        <p>Description</p>
                        <a href="#" class="btn btn-success" role="button">Enter</a>
                        <a href="#" class="btn btn-danger" role="button">Delete</a>
                    </div>
                </div>
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Topic 3</h3>
                    </div>
                    <div class="panel-body">
                        <p>Description</p>
                        <a href="#" class="btn btn-success" role="button">Enter</a>
                        <a href="#" class="btn btn-danger" role="button">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop