<div class="col-md-12">
    @if($state)
        @if($style)
            <div class="box box-success collapsed-box box-solid">
                @else
                    <div class="box box-primary collapsed-box box-solid">
                        @endif
                        @else
                            <div class="box box-default collapsed-box box-solid">
                                @endif

                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        <a href="{{url('/courses/'.$id)}}">{{$title}}</a>
                                    </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                    class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <span class="field-title col-md-1">Description:</span>
                                        <p class="col-md-10">{{$description}}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span class="field-title">Initial Date:</span>
                                            <span class="field-value">{{$start_date}}</span>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="field-title">Final Date:</span>
                                            <span class="field-value">{{$end_date}}</span>
                                        </div>

                                        <div class="col-md-3">
                                            <span class="field-title">Duration:</span>
                                            <span class="field-value">{{$duration.' weeks'}}</span>
                                        </div>

                                        <div class="col-md-3">
                                            @if($state)
                                                @if($style)
                                                    <a href="{{url('/courses/'.$id)}}"
                                                       class="btn btn-success full-width">More</a>
                                                @else
                                                    <a href="{{url('/courses/'.$id)}}"
                                                       class="btn btn-primary full-width">More</a>
                                                @endif
                                            @else
                                                <a href="{{url('/courses/'.$id)}}" class="btn btn-default full-width">More</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                    </div>
