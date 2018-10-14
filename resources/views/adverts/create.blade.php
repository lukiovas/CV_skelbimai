@extends('layouts.app')

@section('content')

<a type="button" href="/cv_skelbimai/public" class="btn btn-primary float-right">Atgal</a>
<br>
<form method="POST" action="create" enctype="multipart/form-data">

                            {{csrf_field()}}

                         <div class="form-group">
                         <label for="name">Vardas, Pavardė</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Vardenis Pavardenis">
                        </div>
                             <div class="form-group">
                        <div class="form-group">
                        <label for="email">El. paštas</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                        <label for="job_category">Pasirinkite darbo sritį</label>
                        <select  class="form-control" id="job_category" name="job_category">
                            <option>Statybos</option>
                            <option>Dizainas/Architektura</option>
                            <option>Inžinerija/Mechanika</option>
                            <option>Informacinės technologijos</option>
                            <option>Teisė</option>
                        </select>
                        </div>
                        <div class="form-group">
                                <label for="file">Įkelkite CV</label>
                                <input type="file" class="form-control-file" name="file" id="file">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" id="submit">
                    </div>
                    </form>
@endsection
