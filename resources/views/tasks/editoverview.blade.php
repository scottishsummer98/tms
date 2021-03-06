@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Task 
    </div>
    <form method="POST" action="{{ route('tasks.overview.updateOverview', $task->id) }}">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 ml-5">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
        
                        <div class="col-md-7">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $task->title) }}" required autocomplete="title" autofocus>
        
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="assigned_by_country" class="col-md-4 col-form-label">{{ __('Assignee Country') }}</label>
        
                        <div class="col-md-7">
                            <select id="assigned_by_country" type="text" class="form-control @error('assigned_by_country') is-invalid @enderror" name="assigned_by_country" value="{{ old('assigned_by_country') }}" required autocomplete="assigned_by_country" autofocus>
                                <option selected disabled>Select Country</option>
                                @foreach ($countrylist as $listitem)
                                    <option value="{{ $listitem->coun_name }}">{{ $listitem->coun_name }}</option>
                                @endforeach
                            </select>
        
                            @error('assigned_by_country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="assigned_by" class="col-md-4 col-form-label">{{ __('Assigned By') }}</label>
        
                        <div class="col-md-7">
                            <select id="assigned_by" type="text" class="form-control @error('assigned_by') is-invalid @enderror" name="assigned_by" value="{{ old('assigned_by') }}" required autocomplete="assigned_by" autofocus>
                                <option selected disabled>Select User</option>
                                @foreach ($userlist as $listitem)
                                    <option value="{{ $listitem->user_name }}">{{ $listitem->first_name }} {{ $listitem->last_name }}</option>
                                @endforeach
                            </select>
        
                            @error('assigned_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="assigned_to_country" class="col-md-4 col-form-label">{{ __('Country') }}</label>
        
                        <div class="col-md-7">
                            <select id="assigned_to_country" type="text" class="form-control @error('assigned_to_country') is-invalid @enderror" name="assigned_to_country" value="{{ old('assigned_to_country') }}" required autocomplete="assigned_to_country" autofocus>
                                <option selected disabled>Select Country</option>
                                @foreach ($countrylist as $listitem)
                                    <option value="{{ $listitem->coun_name }}">{{ $listitem->coun_name }}</option>
                                @endforeach
                            </select>
        
                            @error('assigned_to_country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="assigned_to" class="col-md-4 col-form-label">{{ __('Assigned To') }}</label>
        
                        <div class="col-md-7">
                            <select id="assigned_to" type="text" class="form-control @error('assigned_to') is-invalid @enderror" name="assigned_to" value="{{ old('assigned_to') }}" required autocomplete="assigned_to" autofocus>
                                <option selected disabled>Select User</option>
                                @foreach ($userlist as $listitem)
                                    <option value="{{ $listitem->user_name }}">{{ $listitem->first_name }} {{ $listitem->last_name }}</option>
                                @endforeach
                            </select>
        
                            @error('assigned_to')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="assign_date" class="col-md-4 col-form-label">{{ __('Assign Date') }}</label>
        
                        <div class="col-md-7">
                            <input id="assign_date" type="date" class="form-control @error('assign_date') is-invalid @enderror" name="assign_date" value="{{ old('assign_date', $task->assign_date) }}" required autocomplete="assign_date" autofocus>
        
                            @error('assign_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label">{{ __('Status') }}</label>
        
                        <div class="col-md-7">
                            <select id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                                <option selected disabled>Select Status</option>
                                <option value="Assigned">Assigned</option>
                                <option value="Doing">Doing</option>
                                <option value="Done">Done</option>
                                <option value="Queue">Queue</option>
                            </select>
        
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label">{{ __('Description') }}</label>
        
                        <div class="col-md-10">
                            <textarea rows="10" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $task->description) }}" required autocomplete="description" autofocus></textarea>
        
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="btn btn-primary mr-2" href="{{ route('tasks.index') }}">Back</a>
                </li>
                <li class="nav-item">
                    <button type="submit" class="btn btn-success">Update</button>
                </li>
            </ul>
        </div>
    </form>   
</div>

@endsection

@section('footer')

<script>
    $(document).ready(function(){
        $('#assigned_by_country').val('{{$task->assigned_by_country}}')
        $('#assigned_by').val('{{$task->assigned_by}}')
        $('#assigned_to_country').val('{{$task->assigned_to_country}}')
        $('#assigned_to').val('{{$task->assigned_to}}')
        $('#status').val('{{$task->status}}')
        $('#description').val('{{$task->description}}')
    })
</script>

@endsection