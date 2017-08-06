@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Your application's dashboard.
                        <div class="container">

                            <h2>Laravel 5 Instagram API tutorial with example</h2><br/>



                            <div class="container">
                                <h2>Hover Rows</h2>
                                <p>The .table-hover class enables a hover state on table rows:</p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th></th>
                                        <th>Profile</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ $items[0]['user']['full_name'] }}</td>
                                        <td>Doe</td>
                                        <td><img src="{{ $items[0]['user']['profile_picture'] }}"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="panel panel-primary">

                                <div class="panel-heading">Instagram Feed</div>

                                <div class="panel-body">

                                    <table class="table table-bordered">

                                        <thead>

                                        <th>No</th>

                                        <th width="200px;">Id</th>

                                        <th>Code</th>

                                        <th>Image</th>

                                        <th>Location</th>

                                        <th>Total Likes</th>

                                        <th>Total Comments</th>

                                        </thead>

                                        <tbody>

                                        @if(!empty($items))

                                            @foreach($items as $key => $item)

                                                <tr>

                                                    <td>{{ ++$key }}</td>

                                                    <td>{{ $item['id'] }}</td>

                                                    <td>{{ $item['code'] }}</td>

                                                    <td><img src="{{ $item['images']['standard_resolution']['url'] }}" style="width:100px;"></td>

                                                    <td>{{ isset($item['location']['name']) ? $item['location']['name'] : '' }}</td>

                                                    <td>{{ $item['likes']['count'] }}</td>

                                                    <td>{{ $item['comments']['count'] }}</td>

                                                </tr>

                                            @endforeach

                                        @else

                                            <tr>

                                                <td colspan="4">There are no data.</td>

                                            </tr>

                                        @endif

                                        </tbody>

                                    </table>

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
