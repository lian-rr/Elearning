<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Enroll in {{$course_name}} course.</h4>
        </div>

        <form class="form-horizontal" action="{{url('/courses/'.$course_id.'/enroll')}}" role="form" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="course" class="col-md-4 control-label">Course ID</label>
                    <div class="col-md-6">
                        <input id="course" type="text" class="form-control" name="course" value="{{ $course_id}}"
                               disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_name" class="col-md-4 control-label">Course Name</label>
                    <div class="col-md-6">
                        <input id="course_name" type="text" class="form-control" name="course_name"
                               value="{{ $course_name}}"
                               disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="year" class="col-md-4 control-label">Year</label>
                    <div class="col-md-6">
                        <input id="year" type="number" class="form-control" name="year" value="{{date("Y")}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="session" class="col-md-4 control-label">Session</label>
                    <div class="col-md-6">
                        <input id="session" type="number" class="form-control" name="session" value="1" min="1" max="4" required>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Confirm</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
