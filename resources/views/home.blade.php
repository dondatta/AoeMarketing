@extends('spark::layouts.app')

@section('content')

    <home :user="user" inline-template>
        <div class="container">

            <!-- Application Dashboard -->
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2
                                    class="text-center text-uppercase">{{ $items[0]['user']['full_name'] }}</h2></div>
                        <div class="panel-body"><a href="http://www.instagram.com/{{ $items[0]['user']['username'] }}"><img src="{{ $items[0]['user']['profile_picture'] }}"
                                                    class="center-block img-thumbnail img-responsive"></a>
                            <div class="bg-primary text-center"><h2 class="glyphicon glyphicon-comment"> Comments</h2></div>
                            @if(!empty($items))

                                @foreach($items as $key => $item)
                                    <!-- Left-aligned -->
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ $item['comments']['data'][0]['from']['profile_picture'] }}" class="media-object" style="width:60px">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{ $item['comments']['data'][0]['from']['full_name'] }}</h4>
                                                <p>{{ $item['comments']['data'][0]['text'] }}...</p>
                                            </div>
                                        </div>

                                @endforeach

                            @else

                                <ul>

                                    <li>There are no data.</li>

                                </ul>

                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">


                             <div class="panel panel-primary">

                                <div class="panel-heading table-responsive">Instagram Feed</div>

                                <div class="panel-body ">

                                    <table class="table table-hover table-scriped table-bordered">

                                        <thead>
                                        <th>Image</th>
                                        <th>Total Likes</th>
                                        <th>Total Comments</th>
                                        </thead>

                                        <tbody>

                                        @if(!empty($items))

                                            @foreach($items as $key => $item)
                                                <tr>
                                                    <td><img src="{{ $item['images']['standard_resolution']['url'] }}"
                                                             style="width:100px;"></td>

                                                    <td class="bg-info"><span class="badge text-center">{{ $item['likes']['count'] }}</span></td>

                                                    <td class="bg-info"><span class="badge text-center">{{ $item['comments']['count'] }}</span></td>

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

    </home>
@endsection
