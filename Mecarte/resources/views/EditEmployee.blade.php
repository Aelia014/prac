@extends('templates.default')

@section('content')
        <div id="editEmployeeModal" class="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ url('/admin/'.$employees->id) }}" method="post">
                        {!!  csrf_field() !!}
                        @method("PATCH")
                        <div class="modal-header">						
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label>ID</label>
                                <input type="text" class="form-control" value="{{$employees->id}}" name="id">
                            </div>					
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{$employees->name}}" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{$employees->email}}" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" required>{{$employees->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$employees->phone}}" required>
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection