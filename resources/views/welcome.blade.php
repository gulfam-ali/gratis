@extends('layouts.app')

@section('content')
      <div class="row">
            <div class="col-md-12" style=" border-radius: 0.2em;   padding: 1em; background: url({{ url('assets/img/ferrari.jpg') }}); background-size:cover;" >
                <div class="row">
                    <div class="col-md-6" style="background: #fffffff0; padding: 0em;">
                      <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Personawagon</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Nutzfahrzeug</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Truck</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Wohnwagen</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Anhaenger</a>
                          </li>
                      </ul>

                      <form class="row" style="padding-top:1em;">
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
                      </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
