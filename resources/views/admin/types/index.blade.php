@extends('layouts.app')

@section('page-title', 'Tipi')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tipi
                    </h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($types as $type)
                            <tr>
                              <th scope="row"> {{ $type->id }} </th>
                              <td> {{ $type->name }} </td>

                          @endforeach
                  
                      </tbody>
                    </table>
                  

                </div>
            </div>
        </div>
    </div>
@endsection
