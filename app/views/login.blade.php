<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LC Admin</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- MetisMenu CSS -->
    {{ HTML::style('assets/css/plugins/metisMenu/metisMenu.min.css') }}

    <!-- Custom CSS -->
    {{ HTML::style('assets/css/sb-admin-2.css') }}

    <!-- Custom Fonts -->
    {{ HTML::style('assets/font-awesome-4.1.0/css/font-awesome.min.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                        @if($errors->has())
                            <div class="alert alert-danger alert-dismissable">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                    @foreach($errors->all() as $message)
                                        <p>{{ $message }}</p>
                                    @endforeach
                            </div>
                        @endif
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Ingat Saya
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    {{ HTML::script('assets/js/jquery.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/js/bootstrap.min.js')}}

    <!-- Metis Menu Plugin JavaScript -->
    {{ HTML::script('assets/js/plugins/metisMenu/metisMenu.min.js')}}
    <!-- Custom Theme JavaScript -->
    {{ HTML::script('assets/js/sb-admin-2.js')}}

</body>

</html>
