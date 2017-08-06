@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-4"><div class="panel panel-default">
                    <div class="panel-heading"><h2 class="text-center text-uppercase">{{ $items[0]['user']['full_name'] }}</h2></div>
                    <div class="panel-body"><img src="{{ $items[0]['user']['profile_picture'] }}" class="center-block img-thumbnail img-responsive"></div>
                </div></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">AOE Engagement Board</div>

                    <div class="panel-body">

                        <div class="container">

                            <br/>

                            <div class="panel panel-primary">

                                <div class="panel-heading">Instagram Feed</div>

                                <div class="panel-body">

                                    <table class="table table-bordered">

                                        <thead>

                                        <th>No</th>

                                        <th>Id</th>

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
