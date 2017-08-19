@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>
        <div class="container">
            <!-- Application Dashboard -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>
                                Social Credentials
                            </h2></div>

                        <div class="panel-body">
                            <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
                            <div class="bootstrap-iso">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="formden_header">

                                                <p>
                                                    Enter your social credentials here.
                                                </p>
                                            </div>
                                            <form method="post" action="/social">
                                                {{csrf_field()}}
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="Instagram">
                                                        Instagram
                                                        <span class="asteriskField">
        *
       </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-instagram">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="Instagram" name="instagram" placeholder="instagram" type="text"/>
                                                    </div>
                                                    <span class="help-block" id="hint_Instagram">
       enter your instagram id
      </span>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="facebook">
                                                        Facebook
                                                        <span class="asteriskField">
        *
       </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-facebook-official">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="Facebook" name="facebook" placeholder="Facebook" type="text"/>
                                                    </div>
                                                    <span class="help-block" id="hint_Facebook">
       Enter you facebook id
      </span>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="twitter">
                                                        Twitter
                                                        <span class="asteriskField">
        *
       </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-twitter">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="twitter" name="twitter" placeholder="twitter" type="text"/>
                                                    </div>
                                                    <span class="help-block" id="hint_twitter">
       Enter your twitter
      </span>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button class="btn btn-primary " name="submit" type="submit">
                                                            Submit
                                                        </button>
                                                    </div><b> *Please make sure your accounts aren't mark private.</b>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home>
@endsection

