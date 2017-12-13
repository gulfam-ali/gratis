@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <div class="col-md-12" style="    padding: 1em; background: url({{ url('assets/img/ferrari.jpg') }}); background-size:cover;" >
                <div class="row">
                    <div class="col-md-6" style="background: #fffffff0; padding: 1em;">
                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <select name="brand" class="form-control">
                                        <option value="">All</option>
                                        <option value="">BMW</option>
                                        <option value="">Ferrari</option>
                                        <option value="">Jaguar</option>
                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <select name="model" class="form-control">
                                        <option value="">All</option>
                                        <option value="">100</option>
                                        <option value="">200</option>
                                        <option value="">300</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
