<!DOCTYPE html>
<html lang="en">
    
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="Clients.js"></script>
<!------ Include the above in your HEAD tag ---------->



<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Clients</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
            margin-left: 10px;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css"
                rel="stylesheet">
            <!-- FORM  -->
            <div class="col-md-12">
                <form class="form-horizontal" id="form-edit-client" action='../Controllers/ClientsController.php' method='post'>
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Client</legend>
                        <div class="form-group">
                            <input id="client-id" name="client-id" type="hidden">
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="client-name">Name</label>
                            <div class="col-md-4">
                                <input id="client-name" name="client-name" type="text" placeholder="your client's name"
                                    class="form-control input-md">
                                <span class="help-block">Full name of your customer</span>
                            </div>
                        </div>
                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="client-code">Code</label>
                            <div class="col-md-4">
                                <input id="client-code" name="client-code" type="text" placeholder="your client's code"
                                    class="form-control input-md">
                                <span class="help-block">code your customer</span>
                            </div>
                        </div>
                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="client-picture">Picture</label>
                            <div class="col-md-4">
                                <input id="client-picture" name="client-picture" type="text" placeholder="your client's picture"
                                    class="form-control input-md">
                                <span class="help-block">picture your customer</span>
                            </div>
                        </div>
                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="client-city">City</label>
                            <div class="col-md-4">
                                <select class="form-control" id="client-city">
                                </select>
                                <span class="help-block">City your customer</span>
                            </div>
                        </div>
                        <!-- Button -->
                    </fieldset>
                </form>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="btn-save"></label>
                    <div class="col-md-4" id="saveupdate">
                        <button id="btn-save" name="btn-save" class="btn btn-success" onclick="addClient()">Save</button>
                    </div>
                </div>
            </div>


            <div class=col-md-12>
                <legend>List of clients</legend>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default panel-table">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <h3 class="panel-title">Panel Heading</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Picture</th>
                                                <th>City</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="form-list-client-body">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col col-xs-4">Page 1 of 5
                                        </div>
                                        <div class="col col-xs-8">
                                            <ul class="pagination hidden-xs pull-right">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                            <ul class="pagination visible-xs pull-right">
                                                <li><a href="#">«</a></li>
                                                <li><a href="#">»</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br> 
            <!-- view -->
        </div>
    </div>
</body>
</html>