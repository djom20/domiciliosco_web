@extends('layouts.login')

@section('content')
    <div class="container" id="login">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                {{ HTML::image('assets/images/logotext2.png', 'Logo DomiciliosCO', array('class' => 'img-responsive logotext')) }}
            </div>
            <div class="col-xs-11 col-sm-8 col-md-8 col-lg-8 language">
                <label for="exampleInputEmail1" style="color: #fff;">Language: </label>
                {{ HTML::link('language/change/en', 'EN', array('class' => 'btn btn-lang')) }}
                {{ HTML::link('language/change/es', 'ES', array('class' => 'btn btn-lang')) }}
            </div>
        </div>
        <div class="row">
            <div class="visible-lg-block col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-6 col-lg-offset-0">
                <h1 style="color:#fff; margin-top: 40px;">Los mejores restaurantes de barranquilla, del restaurante a tu mesa en un solo tap!!!</h1>
                <h3 style="color:#fff; margin: 40px 0;">Ya descargaste DomiciliosCO en tu celular? Que esperas!!!</h3>
                <div class="stores">
                    <div class="col-md-6"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.domiciliosco.app">{{ HTML::image('assets/images/stores/play.png', 'Play Store') }}</a></div>
                    <div class="col-md-6"><a target="_blank" href="https://itunes.apple.com/co/app/domiciliosco/id764930938?mt?8">{{ HTML::image('assets/images/stores/apps.png', 'Apps Store') }}</a></div>
                </div>
                <p class="col-md-12" style="color:#fff; margin: 30px 0 0;">Pide tu comida favorita a domicilio solo a través de DomiciliosCO</p>
                <small class="col-md-12" style="color:#fff;">Copy &copy; 2013 - 2014</small>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-9 col-lg-offset-3 well" style="background-color: #b9363c; border-color: #b9363c; background-image: none;">
                        {{ Form::open(array('onsubmit' => 'return false', 'id' => 'Sessionlogin')) }}
                            <h2 class="form-signin-heading" style="text-align: center; margin-top: 0;">{{ HTML::image('assets/images/logo4.png', 'Logo DomiciliosCO', array('style' => 'width:90px')) }}</h2>
                            <div class="gruped well" style="background-color:#fff;">
                                <div class="form-group input-group" style="width: 100%;">
                                    <span class="hidden-xs input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <div class="input email required">
                                        <input name="username" placeholder="Email" class="form-control" maxlength="80" type="email" id="username" required="required" autofocus>
                                    </div>
                                </div>
                                <div class="form-group input-group" style="width: 100%;">
                                    <span class="hidden-xs input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <div class="input password required">
                                        <input name="password" placeholder="Password" class="form-control" type="password" id="password" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="input submit">
                                <div class="submit">
                                    <input id="signup" class="btn btn-success btn-block" type="submit" value="Login">
                                </div>
                            </div>
                            @if(Session::has('mensaje_error'))
                                <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                            @endif
                        {{ Form::close() }}
                        <p id="link-passw" class="link-password small"><a style="color:#fff" href="/password">Do not remember your password?</a></p>
                    </div>
                    <small class="col-md-12 visible-xs-block text-center" style="color:#fff;">Copy &copy; 2013 - 2014</small>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script id="login">
        $(function(){
            //Verificar los datos de logueo
            $("#Sessionlogin").submit(function() {
                $.ajax({
                    url: 'session/create',
                    type: 'post',
                    data: {username: $("#username").val(), password: $("#password").val(), _token: $("input[name=_token]").val()},
                    dataType: 'json',
                    error: function(data){ alert("Lo sentimos, usted no existe en nuestra bd."); },
                    success: function(data) {
                        if(data == 1) location.href = "./dashboard";
                        else alert("Lo sentimos, usted no existe en nuestra bd.");
                    }
                });
            });
        });
    </script>
@stop
